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

Route::get('/hello', function()
{
	return View::make('hello');
});

Route::controller('/',"HomeController");
Route::get('/about', 'HomeController@getAbout');
Route::get('/general', 'HomeController@getPhayao');
Route::get('/ecology', 'HomeController@getEcology');
Route::get('/travel', 'HomeController@getEconomy');
Route::get('/water-resources', 'HomeController@getNature');
Route::get('/history', 'HomeController@getHistory');
Route::get('/register', 'HomeController@getRegister');

Route::get('/test', 'HomeController@getTest');
Route::get('/test2', 'HomeController@getTest2');
Route::get('/test3', 'HomeController@getTest3');
Route::get('/test5', 'HomeController@getTest5');
Route::get('/test51', 'HomeController@getTest51');

Route::group([],function(){

	Route::controller('/admin/api/v1/category','CategoryApiController');

	Route::controller('/admin/api/v1/user','UserApiController');
	Route::controller('/admin/api/v1/role','RoleApiController');
	Route::controller('/admin/api/v1/content','ContentApiController');

	Route::group([],function(){

		Route::post('/admin/api/v1/main-category/{id}/categories/save','MainCategoryApiController@postCreateCategory');
		Route::get('/admin/api/v1/main-category/{id}/categories','MainCategoryApiController@getCategories');

		Route::controller('/admin/api/v1/main-category','MainCategoryApiController');
	});


});

Route::controller('/admin',"AdminController");

