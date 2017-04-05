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
	Route::get('/', 'PrincipalController@index');
	Route::resource('index','Auth\AuthController');

	// Authentication routes...
	Route::resource('login', 'UsuariosController@auth');
	//Route::post('login', 'UsuariosController@postLogin');
	//Route::get('logout', 'UsuariosController@getLogout');

	// Registro routes...
	Route::resource('registro', 'UsuariosController@create');
	//Route::post('registro', 'AuthController@postLogin');
	//Route::get('registro', 'AuthController@getLogout');

	// Registration routes...
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');

	//Registration routes Inmobiliarias...
	Route::resource('inmobiliaria','InmobiliariasController@index');
	
	//Registration routes Mudanzas...
	Route::resource('mudanzas','MudanzasController@index');			

	//Registration routes Transportes...
	Route::resource('servicios','ServiciosController@index');

	//Registration routes Inmobiliarias...
	Route::resource('lista','PrincipalController@lista');	
	Route::resource('detalle','PrincipalController@detalle');	




