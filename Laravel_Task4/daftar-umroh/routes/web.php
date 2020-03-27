<?php

Route::get('/', 'PageController@HomePage');
Route::get('login', 'PageController@Login');

//Admin
Route::group(["prefix"=>"/admin"], function () {
	Route::get('/data-jamaah', 'AdminController@DataJamaah');
	Route::get('/data-keberangkatan', 'AdminController@DataKeberangkatan');
});

//Public
Route::group(["prefix"=>"/public"], function () {
	Route::get('/pendaftaran-umroh', 'PublicController@PendaftaranUmroh');
	Route::get('/jadwal-keberangkatan', 'PublicController@JadwalKeberangkatan');
	Route::post('/daftar-umroh', 'PublicController@store');
});
