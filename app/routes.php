<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/hello', function () {
    return View::make('hello');
});

Route::get('/about', 'HomeController@getAbout');
Route::get('/general', 'HomeController@getGeneral');
Route::get('/ecology', 'HomeController@getEcology');
Route::get('/travel', 'HomeController@getTravel');
Route::get('/water-resources', 'HomeController@getWaterResources');
Route::get('/history', 'HomeController@getHistory');
Route::get('/forgot-password', 'HomeController@getForgotPassword');

Route::get('/test3', 'HomeController@getTest3');
Route::get('/test5', 'HomeController@getTest5');
Route::get('/test51', 'HomeController@getTest51');

Route::group(["prefix"=>"/register"], function () {
    Route::get('/', 'RegisterController@getBasicRegister');
    Route::get('/profile', 'RegisterController@getProfileRegister');
    Route::get('/account', 'RegisterController@getAccountRegister');

//    Route::post('/', 'RegisterController@doBasicRegister');
    Route::post('/profile/save', 'RegisterController@doProfileRegister');
    Route::post('/account/save', 'RegisterController@doAccountRegister');
});

Route::group(["prefix"=>"/admin/api/v1"], function () {

    Route::controller('/category', 'CategoryApiController');

    Route::controller('/user', 'UserApiController');
    Route::controller('/role', 'RoleApiController');
    Route::controller('/content', 'ContentApiController');
    Route::controller('/content-type', 'ContentTypeApiController');

    Route::post('/main-category/{id}/categories/save', 'MainCategoryApiController@postCreateCategory');
    Route::get('/main-category/{id}/categories', 'MainCategoryApiController@getCategories');

    Route::controller('/main-category', 'MainCategoryApiController');


});

Route::controller('/admin', "AdminController");


Route::controller('/', "HomeController");

