<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailService;
use App\Http\Controllers\JadwalService;
//use App\Http\Controllers\AppController;

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
    return view('layouts.app');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//Route::get('/proposal', function () {
//    return view('proposal');
//});
Route::get('/detail-ta',[DetailService::class, 'getAll']);
Route::get('/detail-ta/{id}',[DetailService::class, 'getDetail']);
Route::get('/jadwal-sidang', [JadwalService::class, 'getAll']);
Route::get('/jadwal-sidang/{id}',[JadwalService::class, 'getDetail']);
//Route::get('/ambil', [AppController::class, 'nyoba']);
