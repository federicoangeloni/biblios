<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses' => 'FrontendController@home',
	'as' => 'home'
]);

Route::get('/login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'login'
]);

Route::post('/login', [
	'uses' => 'Auth\AuthController@postLogin',
	'as' => 'login.post'
]);

Route::get('/register', [
	'uses' => 'Auth\AuthController@getRegister',
	'as' => 'register'
]);

Route::post('/register', [
	'uses' => 'Auth\AuthController@postRegister',
	'as' => 'register.post'
]);

Route::group(['middleware' => 'auth'], function () {
	Route::get('/logout', [
		'uses' => 'Auth\AuthController@getLogout',
		'as' => 'logout'
	]);
	Route::get('/my-page', [
		'uses' => 'FrontendController@getPrivatePage',
		'as' => 'private-page'
	]);
	Route::get('/my-page/{bookId}', [
		'uses' => 'FrontendController@addFavouriteBook',
		'as' => 'favourite-book'
	]);

	Route::group(['middleware' => 'admin'], function () {
		Route::resource('author', 'AuthorController');
		Route::resource('book', 'BookController');
	});
	
});

