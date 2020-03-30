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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notas/{id}/edit', 'NotaController@edit' )->name('notas.editar');

Route::put('/editar/{id}', 'NotaController@update' )->name('notas.update');

Route::delete('/eliminar/{id}', 'NotaController@destroy')->name('notas.eliminar');

Route::resource('/notas', 'NotaController');


