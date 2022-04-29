<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistikPublikController extends Controller
{
    public function index()
    {
        //Data Jenis Kelamin
        $data['laki'] = DB::table('data_pkl')->where('gender', 'L')->count();
        $data['perempuan'] = DB::table('data_pkl')->where('gender', 'P')->count();

        //Data Paguyuban
        $paguyuban = DB::table('paguyuban')->get();
        foreach ($paguyuban as $p) {
            $data[$p->nama] = DB::table('data_pkl')->where('paguyuban_id', $p->id)->count();
        };

        //Data Lokasi Pedagang
        $lokasi = DB::table('lokasi_gedung')->get();
        foreach ($lokasi as $l) {
            $data[$l->nama] = DB::table('data_pkl')->where('lokasi_gedung_id', $l->id)->count();
        };

        //Data Kategori Dagangan
        $kat = DB::table('kat_dagangan')->get();
        foreach ($kat as $k) {
            $data[$k->nama] = DB::table('data_pkl')->where('kat_dagangan_id', $k->id)->count();
        };
        
        // dd($data);
        return view('publik.statistik', ['data' => $data]);
    }
}
