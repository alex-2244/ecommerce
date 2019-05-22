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
Route::get('/', 'UserController@welcome');


Route::get('/shopping', [
	'uses' => 'FrontEndController@shopView',
	'as' => 'shop.view'
]);

Route::get('/product/{id}', [
	'uses' => 'FrontEndController@singleProduct',
	'as' => 'product.single'
]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('products', 'ProductsController');

Route::post('/cart/add', [
	'uses' => 'ShoppingController@addToCart',
	'as' => 'cart.add'
]);
Route::get('/cart', [
	'uses' => 'ShoppingController@cart',
	'as' => 'cart'
]);
Route::get('/cart/delete/{id}', [
	'uses' => 'ShoppingController@cart_delete',
	'as' => 'cart.delete'
]);

Route::get('/cart/incr/{id}/{qty}', [
	'uses' => 'ShoppingController@incr',
	'as' => 'cart.incr'
]);

Route::get('/cart/decr/{id}/{qty}', [
	'uses' => 'ShoppingController@decr',
	'as' => 'cart.decr'
]);
Route::get('/cart/rapid/add/{id}', [
	'uses' => 'ShoppingController@rapid_add',
	'as' => 'cart.rapid.add'
]);

Route::get('/cart/checkout', [
	'uses' => 'CheckoutController@index',
	'as' => 'cart.checkout'
]);





// Route::get('/shop', [
// 	'uses' => 'ShopsController@index',
// 	'as' => 'shop.index'
// ]);
// Route::get('/cartPage', [
// 	'uses' => 'ShopsController@cartView',
// 	'as' => 'shop.cartPage'
// ]);
// Route::get('/add-to-cart/{id}', [
// 	'uses' => 'ShopsController@addToCart',
// 	'as' => 'shop.addToCart'
// ]);





