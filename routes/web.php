<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
	return view('hello');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('js2', function () {
	return view('js2');
});

Route::get('link', function () {
	return view('link');
});

Route::get('responsive', function () {
	return view('responsive');
});

Route::get('style', function () {
	return view('style');
});

Route::get('validasi', function () {
	return view('validasi');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//route CRUD keranjang

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index3');
Route::get('/keranjangbelanja/tambah2','App\Http\Controllers\KeranjangController@tambah2');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//Route CRUD matakuliah

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index2');
Route::get('/nilaikuliah/tambah3','App\Http\Controllers\NilaiKuliahController@tambah3');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//Route CRUD sepedamotor
Route::get('/sepedamotor','App\Http\Controllers\SepedaMotorController@index4');
Route::get('/sepedamotor/tambah4','App\Http\Controllers\SepedaMotorController@tambah4');
Route::get('/sepedamotor/edit2/{id}','App\Http\Controllers\SepedaMotorController@edit2');
Route::get('/sepedamotor/hapus/{id}','App\Http\Controllers\SepedaMotorController@hapus');
Route::get('/sepedamotor/cari','App\Http\Controllers\SepedaMotorController@cari');
Route::post('/sepedamotor/update','App\Http\Controllers\SepedaMotorController@update');
Route::post('/sepedamotor/store','App\Http\Controllers\SepedaMotorController@store');
Route::get('/sepedamotor/lihat','App\Http\Controllers\SepedaMotorController@lihat');

//Route CRUD kategori
Route::get('/kategori','App\Http\Controllers\KategoriController@index5');
Route::post('/kategori/tambah5','App\Http\Controllers\KategoriController@tambah5');

