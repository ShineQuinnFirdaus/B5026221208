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

