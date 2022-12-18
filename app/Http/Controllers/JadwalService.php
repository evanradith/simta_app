<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalService extends Controller
{
    public function getAll()
    {
        $jadwal_sidang = DB::table('jadwal_sidang')->get();

        return response()->json($jadwal_sidang);
    }

    public function getDetail($id)
    {
        $jadwal_sidang = DB::table('jadwal_sidang')->where('id_jadwal', $id)->get();

        return response()->json($jadwal_sidang);
    }
}
