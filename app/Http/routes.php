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

/********* index ***********/
	Route::get('/', [
		'uses' => 'HomeController@index',
		'as' =>'home'
	]);

	//Route::get('curso/{curso}','HomeController@curso');

	Route::get('/Soluciones/{curso}', [
		'uses' => 'HomeController@curso',
		'as' =>'curso'
	]);

	Route::get('/Blog', [
		'uses' => 'HomeController@blog',
		'as' =>'blog'
	]);

	Route::get('/Blog/{titulo}', [
		'uses' => 'HomeController@blogPost',
		'as' =>'blogPost'
	]);

	Route::get('/Instructores', [
		'uses' => 'HomeController@instructores',
		'as' =>'instructores'
	]);	

	Route::get('/Contáctanos', [
		'uses' => 'HomeController@contactanos',
		'as' =>'contactanos'
	]);		

	Route::put('Enviando', [
			'uses' => 'HomeController@enviar',
			'as' =>'enviar'
	]);

	Route::put('Enviando-CV', [
			'uses' => 'HomeController@enviarTrabaja',
			'as' =>'enviarTrabaja'
	]);	

	Route::get('/Términos-del-Servicio', [
		'uses' => 'HomeController@terminos',
		'as' =>'terminos'
	]);	

	Route::get('/Políticas-de-Privacidad', [
		'uses' => 'HomeController@politicas',
		'as' =>'politicas'
	]);

	Route::get('/Preguntas-Frecuentes', [
		'uses' => 'HomeController@faq',
		'as' =>'faq'
	]);

	Route::get('/Mapa-del-Sitio', [
		'uses' => 'HomeController@mapa',
		'as' =>'mapa'
	]);

	Route::get('/Trabaja-con-Nosotros', [
		'uses' => 'HomeController@trabaja',
		'as' =>'trabaja'
	]);		

	Route::get('/Aplicacion-movil', [
		'uses' => 'HomeController@aplicaciones',
		'as' =>'trabaja'
	]);

Route::get('language/{id}',  [
        'Middleware' => 'Language',
        'uses' => 'LanguageController@index']
);