<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Administrador
Route::get('/admin', 'ConsultasController@indexadmin')->name('consultas.indexadmin')->middleware('revisaradmin');

// Ruta del menu de Consultas
Route::get('/consultas', 'ConsultasController@index')->name('consultas.index')->middleware('revisarconsultas');

// Ruta de consultas
Route::get('/consulta/1', 'ConsultasController@consulta1')->name('consultas.consulta1')->middleware('revisarconsultas');
Route::post('/consulta/1/resultado', 'ConsultasController@resultado1')->name('consultas.resultado1')->middleware('revisarconsultas');

Route::get('/consulta/2', 'ConsultasController@consulta2')->name('consultas.consulta2')->middleware('revisarconsultas');
Route::post('/consulta/2/resultado', 'ConsultasController@resultado2')->name('consultas.resultado2')->middleware('revisarconsultas');

Route::get('/consulta/3/resultado', 'ConsultasController@resultado3')->name('consultas.resultado3')->middleware('revisarconsultas');

Route::get('/consulta/4', 'ConsultasController@consulta4')->name('consultas.consulta4')->middleware('revisarconsultas');
Route::post('/consulta/4/resultado', 'ConsultasController@resultado4')->name('consultas.resultado4')->middleware('revisarconsultas');
