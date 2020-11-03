<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home');

//item
Route::resource('/item', 'ItemController'); 

//costumer
Route::resource('/customer', 'Admin\CustomerController'); 

//kategori
Route::resource('/kategori', 'Admin\CategoryController'); 

//barang masuk
Route::resource('/barang_masuk', 'Admin\IncomingitemController'); 

//distributor
Route::resource('/distributor', 'Admin\DistributorController'); 

//order
Route::resource('/order', 'Admin\OrderController'); 

//order detail
Route::resource('/Odetail', 'Admin\OdetailController'); 

// Barang
Route::get('/barang', 'barangController@index');
Route::post('/barang', 'barangController@store');
Route::delete('/barang/{item}', 'barangController@destroy');





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');