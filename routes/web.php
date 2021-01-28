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
Route::group(['middleware' => ['guest']], function ()
{
	Route::get('/','Auth\LoginController@showLoginForm');
	Route::post('/login','Auth\LoginController@login')->name('login');
});


Route::group(['middleware' => ['auth']], function ()
{
	Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
	Route::get('/home', 'HomeController@index')->name('home');

	// RUtas de producto
	Route::get('/producto/estado/{id}','ProductController@stateProduct')->name('state.product');
	Route::post('/producto/guardar','ProductController@store')->name('store.product');
	Route::put('/producto/actualizar/{id}','ProductController@update')->name('update.product');
	Route::get('/producto/imprimir-qr/{id}','ProductController@print')->name('print.product');
	Route::get('/consulta/producto','ProductController@queryProduct')->name('queryIndex.product');
	Route::get('/producto-qr/{id}','ProductController@showQr')->name('product-qr');

    // Route::group(['middleware' => ['Vend']], function ()
    // {
    // });
    // Route::group(['middleware' => ['Admin']], function ()
    // {
    // });
});
