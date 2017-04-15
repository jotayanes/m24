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
	Route::resource('busqueda', 'PrincipalController@show');

	Route::resource('index','Auth\AuthController');

	Route::put('select','MainController@select');
	Route::put('sidebar','MainController@sidebar');

	// Authentication routes...
	Route::resource('login', 'UsuariosController@auth');
	Route::resource('registro', 'UsuariosController@create');
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	Route::resource('solicitar','ServiciosController@solicitaservicio');
	Route::resource('serviciousuario','ServiciosController@serviciousuario');


	Route::group(['middleware' => ['auth']], function () {
		//USUARIO DEMANDANTE
		Route::resource('postulaciones', 'UsuariosController@index');//-
		Route::resource('mispostulaciones', 'UsuariosController@store');//-
		Route::resource('datosprincipales', 'UsuariosController@datosp');//-		
		Route::resource('datosadicionales', 'UsuariosController@datosadicionales');//-	--------------------------
		Route::resource('curriculum', 'UsuariosController@curriculum');//-

		//USURIO ADMINISTRADOR
		Route::resource('aprousu', 'UsuariosController@aprousu');//-		

		
		//Registration routes servicios...
		Route::resource('servicios','ServiciosController@index');//-
		
		//Registration routes...
		Route::resource('lista','PrincipalController@lista');//-no	
		Route::resource('detalle','PrincipalController@detalle');	
	});


