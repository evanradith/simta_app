<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataService extends Controller
{
    public function join_data()
    {
        $joined = DB::table('detail_ta')
            ->join('jadwal_sidang', 'detail_ta.nrp_mhs', '=', 'jadwal_sidang.nrp_mhs')
            ->select('detail_ta.*', 'jadwal_sidang.*')
            ->get();
        return response()->json($joined);
    }

    public function join_data_by_id($id)
    {
        $joined = DB::table('detail_ta')
            ->join('jadwal_sidang', 'detail_ta.nrp_mhs', '=', 'jadwal_sidang.nrp_mhs')
            ->select('detail_ta.*', 'jadwal_sidang.*')
            ->where('id_detail', $id)
            ->get();
        return response()->json($joined);
    }

    public function update_jadwal()
    {
        $jadwal_sidang = $this->request->input('jadwal_sidang');

        try {
            DB::table('jadwal_sidang')
                ->insert([
                    'jadwal_sidang' => $jadwal_sidang,
                ]);
            $id = DB::getPdo()->lastInsertId();

            return redirect('/app-detail-ta');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);


//        }
////        $jadwal = DB::table('jadwal_sidang')
////            ->where('id_jadwal', $id)
////            ->update([
////                'jadwal_sidang' => $request->jadwal,
////            ]);
////        return response()->json($jadwal);
//    }

//    public function getDetail()
//    {
//        $detail_ta = DB::table('detail_ta')->get();
//
//        return response()->json($detail_ta);
//    }
//
//    public function getDetailById($id)
//    {
//        $detail_ta = DB::table('detail_ta')->where('id_detail', $id)->get();
//
//        return response()->json($detail_ta);
//    }
//
//    public function getJadwal()
//    {
//        $jadwal_sidang = DB::table('jadwal_sidang')->get();
//
//        return response()->json($jadwal_sidang);
//    }
//
//    public function getJadwalById($id)
//    {
//        $jadwal_sidang = DB::table('jadwal_sidang')->where('id_jadwal', $id)->get();
//
//        return response()->json($jadwal_sidang);
//    }


        }
    }
}

