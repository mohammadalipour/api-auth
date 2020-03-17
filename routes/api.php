<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
	Route::post('/register', 'Api\V1\Auth\RegisterController@index');
	Route::post('/login', 'Api\V1\Auth\LoginController@index');
	Route::post('/logout', 'Api\V1\Auth\LogoutController@index');

//Route::post('login', 'APILoginController@login');
//
//Route::middleware('jwt.auth')->get('users', function () {
//    return auth('api')->user();
//});
//
//Route::resource('category', 'CategoryController');
