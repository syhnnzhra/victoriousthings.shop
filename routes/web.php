<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home'); 

// Barang
Route::get('/barang', 'barangController@index');
Route::post('/barang', 'barangController@store');
Route::delete('/barang/{item}', 'barangController@destroy');
