<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TindakLanjutController extends Controller
{    
    public function index(Request $request)
    {
        $tindak_lanjut = DB::table('tindak_lanjut')->paginate(2);
        return view('tindak.lanjut', ['tindak_lanjut' => $tindak_lanjut]);
    }

    public function search(Request $request)
    {
        $search = DB::table('tindak_lanjut')->where('judul', 'like', "%" . $request->search . "%")->paginate(2);
        return view('tindak.lanjut', ['tindak_lanjut' => $search]);
    }
}
