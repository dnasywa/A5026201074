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
// Route::post('greetings',"ViewController@resultGreetings");
Route::get('etspweb', "ViewController@showETS") ;
Route::get('tugasphp', "ViewController@showKonversi") ;

// route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

// develop mandiri
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
