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

// cara 2

Route::get('tugas4', function () {
    return view('formValidasi');
});

Route::get('praktikum2', function () {
    return view('formRegistrasi');
});

// cara 3
Route::get('etspweb', "ViewController@showETS");
Route::get('tugasphp', "ViewController@showKonversi");

// route CRUD Pegawai
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');

// develop mandiri
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::post('/pegawai/update', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/cari', 'PegawaiController@cari');
Route::get('/pegawai/view/{id}', 'PegawaiController@detail');

// route CRUD mutasi
Route::get('/mutasi', 'MutasiController@index');
Route::get('/mutasi/tambah', 'MutasiController@tambah');
Route::post('/mutasi/store', 'MutasiController@store');
Route::get('/mutasi/edit/{id}', 'MutasiController@edit');
Route::post('/mutasi/update', 'MutasiController@update');
Route::get('/mutasi/hapus/{id}', 'MutasiController@hapus');
Route::get('/mutasi/view/{id}', 'MutasiController@detail');
Route::get('/mutasi/cari', 'MutasiController@cari');

//route CRUD absen
Route::get('/absen', 'AbsenController@indexabsen');
Route::get('/absen/add', 'AbsenController@add');
Route::post('/absen/store', 'AbsenController@store');
Route::get('/absen/edit/{id}', 'AbsenController@edit');
Route::post('/absen/update', 'AbsenController@update');
Route::get('/absen/hapus/{id}', 'AbsenController@hapus');
Route::get('/absen/cari', 'AbsenController@cari');

//route CRUD unggas
Route::get('/unggas', 'UnggasController@index');
Route::get('/unggas/tambah', 'UnggasController@tambah'); // tambah bukan add
Route::post('/unggas/store', 'UnggasController@store');
Route::get('/unggas/edit/{id}', 'UnggasController@edit');
Route::post('/unggas/update', 'UnggasController@update');
Route::get('/unggas/hapus/{id}', 'UnggasController@hapus');
Route::get('/unggas/view/{id}', 'UnggasController@detail');
Route::get('/unggas/cari', 'UnggasController@cari');

//route CRUD karyawan1
Route::get('/karyawan1', 'karyawan1Controller@index');
Route::post('/karyawan1/store', 'karyawan1Controller@store');
Route::get('/karyawan1/edit/{id}', 'karyawan1Controller@edit');
Route::post('/karyawan1/update', 'karyawan1Controller@update');
Route::get('/karyawan1/view/{id}', 'karyawan1Controller@detail');
