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
    return view('adminlte.master');
});

Route::get('/items/create', 'ItemController@create');
Route::post('/items', 'ItemController@store');
Route::get('/items', 'ItemController@index');
Route::get('/items1/create', 'Item1Controller@create');
Route::get('/items1/id', 'Item1Controller@index');
Route::post('/items1/id', 'Item1Controller@store');
Route::get('/items/{id}', 'ItemController@show');
Route::get('/items1/{id}', 'Item1Controller@show');
Route::get('items/{id}/edit', 'ItemController@edit');
Route::put('/items/{id}', 'ItemController@update');
Route::delete('items/{id}', 'ItemController@destroy');