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

Route::get('/veiculo', '\App\Http\Controllers\VeiculoController@index')->name('veiculo');
Route::get('/veiculo/create', '\App\Http\Controllers\VeiculoController@create')->name('veiculo.create');
Route::post('/veiculo/store', '\App\Http\Controllers\VeiculoController@store')->name('veiculo.store');
Route::get('/veiculo/{id}/edit', '\App\Http\Controllers\VeiculoController@edit')->name('veiculo.edit');
Route::put('/veiculo/{id}/update', '\App\Http\Controllers\VeiculoController@update')->name('veiculo.update');
Route::delete('/veiculo/{id}/destroy', '\App\Http\Controllers\VeiculoController@destroy')->name('veiculo.destroy');
Route::get('/veiculo/{id}/show', '\App\Http\Controllers\VeiculoController@show')->name('veiculo.show');
Route::post('/modelo/search', '\App\Http\Controllers\ModeloController@search')->name('modelo.search');


//Rotas da Loja

Route::get('/loja', '\App\Http\Controllers\LojaController@index')->name('loja');
Route::get('/loja/create', '\App\Http\Controllers\LojaController@create')->name('loja.create');
Route::post('/loja/store', '\App\Http\Controllers\LojaController@store')->name('loja.store');
Route::get('/loja/{id}/edit', '\App\Http\Controllers\LojaController@edit')->name('loja.edit');
Route::put('/loja/{id}/update', '\App\Http\Controllers\LojaController@update')->name('loja.update');
Route::delete('/loja/{id}/destroy', '\App\Http\Controllers\LojaController@destroy')->name('loja.destroy');
Route::post('/endereco/search', '\App\Http\Controllers\EnderecoController@search')->name('endereco.search');