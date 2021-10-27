<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'front-end.index');

Route::get('/product-details/{product}', function($product){
    $product_details = App\Models\Product::find($product);
    return view('front-end.product_details', compact('product_details'));
})->name('product.details');

Route::get('category/product/{id}', function($id){
    $category_product = App\Models\Category::find($id);
    return view('front-end.category_by_product', compact('category_product'));
})->name('category.product');


//cart
Route::group(['namespace'=>'Frontend'], function (){
    Route::get('/cart', 'CartController@cartIndex')->name('cart.index');
    Route::post('/add-to-cart', 'CartController@cartItemAdd')->name('add.cart');
    Route::post('/add-cart-ajax', 'CartController@cartItemAjax')->name('add.cart.ajax');
    Route::put('/cart/update', 'CartController@cartUpdate')->name('cart.update');
    Route::get('/cart/destroy/{rowId}', 'CartController@cartDestroy')->name('cart.destroy');
});


Auth::routes();

//frontend route are here
Route::group(['prefix'=>'customer','namespace'=>'Frontend', 'middleware' => ['auth', 'customer']], function(){
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('/payment', 'DashboardController@cartPayment')->name('shopping.payment');
    Route::view('/shipping', 'front-end.shopping-cart.shipping')->name('shipping.address');
    Route::post('/shipping/address', 'CartController@shippingAddressStore')->name('shipping.address.store');

});

//backend route are here
Route::group(['namespace'=>'Backend', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('shipping', 'ShippingController');
});

