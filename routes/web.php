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

Route::get('/consulta/5', 'ConsultasController@consulta5')->name('consultas.consulta5')->middleware('revisarconsultas');
Route::post('/consulta/5/resultado', 'ConsultasController@resultado5')->name('consultas.resultado5')->middleware('revisarconsultas');

Route::get('/consulta/6', 'ConsultasController@consulta6')->name('consultas.consulta6')->middleware('revisarconsultas');
Route::post('/consulta/6/resultado', 'ConsultasController@resultado6')->name('consultas.resultado6')->middleware('revisarconsultas');

Route::get('/consulta/7', 'ConsultasController@consulta7')->name('consultas.consulta7')->middleware('revisarconsultas');
Route::post('/consulta/7/resultado', 'ConsultasController@resultado7')->name('consultas.resultado7')->middleware('revisarconsultas');
