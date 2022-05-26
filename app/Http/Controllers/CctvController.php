<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cctv;

class CctvController extends Controller
{
    public function index()
    {
        $tm1 = DB::table('cctv')->where('lokasi', 1)->latest('id')->first();
        $tm2 = DB::table('cctv')->where('lokasi', 2)->latest('id')->first();
        $stat_tm1 = DB::table('stat_cctv')->where('id', $tm1->status)->first();
        $stat_tm2 = DB::table('stat_cctv')->where('id', $tm2->status)->first();

        // $data = ['tm1' => $tm1, 'tm2' => $tm2, 'stat_tm1' => $stat_tm1, 'stat_tm2' => $stat_tm2];
        // dd($data);
        
        return view('publik.cctv', [
            'tm1' => $tm1,
            'tm2' => $tm2,
            'stat_tm1' => $stat_tm1,
            'stat_tm2' => $stat_tm2
        ]);
    }
}
