<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


// ini adalah route
Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/about', 'MyController@showAbout');

Route::group(['middleware'=>'web'],function () {
	// Route diisi disini
	Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function () {
		Route::resource('admins', 'AdminController');
	});
});
