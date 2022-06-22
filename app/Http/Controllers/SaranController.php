<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Saran;

class SaranController extends Controller
{
    public function index()
    {
        $saran = DB::table('FAQ')
            ->where('status',  '=', 'aktif')
            ->get();
        return view('pedagang.saran', ['saran' => $saran]);
    }

    public function input(Request $request)
    {
        Saran::create($request->all());
        // if($request->all()){
        return redirect('/pedagang/saran')->with('message', 'Data Berhasil disimpan');
        // }else{
        //     return redirect('/pedagang/saran')->with('status', 'Data gagal disimpan');
        // }
    }
}
