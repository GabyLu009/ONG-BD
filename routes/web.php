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
    Route::get('Director', 'DirectorController@index');
    Route::get('Director/create', 'DirectorController@create');
    Route::post('Director/store', 'DirectorController@store');
});