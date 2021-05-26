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
    return view('inicio');
});

Route::get('/marvel', function(){
    return view('marvel');
});

Route::get('/pokemon', function(){
    return view('pokemon');
});

Route::get('/marvel/listado', 'App\Http\Controllers\MarvelController@listado');
Route::get('/marvel/comics','App\Http\Controllers\MarvelController@listadoComics');
Route::post('/marvel/personaje','App\Http\Controllers\MarvelController@personajeID') ->name('un_personaje');

Route::get('/pokemon/listado', 'App\Http\Controllers\PokemonController@listado');
