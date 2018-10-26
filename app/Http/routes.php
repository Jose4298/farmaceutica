<?php

/*
|--------------------------------------------------------------------------
|                         PRUEBAS
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| 
Route::get('admin','FrontController@admin');

Route::resource('usuario','UsuarioController');
|
*/

Route::get('/','farmaceutic@index');
Route::resource('cliente','clienteController');
Route::resource('estado','estadocontroller');
Route::resource('seccion','seccionController');
Route::resource('proveedor','proveedorcontroller');
Route::resource('empleado','empleadocontroller');

Route::resource('municipio','municipiocontroller');
Route::resource('producto','productocontroller');