<?php

use Illuminate\Http\Request;
//use Symfony\Component\Routing\Route;

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
//clientes
Route::get('clientes', 'Api\ClienteController@index');
Route::get('clientes/{cliente}/', 'Api\ClienteController@show');
Route::post('clientes/', 'Api\ClienteController@store');
Route::put('clientes/{cliente}/', 'Api\ClienteController@update');
Route::delete('clientes/{cliente}/', 'Api\ClienteController@destroy');


//modopago
Route::get('modopago', 'Api\ModoPagoController@index');
Route::get('modopago/{modopago}/', 'Api\ModoPagoController@show');
Route::post('modopago/', 'Api\ModoPagoController@store');
Route::put('modopago/{modopago}/', 'Api\ModoPagoController@update');
Route::delete('modopago/{modopago}/', 'Api\ModoPagoController@destroy');

//factura
Route::get('factura', 'Api\FacturaController@index');
Route::get('factura/{factura}/', 'Api\FacturaController@show');
Route::post('factura/', 'Api\FacturaController@store');
Route::put('factura/{factura}/', 'Api\FacturaController@update');
Route::delete('factura/{factura}/', 'Api\FacturaController@destroy');

//detalle
Route::get('detalle', 'Api\DetalleController@index');
Route::get('detalle/{detalle}/', 'Api\DetalleController@show');
Route::post('detalle/', 'Api\DetalleController@store');
Route::put('detalle/{detalle}/', 'Api\DetalleController@update');
Route::delete('detalle/{detalle}/', 'Api\DetalleController@destroy');

//categoria
Route::get('categoria', 'Api\CategoriaController@index');
Route::get('categoria/{categoria}/', 'Api\CategoriaController@show');
Route::post('categoria/', 'Api\CategoriaController@store');
Route::put('categoria/{categoria}/', 'Api\CategoriaController@update');
Route::delete('categoria/{categoria}/', 'Api\CategoriaController@destroy');

//producto
Route::get('producto', 'Api\ProductoController@index');
Route::get('producto/{producto}/', 'Api\ProductoController@show');
Route::post('producto/', 'Api\ProductoController@store');
Route::put('producto/{producto}/', 'Api\ProductoController@update');
Route::delete('producto/{producto}/', 'Api\ProductoController@destroy');

//autenticacion
Route::post('auth/register', 'Api\UserController@register');
Route::post('auth/login', 'Api\UserController@login');
Route::group(['middleware'=>'auth:api'],function(){
    Route::get('auth/me', 'Api\UserController@me');
});
