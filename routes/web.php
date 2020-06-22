<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomePageController@index')->name('index');

Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/{product}', 'ProductsController@show')->name('products.show');

Route::get('/check_out', 'PagesController@check_out')->name('check_out');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/product_page', 'PagesController@product_page')->name('product_page');
Route::get('/shopping_cart', 'PagesController@shopping_cart')->name('shopping_cart');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/single_blog', 'PagesController@single_blog')->name('single_blog');
Route::get('/tracking', 'PagesController@tracking')->name('tracking');

