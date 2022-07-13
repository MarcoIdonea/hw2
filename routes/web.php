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
    return view('pagina_iniziale');
});

Route:: get('login', 'App\Http\Controllers\LoginController@login_form');   
Route:: post('login', 'App\Http\Controllers\LoginController@do_login');
Route:: get('register', 'App\Http\Controllers\LoginController@register_form');   
Route:: post('register', 'App\Http\Controllers\LoginController@do_register');
Route:: get('logout' ,'App\Http\Controllers\LoginController@logout');

Route ::get('home', 'App\Http\Controllers\CollectionController@home');

Route:: get('pagina_iniziale','App\Http\Controllers\Pagina_iniziale_controller@visualizza');
//Route:: get('home','App\Http\Controllers\VisualizzaController@visualizza_pagina');


Route:: get('bbc','App\Http\Controllers\VisualizzaController@visualizza_bbc');
Route::get('bbc_api','App\Http\Controllers\CollectionController@ricerca_bbc');

Route:: get('sport','App\Http\Controllers\VisualizzaController@visualizza_sport');
Route::get('sport_api','App\Http\Controllers\CollectionController@ricerca_sport');

Route:: get('general','App\Http\Controllers\VisualizzaController@visualizza_general');
Route::get('general_api','App\Http\Controllers\CollectionController@ricerca_general');

Route:: get('business','App\Http\Controllers\VisualizzaController@visualizza_business');
Route::get('business_api','App\Http\Controllers\CollectionController@ricerca_business');

Route:: get('entertainment','App\Http\Controllers\VisualizzaController@visualizza_entertainment');
Route::get('entertainment_api','App\Http\Controllers\CollectionController@ricerca_entertainment');


Route:: get('health','App\Http\Controllers\VisualizzaController@visualizza_health');
Route::get('health_api','App\Http\Controllers\CollectionController@ricerca_health');

Route:: get('scienza','App\Http\Controllers\VisualizzaController@visualizza_scienza');
Route::get('scienza_api','App\Http\Controllers\CollectionController@ricerca_scienza');

Route:: get('tecnology','App\Http\Controllers\VisualizzaController@visualizza_tecnologia');
Route::get('tecnology_api','App\Http\Controllers\CollectionController@ricerca_tecnologia');

Route:: get('preferiti_visualizza','App\Http\Controllers\VisualizzaController@visualizza_preferiti');
Route:: get('preferiti_insert','App\Http\Controllers\preferitiController@inserisci_preferiti');

Route::get('preferiti','App\Http\Controllers\preferitiController@preferiti');
Route::get('preferiti_view','App\Http\Controllers\preferitiController@stampa_preferiti');
Route::get('preferiti_delete/{titolo}','App\Http\Controllers\preferitiController@delete');