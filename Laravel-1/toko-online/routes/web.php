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

Route::get('motor', function () {
    return 'dashboard motor';
});

Route::get('motor/{jenis}', function ($jenis) {
    return 'Motor dengan jenis: ' .$jenis;
});

Route::get('book', 'BookController@index');

Route::get('book/{judul}', 'BookController@viewJudul');
