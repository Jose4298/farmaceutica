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

Route::get('/','farmaceutic@index');

Route::resource('cliente','clienteController');

Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');
Route::resource('estado','estadocontroller');
Route::resource('municipio','municipiocontroller');
Route::resource('producto','productocontroller');