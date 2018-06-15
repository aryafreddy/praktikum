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

// Route::get('/tambahmessage', function () {
//     return view('admin/message/tambahmessage');
// });

Route::get('/editproduct', function () {
    return view('admin/product/editproduct');
});

// Route::get('/product', function () {
//     return view('admin/product');
// });

Route::resource('/product', 'ProductController');

Route::resource('/message', 'MessageController');
Route::get('/tambahmessage', 'MessageController@tambah');

Route::get('/about', function () {
    return view('admin/about');
});

// Route::get('/message', function () {
//     return view('admin/message');
// });

Route::get('/login', function () {
    return view('loginregis/logins');
});

Route::get('/', function () {
    return view('user.index'); });

Route::get('/cake', function () {
    return view('user.viewcake'); });

Route::get('/pudding', function () {
    return view('user.viewpudding'); });

Route::get('/kering', function () {
    return view('user.viewkering'); });

Route::get('/basah', function () {
    return view('user.viewbasah'); });

Route::get('/detailkering', function () {
    return view('user.viewdetail'); });

Route::get('/detailbasah', function () {
        return view('user.viewdetail2'); });

Route::get('/detailcake', function () {
     return view('user.viewdetail3'); });
        
Route::get('/detailpudding', function () {
    return view('user.viewdetail4'); });
    
Route::get('/register', function () {
    return view('auth.register'); });