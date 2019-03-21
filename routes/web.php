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

use Symfony\Component\HttpFoundation\Response;

Route::get('/', function () {
    return response('Hello World', 500);
});

Route::get('test','APIController@testRequest')->name("testRequest");
Route::post('verificarCliente','APIController@verificarCliente')->name("verificarCliente");

Route::prefix('usuarios')->group(function(){
    //Route::get('verificarCliente/{documento}','APIController@verificarCliente')->name("verificarCliente");
    //Route::get('verificarCliente','APIController@testhttp')->name("testhttp");
    //Route::post('crearCliente','APIController@crearCliente')->name("crearCliente");
});
