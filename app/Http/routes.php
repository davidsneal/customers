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

// homepage
Route::get('/', 'WelcomeController@index');

// authed users only
Route::group(['middleware' => 'auth'], function()
{
	// /admin prefix group
	Route::group(['prefix' => 'admin'], function()
	{
		// admin pages
		Route::get('/', 'HomeController@index');
		Route::get('/customers', 'CustomerController@index');
		Route::get('/customers/edit/{id?}', 'CustomerController@edit');
	});
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
