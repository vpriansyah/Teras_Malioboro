<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistikPedagangController extends Controller
{
    public function index()
    {
        //Data Statistik Pengunjung
        $kunjungan = DB::table('statkunjungan')->get();
        foreach ($kunjungan as $p) {
            $data[$p->bulan] = DB::table('statkunjungan')->where('id', $p->id)->count();
        };

        // dd($data);
        return view('pedagang.statistik', ['data' => $data]);
    }
}
