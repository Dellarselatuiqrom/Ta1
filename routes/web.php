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

Route::get('/', 'HomepageController@index');
Route::get('/about', 'HomepageController@about');
Route::get('/kontak', 'HomepageController@kontak');
Route::get('/produk', 'HomepageController@produk');
Route::get('/produk/{id}', 'HomepageController@produkdetail');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
  Route::get('/', 'DashboardController@index');
  // route produk
  Route::resource('produk', 'ProdukController');
  // route customer
  Route::resource('customer', 'CustomerController');
  // route transaksi
  Route::resource('transaksi', 'TransaksiController');
  // profil
  Route::get('profil', 'UserController@index');
  // setting profil
  Route::get('setting', 'UserController@setting');
  // form laporan
  Route::get('laporan', 'LaporanController@index');
  // proses laporan
  Route::get('proseslaporan', 'LaporanController@proses');
  Route::get('image', 'ImageController@index');
  // simpan image
  Route::post('image', 'ImageController@store');
  // hapus image by id
  Route::delete('image/{id}', 'ImageController@destroy');Route::post('produkimage', 'ProdukController@uploadimage');
   // hapus image produk
   Route::delete('produkimage/{id}', 'ProdukController@deleteimage');
   // slideshow
   Route::resource('slideshow', 'SlideshowController');
   Route::resource('wishlist', 'WishlistController');
});

Auth::routes();

//Route::get('/home', 'HomepageController@index')->name('homepage');
Route::get('/home', function() {
    return redirect('/admin');
  });
