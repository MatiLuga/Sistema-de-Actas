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

//Route::resource('actas', ActaController::class);
//Route::resource('login', UserController::class);
// Rutas para la autenticación
Route::get('/login', 'UserController@showLoginForm')->name('login'); // Mostrar formulario de inicio de sesión
Route::post('/login', 'UserController@login'); // Procesar inicio de sesión
Route::post('/logout', 'UserController@logout')->name('logout'); // Procesar cierre de sesión


Route::get('/actas', 'ActaController@index');
Route::get('/actas/create', 'ActaController@create')->name('actas.create');
Route::post('/actas', 'ActaController@store')->name('actas.store');
// Puedes definir más rutas para otras acciones del controlador según sea necesario

