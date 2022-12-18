<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;


class AppController extends Controller
{
//    public function ambil()
//    {
////        $client = new Client(['base_uri' => 'http://127.0.0.1:8000/']);
////        $response = $client->request('GET', 'detail-ta');
////        dd($response);
//        return "Hello World";
//    }
    public function nyoba()
    {
        return "Hello World";
}
}
