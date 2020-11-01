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

Auth::routes();

Route::resource('/creditos','CreditController');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/userconfig','CreditController@userconfig')->name('userconfig');

Route::post('/crearusuario','CreditController@crearusuario')->name('crearusuario');

Route::get('/niveles','CreditController@niveles')->name('configuser.niveles');

Route::post('/guardarnivel','CreditController@guardarnivel')->name('configuser.guardarnivel');

    #ROUTES DE CREDITOS

Route::get('/lista','CreditController@lista')->name('creditos.lista');

Route::get('/plantillascredit','CreditController@plantillascredit')->name('creditos.plantillascredit');

Route::get('/crearplantilla','CreditController@crearplantilla')->name('creditos.crearplantilla'); 

Route::post('/guardarplantilla','CreditController@guardarplantilla')->name('creditos.guardarplantilla');

Route::get('cotizador','CreditController@cotizador')->name('creditos.cotizador');

    #ROUTES DE CLIENTES

Route::get('/clientes','CreditController@clientes')->name('clientes.clientes');

Route::get('/clientes/crearcliente','CreditController@crearcliente')->name('clientes.crearcliente');

Route::post('/clientes','CreditController@guardarcliente')->name('clientes.guardarcliente');

Route::get('/clientes/editarcliente/{id}','CreditController@editarcliente')->name('clientes.editarcliente');

Route::put('/clientes/editarcliente/{id}','CreditController@actualizarcliente')->name('clientes.actualizarcliente');

Route::delete('/deletecliente/{id}','CreditController@deletecliente')->name('clientes.deletecliente');

Route::get('/nuevousuario','CreditController@nuevousuario')->name('nuevousuario');

    #ROUTE DE USUARIOS

Route::put('/actualizarusuario/{id}','CreditController@actualizarusuario')->name('actualizarusuario');