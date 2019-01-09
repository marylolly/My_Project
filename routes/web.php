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

Route::get('/', 'BaseController@getIndex');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@postIndex');

Route::get('feedback', 'FeedBackController@getIndex');

Route::get('catalog/{id}', 'CatalogController@getIndex');

Route::get('categories', 'ProductController@getAll');



Route::group(['middleware'=>['authuser']],
function (){
	Route::get('basket', 'BasketController@getIndex');
});

Route::get('product/{id}', 'ProductController@getOne');

Route::get('basket/add/{id}', 'BasketController@getAdd');

Route::get('basket', 'BasketController@getAll');

Route::get('basket/dell/{id}', 'BasketController@getDell');

Route::get('basket/clear', 'BasketController@getClear');

Route::post('order', 'OrderController@postOrder');

Route::get('admin/order/one/{id}', 'Admin\OrderController@getIndex');

Route::post('ajax', 'AjaxController@postIndex');


Route::get('{url}','StaticController@getIndex'); //всегда в конце