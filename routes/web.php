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

Route::group(['middleware' => ['auth']], function (){

Route::get('/', function () {
    return view('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('Produk.index', 'ProdukController@index');

Route::get('dashboard', 'ProdukController@chart');

Route::get('/Produk.create', 'ProdukController@create')->name('Produk.create');

Route::post('/Produk.index', 'ProdukController@store');

Route::get('{produk}/edit', 'ProdukController@edit');

Route::patch('/Produk.index/{produk}', 'ProdukController@update');

// Route::get('Pegawai.indexpemasukkan', 'PemasukkanController@index');

Route::get('Pegawai/createpemasukkan', 'PemasukkanController@create');

Route::get('Pemasukkan.index', 'PemasukkanController@index');

Route::post('/Pemasukkan.index', 'PemasukkanController@store');

Route::get('Pengeluaran.create', 'PengeluaranController@create');

Route::get('Pengeluaran.index', 'PengeluaranController@index');

Route::post('Pengeluaran.index', 'PengeluaranController@store');
});

//laporan keuangan

Route::get('Keuangan.index', 'KeuanganController@index');