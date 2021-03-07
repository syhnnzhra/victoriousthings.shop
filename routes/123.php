<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
    //     return view('welcome');
    // });
    
    Route::resource('/', 'WelcomeController');
    Route::auth();
    Auth::routes(['verify' => true]);
    
    // Route::get('/home', 'HomeController@index');
    // halaman awal admin
Route::group(['middleware' => 'App\Http\Middleware\isAdmin'], function () {
    // Route::resource('/home', 'Admin\HomeController')->middleware('isAdmin');
    Route::resource('/home', 'Admin\HomeController');
    
    //item
    Route::resource('/item_admin', 'Admin\ItemController'); 
    
    
    //kategori
    Route::resource('/kategori', 'Admin\CategoryController'); 
    
    //barang masuk
    Route::resource('/barang_masuk', 'Admin\IncomingitemController'); 
    
    //distributor
    Route::resource('/distributor', 'Admin\DistributorController'); 
    
    //order
    Route::resource('/order', 'Admin\OrderController'); 
    Route::get('orderStatusUpdate','Admin\OrderController@orderStatusUpdate');
    Route::get('/searchorder', 'Admin\OrderController@searchp');
    
    //order detail
    Route::resource('/Odetail', 'Admin\OdetailController'); 
});


// halaman awal publik
Route::group(['middleware'=>['App\Http\Middleware\Publik']], function(){ 
    Route::resource('/homepublik', 'Publik\HomeController');
    Route::resource('/verify', 'HomeController');
    Route::resource('/dashboard', 'Publik\DashboardController');
    
    //profile
    Route::resource('/prof', 'Publik\ProfileController'); 
    
    //payment
    // Route::get('/payments/notification', 'Publik\PaymentController@notification');
    Route::get('/payments/complited', 'Publik\PaymentController@complited');
    Route::get('/payments/failed', 'Publik\PaymentController@failed');
    Route::get('/payments/unfinish', 'Publik\PaymentController@unfinish');
    
    //kategori publik
    Route::get('/kategori_publik', 'Publik\CategoryController@index');
    Route::resource('/detailkat', 'Publik\CategoryController'); 
    Route::get('/kategorip/{id}', 'Publik\CategoryController@kategori')->name('kategorip');
    Route::get('/searchpublikkat', 'Publik\CategoryController@searchp');
    
    //item
    Route::resource('/item_publik', 'Publik\ItemController'); 
    Route::resource('/dashboarditem', 'Publik\ItemController');
    Route::get('/searchpublikitem', 'Publik\ItemController@searchp');
    
    // cart
    Route::resource('/cart', 'Publik\CartController');
    Route::resource('/checkout', 'Publik\CheckoutController');
    Route::get('/cart_tampil', 'Publik\CartController@cart_tampil');
    Route::get('/cartp', 'Publik\CartController@cart_tampil');
    Route::post('cart', 'Publik\CartController@addToCart')->name('front.cart');
    Route::post('/cart/update', 'Publik\CartController@updateCart')->name('front.update_cart');

    Route::resource('/transaction', 'Publik\TransactionController');
    Route::resource('/checkout', 'Publik\CheckoutController');
    Route::get('/received/{order_id}', 'Publik\CheckoutController@received');
    
    // odetail
    Route::get('/ckbrng/{id}', 'Publik\CartController@odetail')->name('ckbrng.tampil');
    // Route::get('/ckbrng/{id}', 'Publik\CartController@ckbrngedit')->name('ckbrng.edit');
    Route::get('/ckbrng/{id}', 'Publik\CheckoutController@trans')->name('ckbrng.show');
    Route::post('/ckbrng/{id}', 'Publik\CartController@saveodetail')->name('ckbrng.saveodetail');

    // Track
    Route::get('trackOrder/{order_id}',function($order_id){
        $orderData = App\Order::where('order_id',$order_id)->get();
        return view('publik.profile.track',['data' => $orderData]);
      });
    
    // detail produk
    Route::resource('/detail', 'Publik\DetailprodukController');

});