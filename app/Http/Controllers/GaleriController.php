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
}
