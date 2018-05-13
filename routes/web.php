<?php

Route::get('/', 'User\HomeController@index')->name('myshop');
Route::get('products', 'User\HomeController@products')->name('products');
Route::get('products/{product}', 'User\HomeController@product')->name('product');
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

Route::resource('cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');


Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function(){
  Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

Route::get('/', function(){
    return view('admin.index');
})->name('admin.index');

Route::resource('product', 'Admin\ProductsController');
Route::resource('category', 'Admin\CategoriesController');
Route::get('orders/{type?}', 'OrderController@Orders');
});

Route::resource('address', 'AddressController');

Route::group(['middleware'=> 'auth'], function (){
Route::get('shipping-info', 'CheckOutController@shipping')->name('checkout.shipping');


});

// Route::get('checkout', 'CheckOutController@step1');
Route::get('payment', 'CheckOutController@payment')->name('checkout.payment');
Route::post('store-payment','CheckOutController@storePayment')->name('payment.store');
