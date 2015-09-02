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

Route::get('/', function()
{
	return View::make('hello');
});

//Route::resource('maquinaria', 'MaquinariaController');

Route::group(['maquinaria' => '/'], function()
{
	/*CONSULTAS GET*/
    Route::get('maquinaria/publicacion', array('as'=>'maquinaria.publicacion', 'uses'=>'MaquinariaController@publicacion'));
    Route::get('maquinaria/calendario', array('as'=>'maquinaria.calendario', 'uses'=>'MaquinariaController@calendario'));
    Route::get('maquinaria/fotos', array('as'=>'maquinaria.fotos', 'uses'=>'MaquinariaController@fotos'));
    Route::get('maquinaria/descripcion', array('as'=>'maquinaria.descripcion', 'uses'=>'MaquinariaController@descripcion'));
    
    /*GUARDADO*/
    
   
});