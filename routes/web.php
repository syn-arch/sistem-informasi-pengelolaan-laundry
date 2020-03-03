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
Route::get('/home', 'DashboardController@index');
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
Route::post('/transaksi/transaksi_baru', 'TransaksiController@store');
Route::post('/transaksi/tambah_paket', 'TransaksiController@tambah_paket');
Route::get('/transaksi/getdetailTransaksi', 'TransaksiController@getdetailTransaksi');
Route::get('/transaksi/batal', 'TransaksiController@batal');
Route::get('/transaksi/hitung_total', 'TransaksiController@hitung_total');

// invoice
Route::get('/transaksi/invoice/{id}', 'TransaksiController@invoice');
Route::get('/transaksi/cetak_invoice/{id}', 'TransaksiController@cetak_invoice');

// data transaksi
Route::get('/transaksi', 'TransaksiController@index');
Route::get('/transaksi/destroy/{id}', 'TransaksiController@destroy');
Route::get('/transaksi/get_transaksi/{id}', 'TransaksiController@get_transaksi');
Route::get('/transaksi/ubah_status/{id}/{status}', 'TransaksiController@ubah_status');
Route::post('/transaksi/bayar_transaksi/{id}', 'TransaksiController@bayar_transaksi');