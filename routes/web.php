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

Route::get('/', 'FrontEndController@index');
Route::get('/product/{id}', [
	'uses' => 'FrontEndController@singleProduct',
	'as' => 'product.single'
]);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('products', 'ProductsController');
Route::get('/shop', [
	'uses' => 'ShopsController@index',
	'as' => 'shop.index'
]);
Route::get('/cartPage', [
	'uses' => 'ShopsController@cartView',
	'as' => 'shop.cartPage'
]);
Route::get('/add-to-cart/{id}', [
	'uses' => 'ShopsController@addToCart',
	'as' => 'shop.addToCart'
]);




