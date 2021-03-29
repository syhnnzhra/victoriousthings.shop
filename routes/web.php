<?php

use App\Http\Controllers\Publik\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::resource('/', 'WelcomeController');
    Route::get('/items', 'WelcomeController@item');
    Route::auth();
    Auth::routes(['verify' => true]);
    
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
    Route::post('orderStatusUpdate','Admin\OrderController@orderStatusUpdate');
    
    //order detail
    Route::resource('/Odetail', 'Admin\OdetailController'); 

     //report
    Route::get('/report', 'Admin\ReportController@index');
    Route::get('/print', 'Admin\ReportController@print')->name('print');
});

//payment
Route::post('/payments/notification', 'Publik\PaymentController@notification');
Route::get('/payments/complete', 'Publik\PaymentController@complete');
Route::get('/payments/failed', 'Publik\PaymentController@failed');
Route::get('/payments/unfinish', 'Publik\PaymentController@unfinish');

// halaman awal publik
Route::group(['middleware'=>['App\Http\Middleware\Publik']], function(){ 
    Route::resource('/homepublik', 'Publik\HomeController');
    Route::resource('/verify', 'HomeController');
    Route::resource('/dashboard', 'Publik\DashboardController');
    
    //profile
    Route::resource('/prof', 'Publik\ProfileController');
    Route::resource('/trans', 'Publik\BaruControllergit ');
    Route::post('/prof{id}', 'ProfileController@update')->name('update');
    
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
    
    //sell
    Route::resource('/sell', 'Publik\SellController');

    Route::resource('/transaction', 'Publik\TransactionController');
    Route::resource('/checkout', 'Publik\CheckoutController');
    Route::get('/received/{order_id}', 'Publik\CheckoutController@received');
    
    // ongkir
    Route::resource('/ongkir', 'Publik\CheckOngkirController');
    Route::post('/cekongkir', 'Publik\CheckOngkirController@check_ongkir');
    Route::get('/getCity/{province_id}', 'Publik\CheckOngkirController@getCities');
    
    // invoice
    Route::get('/invoice', function () {
        return view('publik.invoice.index');
    });
    Route::resource('/transaction', 'Publik\TransactionController');
    Route::resource('/checkout', 'Publik\CheckoutController');
    Route::get('/{id}', 'Publik\CheckoutController@edit')->name('checkout.edit');
    // Route::post('/checkoutcart', 'Publik\CartController@checkout')->name('checkoutcart.ck');
    
    // odetail
    Route::get('/ckbrng/{id}', 'Publik\CartController@odetail')->name('ckbrng.tampil');
    // Route::get('/ckbrng/{id}', 'Publik\CartController@ckbrngedit')->name('ckbrng.edit');
    Route::get('/ckbrng/{id}', 'Publik\CheckoutController@trans')->name('ckbrng.show');
    Route::post('/ckbrng/{id}', 'Publik\CartController@saveodetail')->name('ckbrng.saveodetail');
    
    // Track
    Route::get('trackOrder/{order_id}', 'Publik\OrderController@edit');
    Route::post('trackOrder/{order_id}', 'Publik\OrderController@edit');

    //customer
    Route::resource('/customer_publik', 'Publik\CustomerController'); 
    

    
    // detail produk
    Route::resource('/detail', 'Publik\DetailprodukController');
    


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