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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('consorcistas','ConsorcistaWebController');
Route::resource('edificios','WebEdificio');
Route::resource('pagos','PagosWebController');
Route::resource('gastos','GastosWebController');
Route::resource('liquidacions','LiquidacionsWebController');
Route::resource('liquidacion.gastos','LiquidacionGastoWebController');

Route::post('liquidacion/{id}/gastos','LiquidacionGastoWebController@create');

