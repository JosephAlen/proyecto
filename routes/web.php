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
    Route::group(['middleware' => ['Vend']], function ()
    {
        Route::resource('consulta', 'ConsultaController');
        Route::resource('productQuery', 'productQueryController');
        Route::resource('models', 'ModelsController');
		Route::resource('product', 'ProductController');
    });
    Route::group(['middleware' => ['Admin']], function ()
    {
    	Route::resource('models', 'ModelsController');
		Route::resource('product', 'ProductController');
		Route::resource('provider', 'ProviderController');
		Route::resource('client', 'ClientController');
		Route::resource('role', 'RoleController');
		Route::resource('user', 'UserController');
		Route::resource('purchase', 'PurchaseController');
		Route::resource('sale', 'SaleController');
		Route::get('/pdfCompra/{id}', 'PurchaseController@pdf')->name('compra_pdf');
		Route::get('/pdfVenta/{id}', 'SaleController@pdf')->name('venta_pdf');
    });
});
