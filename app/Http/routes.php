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

Route::get('/', function () {
    return view('welcome');
});

// Rutas para la autenticación
Route::get('/login', 'AuthController@showLoginForm')->name('login'); // Mostrar formulario de inicio de sesión
Route::post('/login', 'AuthController@login'); // Procesar inicio de sesión
Route::post('/logout', 'AuthController@logout')->name('logout'); // Procesar cierre de sesión


Route::get('/actas', 'ActasController@index');
Route::get('/actas/create', 'ActasController@create')->name('actas.create');
Route::post('/actas', 'ActasController@store')->name('actas.store');
// Puedes definir más rutas para otras acciones del controlador según sea necesario
Route::auth();

Route::get('/home', 'HomeController@index');
