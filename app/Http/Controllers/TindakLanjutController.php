<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TindakLanjutController extends Controller
{    
    public function index()
    {
        $tindak_lanjut = DB::table('tindak_lanjut')->paginate(9);
        return view('pedagang.tindaklanjut', ['tindak_lanjut' => $tindak_lanjut]);
    }

    public function search(Request $request)
    {
        $search = DB::table('tindak_lanjut')->where('Judul', 'like', "%" . $request->search . "%")->paginate(2);
        return view('pedagang.tindaklanjut', ['tindak_lanjut' => $search]);
    }

    public function readmore(Info $info)
    {
        $info = DB::table('tindak_lanjut')->where("id_tanduklanjut",$info)->get();
        return view('pedagang.tindaklanjut', ['info' => $info]);
    }
}
