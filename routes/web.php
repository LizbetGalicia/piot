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
    return view('Layauts.layaut');
});
Route::get('/inicio', function () {
    return view('Layauts.inicio');
});




Route::resources([
    'clientes'=>'ClientesController',
    'tipom'=>'TipoMController',
    'contratos'=>'ContratosController',
    'sensor'=>'SensorController'
    
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
