<?php

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
    return view('welcome');
});

Route::get('/admin/login', function() {
    return view('admin.login');
});

Route::get('/admin', function() {
    return view('admin.pages.dashboard');
});


// Category Routers Start

Route::get('/admin/categories', function() {
    return view('admin.pages.categories');
});

Route::get('/admin/category/edit', function() {
    return view('admin.pages.editCategory');
});

Route::get('/admin/category/add', function() {
    return view('admin.pages.addCategory');
});

// Category Routers End



// Product Routers Start

Route::get('/admin/products', function() {
    return view('admin.pages.products');
});

Route::get('/admin/product/add', function() {
    return view('admin.pages.addProduct');
});

Route::get('/admin/product/edit', function() {
    return view('admin.pages.editProduct');
});

// Product Routers End


// Order Routers Start

Route::get('/admin/orders', function() {
    return view('admin.pages.orders');
});

Route::get('/admin/order/show', function() {
    return view('admin.pages.showOrder');
});

// Order Routers End



// User Routers Start

Route::get('/admin/users', function() {
    return view('admin.pages.users');
});

Route::get('/admin/user/add', function() {
    return view('admin.pages.addUser');
});

Route::get('/admin/user/edit', function() {
    return view('admin.pages.editUser');
});

// User Routers End