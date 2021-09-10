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
    return view('home_munas');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pendaftaran','App\Http\Controllers\IndexController@pendaftaran');

Route::get('/pendaftaran1','App\Http\Controllers\IndexController@pendaftaran1');

Route::post ('/store_hadir', 'App\Http\Controllers\IndexController@store_hadir');

Route::post ('/store_hadir1', 'App\Http\Controllers\IndexController@store_hadir1');

Route::get('/tampil','App\Http\Controllers\HomeController@index');

Route::get('/ms_hadir/hapus/{id}','App\Http\Controllers\HomeController@hapus');

Route::get('/tambah','App\Http\Controllers\HomeController@tambah');

Route::post('/tambah/store3','App\Http\Controllers\HomeController@store3');

Route::get('/asosiasi','App\Http\Controllers\HomeController@asosiasi');