<?php

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
    return view('index');
});


Route::get('politicas', 'PoliticasController@index');
Route::get('aspectos', 'AspectosController@index');
Route::get('ligada', 'LigadaController@index');
Route::get('activo', 'ActivosController@index');
Route::get('control', 'ControlController@index');
Route::get('cifrado', 'CifradoController@index');
Route::get('fisica', 'FisicaController@index');
Route::get('operativa', 'OperativaController@index');
Route::get('seguridad', 'SeguridadController@index');
Route::get('desarro', 'DesarrolloController@index');
Route::get('relacion', 'RelacionController@index');
Route::get('informatica', 'InformaticaController@index');
Route::get('negocio', 'NegocioController@index');
Route::get('cumpli', 'CumplimientoController@index');