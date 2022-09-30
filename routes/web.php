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
    return view('welcome');
});

Route::get("prueba","PruebaController@prueba");



Route::get('/name/{name}', function ($name) {
    return 'hello ' .$name;
});

Route::resource('trainers', "TrainerControl");
Route::get('reporte', "ReporteController@index");
Route::get('trainers/{trainer}/pokemones', "PokemonControl@index");
Route::post('trainers/{trainer}/pokemones', 'TableController@store');
Route::post('trainers/{trainer}/pokemones', "PokemonControl@store");
Route::get('trainers/{trainer}/reporte', "PokemonControl@imprimir");




