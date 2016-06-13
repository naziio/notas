<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('index','HomeController@inicio');

Route::get('asignaturas', 'AsignaturasController@index');
Route::get('asignaturas/create', 'AsignaturasController@create');
Route::get('asignaturas/show', 'AsignaturasController@show');


Route::post('asignaturas/store', [
    'as' => 'asignaturas.store', 'uses' => 'AsignaturasController@store'
]);

Route::get('notas/home/{id}',[
    'as' => 'notas.home', 'uses' => 'NotasController@home'
]);