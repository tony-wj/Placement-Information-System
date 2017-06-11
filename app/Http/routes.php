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

Route::get('/', function () {
    return view('welcome');
});


Route::get('home',
	array('as'=>'home','uses'=>'HomeController@Index'));

Route::get('index',
	array('as'=>'index','uses'=>'ProfileController@index'));

Route::get('posts',
	array('as'=>'post','uses'=>'PostController@index'));

Route::get('info',
	array('as'=>'info','uses'=>'InfoController@index'));

Route::get('apply',
	array('as'=>'apply','uses'=>'ApplyController@Index'));


Route::get('auth/register', 
	array('as'=>'getRegister','uses'=>'Auth\AuthController@getRegister'));
Route::post('auth/register',
	array('as'=>'postRegister','uses'=>'Auth\AuthController@postRegister'));

Route::get('auth/login', 
	array('as'=>'getLogin','uses'=>'Auth\AuthController@getLogin'));
Route::post('auth/login',
	array('as'=>'postLogin','uses'=>'Auth\AuthController@postLogin'));

Route::get('auth/logout', 
	array('as'=>'getLogout','uses'=>'Auth\AuthController@getLogout'));

Route::resource('profile','ProfileController');

Route::get('posts/search', 'PostController@search');
Route::get('info/search', 'InfoController@search');

Route::resource('posts','PostController');

Route::resource('info','InfoController');

Route::resource('apply','ApplyController');

