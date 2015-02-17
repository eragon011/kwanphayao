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

Route::get('/', function()
{
	return View::make('hello');
});

Route::controller('/home',"HomeController");

Route::group([],function(){

	Route::controller('/admin/api/v1/category','CategoryApiController');

	Route::controller('/admin/api/v1/user','UserApiController');
	Route::controller('/admin/api/v1/role','RoleApiController');
	Route::controller('/admin/api/v1/content','ContentApiController');

	Route::group([],function(){
		Route::get('/admin/api/v1/main-category/{id}/categories','MainCategoryApiController@getCategories');
		Route::controller('/admin/api/v1/main-category','MainCategoryApiController');
	});


});

Route::controller('/admin',"AdminController");

