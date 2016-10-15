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


Route::get('/home', 'pruebacontroller@home');
Route::get('/', 'sitioController@inicio');
Route::resource('sitio', 'sitioController');
Route::resource('usuario', 'usuarioController');
Route::resource('universidad', 'universidadController');
Route::resource('campus', 'campusController');
