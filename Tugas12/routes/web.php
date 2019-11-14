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
Route::post('/simpanData', 'Karyawan@store');
Route::get('/hapusData/{id}', 'Karyawan@hapus');
Route::post('/ubahData', 'Karyawan@update');
Route::get('/bacaData/{id}', 'Karyawan@getDetail');
Route::get('/semuaData', 'Karyawan@getData');