<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AduanController extends Controller
{

    public function index()
    {
        return view('publik.aduansaran');
    }
    
    public function tambah(Request $request)
    {

        DB::table('aduan_saran_publik')->insert([
            'id' => '',
            'jenis' => $request->jenis,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'saran_aduan' => $request->saran_aduan,
            'kategori' => $request->kategori,
            'waktu' => $request->waktu
        ]);

        return redirect('/publik');
    }
}

