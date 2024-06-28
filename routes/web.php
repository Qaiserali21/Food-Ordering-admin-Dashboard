<?php

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

Route::get('/', function () {
    return view('admin-dashboard');
});

Route::get('/pages/order', function () {
    return view('pages/order');
});

Route::get('/pages/order_details', function () {
    return view('pages/order_details');
});

Route::get('/pages/add_new_menu', function () {
    return view('pages/add_new_menu');
});

Route::get('/pages/menu_list', function () {
    return view('pages/menu_list');
});

Route::get('/pages/categories', function () {
    return view('pages/categories');
});

Route::get('/pages/customer', function () {
    return view('pages/customer');
});

Route::get('/pages/members', function () {
    return view('pages/members');
});

Route::get('/pages/analytics', function () {
    return view('pages/analytics');
});

Route::get('/pages/products', function () {
    return view('pages/products');
});

Route::get('/pages/product_cart', function () {
    return view('pages/product_cart');
});

Route::get('/pages/product_edit', function () {
    return view('pages/product_edit');
});

Route::get('/pages/products_details', function () {
    return view('pages/products_details');
});

Route::get('/pages/products_orders', function () {
    return view('pages/products_orders');
});

Route::get('/pages/products_checkout', function () {
    return view('pages/products_checkout');
});

Route::get('/pages/Invoices', function () {
    return view('pages/Invoices');
});

Route::get('/pages/invoice_list', function () {
    return view('pages/invoice_list');
});