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

Route::get('/belajar', function () {
    return view('belajar');
});

Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/create', 'SiswaController@create');
Route::post('/siswa', 'SiswaController@store');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::patch('/siswa/{id}', 'SiswaController@update');
Route::delete('/siswa/{id}','SiswaController@destroy');

Route::get('/kelas', 'KelasController@index');
Route::get('/kelas/create', 'KelasController@create');
Route::post('/kelas', 'KelasController@store');
Route::get('/kelas/{id}/edit','KelasController@edit');
Route::patch('/kelas/{id}','KelasController@update');
Route::delete('/kelas/{id}','KelasController@destroy');

Route::get('/celana', 'CelanaController@index');
Route::get('/celana/create', 'CelanaController@create');
Route::post('/celana', 'CelanaController@store');
Route::get('/celana/{id}/edit','CelanaController@edit');
Route::patch('/celana/{id}','CelanaController@update');
Route::delete('/celana/{id}','CelanaController@destroy');

Route::get('/pelanggan', 'PelangganController@index');
Route::get('/pelanggan/create', 'PelangganController@create');
Route::post('/pelanggan', 'PelangganController@store');
Route::get('/pelanggan/{id}/edit','PelangganController@edit');
Route::patch('/pelanggan/{id}','PelangganController@update');
Route::delete('/pelanggan/{id}','PelangganController@destroy');

Route::get('/konsumen', 'KonsumenController@index');
Route::get('/konsumen/create', 'KonsumenController@create');
Route::post('/konsumen', 'KonsumenController@store');
Route::get('/konsumen/{id}/edit','KonsumenController@edit');
Route::patch('/konsumen/{id}','KonsumenController@update');
Route::delete('/konsumen/{id}','KonsumenController@destroy');

Route::get('/barang', 'BarangController@index');
Route::get('/barang/create', 'BarangController@create');
Route::post('/barang', 'BarangController@store');
Route::get('/barang/{id}/edit','BarangController@edit');
Route::patch('/barang/{id}','BarangController@update');
Route::delete('/barang/{id}','BarangController@destroy');

Route::get('/kurir', 'kurirController@index');
Route::get('/kurir/create', 'kurirController@create');
Route::post('/kurir', 'kurirController@store');
Route::get('/kurir/{id}/edit','kurirController@edit');
Route::patch('/kurir/{id}','kurirController@update');
Route::delete('/kurir/{id}','kurirController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
	
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
