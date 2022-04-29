<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index()
    {
        $data_pkl = DB::table('data_pkl')->get();
        $kat_brg = DB::table('kat_dagangan')->get();
        return view('publik.galeri', ['kat_brg' => $kat_brg],['data_pkl' => $data_pkl]);
    }

    public function data($id)
    {   
        $data_pkl = DB::table('data_pkl')->where("id",$id)->get();
//        dd($data_pkl);
        $lokasi_no_kios = DB::table('data_pkl')
                ->join('lokasi_no_kios', 'lokasi_no_kios.id', '=', 'data_pkl.lokasi_no_kios_id')
                ->select('lokasi_no_kios.*')
                ->get();
        return view('publik.galeri-data', ['data_pkl' => $data_pkl],['lokasi_no_kios' => $lokasi_no_kios]);
    }

    public function group($id)
    {
        $kat_brg = DB::table('kat_dagangan')->get();
        $data_pkl = DB::table('data_pkl')->where('kat_dagangan_id',$id)->get();
        return view('publik.galeri',['data_pkl'=>$data_pkl],['kat_brg' => $kat_brg]);
    }
}
