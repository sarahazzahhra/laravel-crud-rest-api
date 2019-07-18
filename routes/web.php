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
    return view('welcome_landing');
});

Route::get('/produk', function () {
	return view('produk');
});

Route::get('/produk', 'ProdukController@index')->name ('produk');
Route::resource('produk', 'ProdukController');

Route::get('/add-product', function () {
	return view('create');
});

Route::get('/produk/edit/{id}','ProdukController@edit');
Route::post('/produk/update','ProdukController@update');
Route::get('/produk/delete/{id}','ProdukController@delete');
Route::get('/produk', 'ProdukController@index');
Route::get('/cetak_pdf', 'ProdukController@cetak_pdf');
Auth::routes();

Route::get('/home', function () {
	return view('welcome');
});
