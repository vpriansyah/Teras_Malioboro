<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublikController extends Controller
{
    public function index()
    {
        $aduan_saran_pilihan = DB::table('aduan_saran_publik')->where('tampil', 'true')->orderBy('waktu')
            ->join('kat_aduan', 'kat_aduan.id', '=', 'aduan_saran_publik.kategori')
            ->join('jawaban_publik', 'jawaban_publik.id_aduan_saran', '=', 'aduan_saran_publik.id')
            ->get();
        // dd($aduan_saran_pilihan);
        $info_penting = DB::table('info')->where('status', 'Aktif')->get();
        return view('publik.index', ['info' => $info_penting, 'pilihan' => $aduan_saran_pilihan]);
    }

}