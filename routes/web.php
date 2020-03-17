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
	
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::get('pane/home', 'panel\HomeController@index')->name('home')->middleware('api');
	Route::post('panel/product/import', 'panel\ProductController@import')->name('import-product')->middleware('api');
	Route::post('panel/category/import', 'panel\ProductController@import')->name('import-category')->middleware('api');