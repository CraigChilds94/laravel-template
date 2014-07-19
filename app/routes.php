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
	'as' 	=> 'home-welcome',
	'uses' 	=> 'HomeController@showWelcome'
]);
