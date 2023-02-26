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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//master-data -> edit brand
Route::prefix('master-data/edit-brand')->group(function () {
    Route::get('table', 'laravelcss\eBrand\eBrandController@index')->name('tampilan.ebrand');
    Route::get('create', 'laravelcss\eBrand\eBrandController@create')->name('create.ebrand');
    Route::post('simpan', 'laravelcss\eBrand\eBrandController@store')->name('simpan.ebrand');
    Route::get('edit/{id}', 'laravelcss\eBrand\eBrandController@edit')->name('edit.ebrand');
    Route::post('update/{id}', 'laravelcss\eBrand\eBrandController@update')->name('update.ebrand');
    Route::get('delete/{id}', 'laravelcss\eBrand\eBrandController@destroy')->name('delete.ebrand');
});

//master-data -> edit kategori
Route::prefix('master-data/edit-kategori')->group(function () {
    Route::get('table', 'laravelcss\eKategori\eKategoriController@index')->name('tampilan.ekategori');
    Route::get('create', 'laravelcss\eKategori\eKategoriController@create')->name('create.ekategori');
    Route::post('simpan', 'laravelcss\eKategori\eKategoriController@store')->name('simpan.ekategori');
    Route::get('edit/{id}', 'laravelcss\eKategori\eKategoriController@edit')->name('edit.ekategori');
    Route::post('update/{id}', 'laravelcss\eKategori\eKategoriController@update')->name('update.ekategori');
    Route::get('delete/{id}', 'laravelcss\eKategori\eKategoriController@destroy')->name('delete.ekategori');
});

//master-data -> satuan
Route::prefix('master-data/satuan')->group(function () {
    Route::get('table', 'laravelcss\Satuan\SatuanController@index')->name('tampilan.satuan');
    Route::get('create', 'laravelcss\Satuan\SatuanController@create')->name('create.satuan');
    Route::post('simpan', 'laravelcss\Satuan\SatuanController@store')->name('simpan.satuan');
    Route::get('edit/{id}', 'laravelcss\Satuan\SatuanController@edit')->name('edit.satuan');
    Route::post('update/{id}', 'laravelcss\Satuan\SatuanController@update')->name('update.satuan');
    Route::get('delete/{id}', 'laravelcss\Satuan\SatuanController@destroy')->name('delete.satuan');
});

//master-barang -> index
Route::prefix('master-barang/index')->group(function () {
    Route::get('table', 'laravelcss\Index\IndexController@index')->name('tampilan.index');
    Route::get('create', 'laravelcss\Index\IndexController@create')->name('create.index');
    Route::post('simpan', 'laravelcss\Index\IndexController@store')->name('simpan.index');
    Route::get('edit/{id}', 'laravelcss\Index\IndexController@edit')->name('edit.index');
    Route::post('update/{id}', 'laravelcss\Index\IndexController@update')->name('update.index');
    Route::get('delete/{id}', 'laravelcss\Index\IndexController@destroy')->name('delete.index');
});

//master-barang -> add barang
Route::prefix('master-barang/add-barang')->group(function () {
    Route::get('table', 'laravelcss\Add\AddController@index')->name('tampilan.add');
    Route::get('create', 'laravelcss\Add\AddController@create')->name('create.add');
    Route::post('simpan', 'laravelcss\Add\AddController@store')->name('simpan.add');
    Route::get('edit/{id}', 'laravelcss\Add\AddController@edit')->name('edit.add');
    Route::post('update/{id}', 'laravelcss\Add\AddController@update')->name('update.add');
    Route::get('delete/{id}', 'laravelcss\Add\AddController@destroy')->name('delete.add');
});

//master-barang -> req stock
Route::prefix('master-barang/request-stock')->group(function () {
    Route::get('table', 'laravelcss\Req\ReqController@index')->name('tampilan.req');
    Route::get('create', 'laravelcss\Req\ReqController@create')->name('create.req');
    Route::post('simpan', 'laravelcss\Req\ReqController@store')->name('simpan.req');
    Route::get('edit/{id}', 'laravelcss\Req\ReqController@edit')->name('edit.req');
    Route::post('update/{id}', 'laravelcss\Req\ReqController@update')->name('update.req');
    Route::get('delete/{id}', 'laravelcss\Req\ReqController@destroy')->name('delete.req');
});

//Transaksi -> barang masuk
Route::prefix('transaksi/barang-masuk')->group(function () {
    Route::get('table', 'laravelcss\bMasuk\bMasukController@index')->name('tampilan.bmasuk');
    Route::get('create', 'laravelcss\bMasuk\bMasukController@create')->name('create.bmasuk');
    Route::post('simpan', 'laravelcss\bMasuk\bMasukController@store')->name('simpan.bmasuk');
    Route::get('edit/{id}', 'laravelcss\bMasuk\bMasukController@edit')->name('edit.bmasuk');
    Route::post('update/{id}', 'laravelcss\bMasuk\bMasukController@update')->name('update.bmasuk');
    Route::get('delete/{id}', 'laravelcss\bMasuk\bMasukController@destroy')->name('delete.bmasuk');
});

//Transaksi -> barang keluar
Route::prefix('transaksi/barang-keluar')->group(function () {
    Route::get('table', 'laravelcss\bKeluar\bKeluarController@index')->name('tampilan.bkeluar');
    Route::get('create', 'laravelcss\bKeluar\bKeluarController@create')->name('create.bkeluar');
    Route::post('simpan', 'laravelcss\bKeluar\bKeluarController@store')->name('simpan.bkeluar');
    Route::get('edit/{id}', 'laravelcss\bKeluar\bKeluarController@edit')->name('edit.bkeluar');
    Route::post('update/{id}', 'laravelcss\bKeluar\bKeluarController@update')->name('update.bkeluar');
    Route::get('delete/{id}', 'laravelcss\bKeluar\bKeluarController@destroy')->name('delete.bkeluar');
});