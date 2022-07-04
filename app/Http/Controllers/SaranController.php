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
        $aduan = DB::table('saran')
            ->join('data_pkl', 'data_pkl.id', '=', 'saran.pedagang_id')
            ->join('kat_aduan', 'kat_aduan.id', '=', 'saran.kategori_id')
            ->where('nik',  '=', Auth::user()->name)
            ->get();
        $feedback = DB::table('feedback_saran_pedagang')
            ->join('saran', 'saran.id_saran', '=', 'feedback_saran_pedagang.saran_id')
            ->join('data_pkl', 'data_pkl.id', '=', 'saran.pedagang_id')
            ->where('nik',  '=', Auth::user()->name)
            ->get();
        return view('pedagang.saran', ['data_pkl' => $data_pkl, 'saran' => $saran, 'kategori' => $kategori, 'aduan' => $aduan, 'feedback' => $feedback]);
    }

    public function input(Request $request)
    {
        Saran::create($request->all());
        return redirect('/pedagang/saran')->with('message', 'Data Berhasil disimpan');
    }
}
