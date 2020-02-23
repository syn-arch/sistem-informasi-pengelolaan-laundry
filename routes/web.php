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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@index');

// users
Route::get('/user', 'UserController@index');
Route::post('/user/store', 'UserController@store');
Route::get('/user/get_user/{id}', 'UserController@get_user');
Route::post('/user/update/{id}', 'UserController@update');
Route::get('/user/destroy/{id}', 'UserController@destroy');

// outlet
Route::get('/outlet', 'OutletController@index');
Route::post('/outlet/store', 'OutletController@store');
Route::get('/outlet/get_outlet/{id}', 'OutletController@get_outlet');
Route::post('/outlet/update/{id}', 'OutletController@update');
Route::get('/outlet/destroy/{id}', 'OutletController@destroy');


// paket
Route::get('/paket', 'PaketController@index');
Route::post('/paket/store', 'PaketController@store');
Route::get('/paket/get_paket/{id}', 'PaketController@get_paket');
Route::post('/paket/update/{id}', 'PaketController@update');
Route::get('/paket/destroy/{id}', 'PaketController@destroy');


// member
Route::get('/member', 'MemberController@index');
Route::post('/member/store', 'MemberController@store');
Route::get('/member/get_member/{id}', 'MemberController@get_member');
Route::post('/member/update/{id}', 'MemberController@update');
Route::get('/member/destroy/{id}', 'MemberController@destroy');

// transaksi
Route::get('/transaksi/transaksi_baru', 'TransaksiController@transaksi_baru');