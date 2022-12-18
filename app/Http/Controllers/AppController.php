<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


class AppController extends Controller
{
    public function detail()
    {
        $request = Request::create('api/join', 'GET');
        $response = Route::dispatch($request);

        $joined = json_decode($response->getContent(), true);

        return view('detail-ta', ['joined' => $joined]);
    }

    public function detail_by_id($id)
    {
        $request = Request::create('api/join/'.$id, 'GET');
        $response = Route::dispatch($request);

        $joined = json_decode($response->getContent(), true);

        return view('penjadwalan', ['joined' => $joined]);
    }


//    {
//        $request = Request::create('api/join/{$id}', 'GET');
//        $response = Route::dispatch($request);
//
//        $joined = json_decode($response->getContent(), true);
////        dd($joined)
//        return view('penjadwalan', ['joined' => $joined]);
//    }

//    public function index()
//    {
//        $request = Request::create('api/detail-ta', 'GET');
//        $response = Route::dispatch($request);
//
//        $request = Request::create('api/jadwal-sidang', 'GET');
//        $response = Route::dispatch($request);
//
//        $detail_ta = json_decode($response->getContent(), true);
//        $jadwal_sidang = json_decode($response->getContent(), true);
////        dd($result);
//        return view('detail-ta',['detail_ta' => $detail_ta, 'jadwal_sidang' => $jadwal_sidang]);
//    }


}
