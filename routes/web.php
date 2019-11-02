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
