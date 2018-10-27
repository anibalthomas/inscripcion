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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/solicitud', 'HomeController@solicitud')->name('solicitud');
Route::get('/documentos', 'HomeController@documentos')->name('documentos');
Route::get('/perfil', 'HomeController@perfil')->name('perfil');
Route::get('/panel', 'HomeController@panel')->name('panel');

Route::post('guardar', 'CursosController@store')->name('guardar');

Route::put('documentos/{id}', 'EstudiantesController@update')->name('update');
Route::put('cursos/{id}', 'CursosController@update')->name('update.curso');
