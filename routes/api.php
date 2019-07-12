<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|----------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('produk','ProdukController@index');
Route::post('produk', 'ProdukController@create');
Route::put('/produk/{id_produk}', 'ProdukController@update');
Route::delete('/produk/{id_produk}', 'ProdukController@delete');