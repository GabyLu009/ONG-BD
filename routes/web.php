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
Route::group(['prefix' => '/'], function () {
    Route::get('Director', 'Director1@index');
    Route::get('Director/create', 'Director1@create')->name('director_create');
    Route::post('Director/store', 'Director1@store');
    Route::get('Director/{Director}/edit', 'Director1@edit')->name('director_edit');
    Route::put('Director/{Director}','Director1@update');
    Route::delete('Director/{id}','Director1@destroy')->name('director_delete');
});
Route::group(['prefix' => '/'], function () {
    Route::get('Sede', 'SedeController@index');
    Route::get('Sede/create', 'SedeController@create')->name('sede_create');
    Route::post('Sede/store', 'SedeController@store');
    Route::get('Sede/{Sede}/edit', 'SedeController@edit')->name('sede_edit');
    Route::put('Sede/{Sede}','SedeController@update');
    Route::delete('Sede/{id}','SedeController@destroy')->name('sede_delete');
});
Route::group(['prefix' => '/'], function () {
    Route::get('Proyecto', 'ProyectoController@index');
    Route::get('Proyecto/create', 'ProyectoController@create')->name('proyecto_create');
    Route::post('Proyecto/store', 'ProyectoController@store');
    Route::get('Proyecto/{Proyecto}/edit', 'ProyectoController@edit')->name('proyecto_edit');
    Route::put('Proyecto/{Proyecto}','ProyectoController@update');
    Route::delete('Proyecto/{id}','ProyectoController@destroy')->name('proyecto_delete');
});
Route::group(['prefix' => '/'], function () {
    Route::get('Poblacion', 'PoblacionController@index');
    Route::get('Poblacion/create', 'PoblacionController@create')->name('poblacion_create');
    Route::post('Poblacion/store', 'PoblacionController@store');
    Route::get('Poblacion/{Poblacion}/edit', 'PoblacionController@edit')->name('poblacion_edit');
    Route::put('Poblacion/{Poblacion}','PoblacionController@update');
    Route::delete('Poblacion/{id}','PoblacionController@destroy')->name('poblacion_delete');
});
Route::group(['prefix' => '/'], function () {
    Route::get('Pais', 'PaisController@index');
    Route::get('Pais/create', 'PaisController@create')->name('pais_create');
    Route::post('Pais/store', 'PaisController@store');
    Route::get('Pais/{Pais}/edit', 'PaisController@edit')->name('pais_edit');
    Route::put('Pais/{Pais}','PaisController@update');
    Route::delete('Pais/{id}','PaisController@destroy')->name('pais_delete');
});