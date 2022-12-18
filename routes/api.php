<?php

use App\Http\Controllers\DataService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::get('/detail-ta',[DataService::class, 'getDetail']);
//Route::get('/detail-ta/{id}',[DataService::class, 'getDetailById']);
//Route::get('/jadwal-sidang', [DataService::class, 'getJadwal']);
//Route::get('/jadwal-sidang/{id}',[DataService::class, 'getJadwalById']);
Route::get('/join', [DataService::class, 'join_data']);
Route::get('/join/{id}', [DataService::class, 'join_data_by_id']);


