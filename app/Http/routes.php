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




	//Firts routes...
	Route::get('/', 'Auth\AuthController@index');
	Route::resource('index','Auth\AuthController');

	// Authentication routes...
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');

	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	//Registration routes Inmobiliarias...
	Route::resource('inmobiliaria','InmobiliariasController@index');

	//Registration routes Inmobiliarias...
	Route::resource('instalaciones','InstalacionesController@index');
	
	//Registration routes Inmobiliarias...
	Route::resource('mudanzas','MudanzasController@index');			

	//Registration routes Inmobiliarias...
	Route::resource('reparaciones','ReparacionesController@index');

	//Registration routes Inmobiliarias...
	Route::resource('transporte','TransporteController@index');





