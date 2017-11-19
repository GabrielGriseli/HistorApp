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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix'=>'cidades', 'where'=>['id'=>'[0-9]+']], function(){
  Route::get('',                  ['as'=>'cidades',             'uses'=>'CidadesController@index']);
  Route::get('create',            ['as'=>'cidades.create',      'uses'=>'CidadesController@create']);
  Route::get('{id}/destroy',      ['as'=>'cidades.destroy',     'uses'=>'CidadesController@destroy']);
  Route::get('{id}/edit',         ['as'=>'cidades.edit',        'uses'=>'CidadesController@edit']);
  Route::put('{id}/update',       ['as'=>'cidades.update',      'uses'=>'CidadesController@update']);
  Route::post('store',            ['as'=>'cidades.store',       'uses'=>'CidadesController@store']);
});

Route::group(['prefix'=>'pessoas', 'where'=>['id'=>'[0-9]+']], function(){
  Route::get('',                  ['as'=>'pessoas',             'uses'=>'PessoasController@index']);
  Route::get('create',            ['as'=>'pessoas.create',      'uses'=>'PessoasController@create']);
  Route::get('{id}/destroy',      ['as'=>'pessoas.destroy',     'uses'=>'PessoasController@destroy']);
  Route::get('{id}/edit',         ['as'=>'pessoas.edit',        'uses'=>'PessoasController@edit']);
  Route::put('{id}/update',       ['as'=>'pessoas.update',      'uses'=>'PessoasController@update']);
  Route::post('store',            ['as'=>'pessoas.store',       'uses'=>'PessoasController@store']);
});

Route::group(['prefix'=>'imagens', 'where'=>['id'=>'[0-9]+']], function(){
  Route::get('',                    ['as'=>'imagens',                 'uses'=>'ImagensController@index']);
  Route::get('create',              ['as'=>'imagens.create',          'uses'=>'ImagensController@create']);
  Route::get('{id}visualizar',      ['as'=>'imagens.visualizar',      'uses'=>'ImagensController@visualizar']);
  Route::get('{id}/destroy',        ['as'=>'imagens.destroy',         'uses'=>'ImagensController@destroy']);
  Route::get('{id}/edit',           ['as'=>'imagens.edit',            'uses'=>'ImagensController@edit']);
  Route::put('{id}/update',         ['as'=>'imagens.update',          'uses'=>'ImagensController@update']);
  Route::post('store',              ['as'=>'imagens.store',           'uses'=>'ImagensController@store']);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
