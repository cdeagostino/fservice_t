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
Route::get('/productos', 'ProductoController@index')->name('productos');
Route::resource('/productos', 'ProductoController');
Route::get('/productos/{id}/confirm','ProductoController@confirm' )->name('confirm');
Route::get('/pedidos', 'HomeController@pedidos')->name('pedidos');
Route::get('/facturacion', 'HomeController@facturacion')->name('facturacion');
Route::resource('/user', 'UserController', ['except' => ['show']]);
Route::get('productosListadoExport', 'ProductoController@productosListadoExport')->name('productosListadoExport');