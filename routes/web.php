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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myPreferredShops', 'HomeController@myPreferredShops')->name('myPreferredShops');

Route::get('/shop/like/{id}', 'ShopController@like');
Route::delete('/shop/removeLike/{id}', 'ShopController@removeLike');
