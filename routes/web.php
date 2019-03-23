<?php

Route::get('/', 'HomeController@welcome')
	->name('welcome');

Route::get('/login', 'Auth\LoginController@redirectToProvider')
	->name('login');
Route::get('/register', 'Auth\RegisterController@getRegister')
	->name('register');
Route::post('/register', 'Auth\RegisterController@postRegister');
Route::post('/logout', 'Auth\LoginController@logout');

Route::get('/oauth2', 'Auth\LoginController@handleProviderCallback')->name('login.oauth');
/*
 * Authenticated Routes go in here.
 */
Route::group(['middleware' => 'auth'], function() {
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});