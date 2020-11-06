<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::auth();
// Route::get('/home', 'HomeController@index');
Route::group(['middleware'=>['web', 'auth']], function(){ 

    //item
    Route::resource('/item_admin', 'Admin\ItemController'); 

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
    
    //kategori publik
    Route::resource('/kategori_publik', 'Publik\CategoryController'); 
    
    //item
    Route::resource('/item_publik', 'Publik\ItemController'); 
    
    //customer
    Route::resource('/customer_publik', 'Publik\CustomerController'); 

    //transaksi
    Route::resource('/transaksi', 'Publik\TransactionController'); 
    
    //publik
    Route::get('/dress', function () {
        return view('publik.category.dress');
    });
    Route::get('/sweater', function () {
        return view('publik.category.sweater');
    });
    Route::get('/jacket', function () {
        return view('publik.category.jacket');
    });
    Route::get('/celana', function () {
        return view('publik.category.celana');
    });
    Route::get('/shirt', function () {
        return view('publik.category.shirt');
    });
    Route::get('/cardigan', function () {
        return view('publik.category.cardigan');
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