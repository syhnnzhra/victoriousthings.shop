<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::auth();
// Route::get('/home', 'HomeController@index');
Route::group(['middleware'=>['web', 'auth']], function(){ 

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

    Route::get('/home', function(){
        //costumer
        if(Auth::user()->level == 'admin'){
            return view('admin.homeAdmin');
        } else{
            return view('publik.dashboard');
        }
    });

    Route::get('/homepublik', function () {
        return view('publik.dashboard');
    });
    
});




// Route::get('level',['middleware'=>['web','auth','level']], function(){
//     return 'gatau';
// });

// Auth::routes();
// Route::get('/', 'PagesController@index');

// Route::group(['middleware'=>'web'], function(){
//     // redirect login
//     Route::auth();
// });
// Route::get('/home', 'HomeController@index', function(){