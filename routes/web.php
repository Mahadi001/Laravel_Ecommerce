<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index')->name('index');
Route::get('/categories', 'PagesController@categories')->name('categories');
Route::get('/check_out', 'PagesController@check_out')->name('check_out');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/product_page', 'PagesController@product_page')->name('product_page');
Route::get('/shopping_cart', 'PagesController@shopping_cart')->name('shopping_cart');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/single_blog', 'PagesController@single_blog')->name('single_blog');
Route::get('/single_product', 'PagesController@single_product')->name('single_product');
Route::get('/tracking', 'PagesController@tracking')->name('tracking');

