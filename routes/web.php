<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataService;
use App\Http\Controllers\AppController;

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
    return view('dashboard');
});

//Route::get('/proposal', function () {
//    return view('proposal');
//});

Route::get('/app-detail-ta', [AppController::class, 'detail']);
Route::get('/app-penjadwalan/{id}', [AppController::class, 'detail_by_id']);
Route::get('/app-penjadwalan/update', [AppController::class, 'update_jadwal']);

//Route::get('/detail-ta', [DataService::class, 'getAll']);
