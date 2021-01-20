<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
    //     return view('welcome');
    // });
    
    Route::resource('/', 'WelcomeController'); 
    
    
    Route::auth();
    // Route::get('/home', 'HomeController@index');



    // halaman awal admin
Route::group(['middleware' => 'App\Http\Middleware\isAdmin'], function () {
    // Route::resource('/home', 'Admin\HomeController')->middleware('isAdmin');
    Route::resource('/home', 'Admin\HomeController');
    
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
});


// halaman awal publik
Route::group(['middleware'=>['App\Http\Middleware\Publik']], function(){ 
    Route::resource('/homepublik', 'Publik\HomeController');
    // Route::resource('/homepublik', 'Admin\HomeController')->middleware('Publik');
    
    // Route::get('/home', function(){
        //     return view('publik.dashboard');
    // });
    
    // if(Auth::user()->level == 'admin'){
    //     Route::resource('/home', 'Admin\HomeController');
    //     return view('admin.homeAdmin');
    // } else{
    //     Route::resource('/homepublik', 'Publik\dashboardController');
    // }

    // Route::get('/homepublik', function () {
    //     return view('publik.dashboard');
    // });

    Route::resource('/dashboard', 'Publik\dashboardController');
     
    //kategori publik
    Route::get('/kategori_publik', 'Publik\CategoryController@index');
    Route::resource('/detailkat', 'Publik\CategoryController'); 
    // Route::resource('/pesankat', 'PesanController');
    Route::get('/kategorip/{id}', 'Publik\CategoryController@kategori')->name('kategorip');
    
    //item
    Route::resource('/item_publik', 'Publik\ItemController'); 
    Route::get('/searchpublikitem', 'Publik\ItemController@searchp');
    // Route::resource('/pesan', 'Publik\ItemController');
    
    // cart
    Route::resource('/cart', 'Publik\CartController');
    Route::get('/cart_tampil', 'Publik\CartController@cart_tampil');
    Route::get('/cartp', 'Publik\CartController@cart_tampil');
    Route::post('cart', 'Publik\PesanController@addToCart')->name('front.cart');
    // Route::post('cart', 'Publik\CartController@addToCart')->name('front.cart');
    Route::get('/cart_p', 'Publik\CartController@listCart')->name('front.list_cart');
    Route::post('/cart/update', 'Publik\CartController@updateCart')->name('front.update_cart');
    // Route::get('/cart', 'Publik\CartController@cart'); 
    // Route::get('/cart/tambah/{id}', 'Publik\CartController@do_tambah_cart')->where("id","[0-9]+"); 
    
    //customer
    Route::resource('/customer_publik', 'Publik\CustomerController'); 
    
    // detail produk
    Route::resource('/detail', 'Publik\DetailprodukController');

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