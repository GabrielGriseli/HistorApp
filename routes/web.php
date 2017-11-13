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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('imagens', 'ImagensController@index');

Route::get('cidades', 'CidadesController@index');
Route::get('cidades/create', 'CidadesController@create');
Route::post('cidades/store', 'CidadesController@store');
Route::get('cidades/{id}/destroy', 'CidadesController@destroy');
Route::get('cidades/{id}/edit', 'CidadesController@edit');
Route::put('cidades/{id}/update', 'CidadesController@update');
