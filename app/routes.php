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


//  This is the default view for the welcome screen
Route::get('/', [
	'as' 	=> 'home',
	'uses' 	=> 'HomeController@showWelcome'
]);


// This is the route for the login
Route::get('/login', [
	'as' 	=> 'login',
	'uses' 	=> 'UserController@getLogin'
]);

// This is the route for the logout
Route::get('/logout', [
	'as' 	=> 'logout',
	'uses'	=> 'UserController@getLogout'
]);

// Group all custom routes that need csrf together
Route::group(array('before' => 'csrf'), function()
{

	// Define a post route for the login
	Route::post('/login', [
		'as' 	=> 'login-post',
		'uses'	=> 'UserController@postLogin'
	]);
});
