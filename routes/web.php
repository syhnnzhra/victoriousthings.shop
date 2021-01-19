<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'WelcomeController'); 


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
            // Route::resource('/homepublik', 'Publik\dashboardController');
            return view('publik.dashboard');
        }
    });

    Route::get('/homepublik', function () {
        return view('publik.dashboard');
    });

    Route::resource('/dashboard', 'Publik\dashboardController');
     
    //kategori publik
    Route::get('/kategori_publik', 'Publik\CategoryController@index');
    Route::resource('/detailkat', 'Publik\CategoryController'); 
    Route::get('/kategorip/{id}', 'Publik\CategoryController@kategori')->name('kategorip'); 
    
    //item
    Route::resource('/item_publik', 'Publik\ItemController'); 
    
    // cart
    Route::resource('/cart', 'Publik\CartController');
    Route::post('cart', 'Publik\CartController@addToCart')->name('front.cart');
    Route::get('/cart', 'Publik\CartController@listCart')->name('front.list_cart');
    Route::post('/cart/update', 'Publik\CartController@updateCart')->name('front.update_cart');
    // Route::get('/cart', 'Publik\CartController@cart'); 
    // Route::get('/cart/tambah/{id}', 'Publik\CartController@do_tambah_cart')->where("id","[0-9]+"); 
    
    //customer
    Route::resource('/customer_publik', 'Publik\CustomerController'); 
    
    // detail produk
    Route::resource('/detail', 'Publik\DetailprodukController');
    
    // pesan
    Route::resource('/pesan', 'PesanController');

    //transaksi
    Route::resource('/transaksi', 'Publik\TransactionController'); 
    
    //publik
    Route::get('/aksesoris', function () {
        return view('publik.category.aksesoris');
    });
    Route::get('/sweater', function () {
        return view('publik.category.sweater');
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