<?php


Route::get('/', 'HomeController@index')->name('myshop');
Route::get('products', 'HomeController@products')->name('products');
Route::get('products/{product}', 'HomeController@product')->name('product');
Route::get('mobile', 'HomeController@mobile')->name('mobile');
Route::get('computer', 'HomeController@computer')->name('computers');
Route::get('aboutus', 'HomeController@aboutus')->name('aboutus');



Auth::routes();
Route::resource('cart', 'CartController');
Route::get('/cart/add-item/{id}', 'CartController@addItem')->name('cart.addItem');
Route::get('logout', 'Auth\LoginController@logout');
Route::group(['middleware'=> 'auth'], function (){
Route::get('shipping-info', 'AddressController@index')->name('checkout.shipping');

});

Route::resource('address', 'AddressController');

Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function(){
  Route::post('toggledeliver/{orderId}', 'OrderController@toggledeliver')->name('toggle.deliver');

Route::get('/', function(){
    return view('admin.index');
})->name('admin.index');

Route::resource('product', 'Admin\ProductsController');
Route::resource('category', 'Admin\CategoriesController');
Route::get('orders/{type?}', 'OrderController@Orders');
});
