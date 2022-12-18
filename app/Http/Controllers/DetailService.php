<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailService extends Controller
{
    public function getAll()
    {
        $detail_ta = DB::table('detail_ta')->get();

        return response()->json($detail_ta);
    }

    public function getDetail($id)
    {
        $detail_ta = DB::table('detail_ta')->where('id_detail', $id)->get();

        return response()->json($detail_ta);
    }
}
