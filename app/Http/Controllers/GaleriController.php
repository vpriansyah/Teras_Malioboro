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
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lokasi_kios = DB::table('lokasi_no_kios')->get();
        $lokasi_lantai = DB::table('lokasi_lantai')->get();
        $lokasi_gedung = DB::table('lokasi_gedung')->get();
//        dd($lokasi_teras);
        return view('publik.galeri', compact('kat_brg','lokasi_teras','data_pkl','lokasi_kios','lokasi_lantai','lokasi_gedung'));
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
        $data_pkl = DB::table('data_pkl')->get();
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lokasi_kios = DB::table('lokasi_no_kios')->get();
        $lokasi_lantai = DB::table('lokasi_lantai')->get();
        $lokasi_gedung = DB::table('lokasi_gedung')->get();
        return view('publik.galeri', compact('kat_brg','lokasi_teras','data_pkl','lokasi_kios','lokasi_lantai','lokasi_gedung'));
    }
}
