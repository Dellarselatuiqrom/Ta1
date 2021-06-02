<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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


Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/kontak', 'HomeController@kontak');
Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'DashboardController@index');
    Route::resource('produk', 'ProdukController');
    Route::resource('customer', 'CustomerController');
    Route::resource('transaksi', 'TransaksiController');
    Route::get('profil', 'UserController@index');
    Route::get('setting', 'UserController@setting');
  });
//Route::get('/', function () {
   // return view('welcome');
//});
