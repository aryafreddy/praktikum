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

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/tampilan', function () {
    return view('admin/tampilan');
});

Route::get('/terkirim', function () {
    return view('admin/terkirim');
});

Route::get('/tambahproduct', function () {
    return view('admin/product/tambahproduct');
});

Route::get('/editproduct', function () {
    return view('admin/product/editproduct');
});

Route::get('/product', function () {
    return view('admin/product');
});

Route::get('/about', function () {
    return view('admin/about');
});

Route::get('/message', function () {
    return view('admin/message');
});

Route::get('/login', function () {
    return view('loginregis/logins');
});