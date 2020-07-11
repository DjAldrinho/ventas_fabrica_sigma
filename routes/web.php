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


Route::get('/', 'HomeController@index')->name('home');




Route::group(['prefix' => '/sillas'], function () {
    Route::get('/index', 'SillaController@index')->name('listar-sillas');
    Route::get('/registro', 'SillaController@create')->name('registro-silla');
    Route::post('/registro', 'SillaController@store')->name('registro-silla');
});


Route::group(['prefix' => '/ejecutivos'], function () {
    Route::get('/index', 'EjecutivoController@index')->name('listar-ejecutivos');
    Route::get('/registro', 'EjecutivoController@create')->name('registro-ejecutivo');
    Route::post('/registro', 'EjecutivoController@store')->name('registro-ejecutivo');
});


Route::group(['prefix' => '/ventas'], function () {
    Route::get('/index', 'VentaController@index')->name('listar-ventas');
    Route::get('/registro', 'VentaController@create')->name('registro-venta');
    Route::post('/registro', 'VentaController@store')->name('registro-venta');
});
