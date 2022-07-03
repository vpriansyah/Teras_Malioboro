<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Saran;

class SaranController extends Controller
{
    public function index()
    {
        $data_pkl = DB::table('data_pkl')
            ->where('nik',  '=', Auth::user()->name)
            ->get();
        $saran = DB::table('FAQ')
            ->where('status',  '=', 'aktif')
            ->get();
        $kategori = DB::table('kat_aduan')
            ->where('status',  '=', 'Aktif')
            ->get();
        return view('pedagang.saran', ['data_pkl' => $data_pkl, 'saran' => $saran, 'kategori' => $kategori]);
    }

    public function input(Request $request)
    {
        Saran::create($request->all());
        return redirect('/pedagang/saran')->with('message', 'Data Berhasil disimpan');
    }
}
