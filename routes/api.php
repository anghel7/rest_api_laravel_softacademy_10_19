<?php

use Illuminate\Http\Request;
use Symfony\Component\Routing\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('clientes', 'Api\ClienteController@index');
Route::get('clientes/{cliente}/', 'Api\ClienteController@show');
Route::post('clientes/', 'Api\ClienteController@store');
Route::put('clientes/{cliente}/', 'Api\ClienteController@update');
Route::delete('clientes/{cliente}/', 'Api\ClienteController@destroy');

Route::post('auth/register', 'Api\UserController@register');
Route::post('auth/login', 'Api\UserController@login');

Route::group(['middleware'=>'auth:api'],function(){
    Route::get('auth/me', 'Api\UserController@me');
});
