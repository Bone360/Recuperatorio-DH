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
    return view('/');
});


Route::get('/','PeliculasController@indexHome');


Route::get('/listadoPeliculas','PeliculasController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/detallePelicula/{id}', 'PeliculasController@show')->name('detallePelicula');

Route::get('/detalleActor/{id}', 'ActoresController@show');

Route::get('listadoPeliculas','PeliculasController@showListado')->name('listado');

Route::get('/editarPelicula/{id}','PeliculasController@edit');

Route::post('/guardarPeliculaEditada/{id}', 'PeliculasController@update');

Route::get('agregarActores', 'ActoresController@create');

Route::post('/guardarActor','ActoresController@save');
 
Route::get('listadoActores','ActoresController@index')->name('listadoA');








