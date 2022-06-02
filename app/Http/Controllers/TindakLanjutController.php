<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TindakLanjut extends Controller
{    
    public function index(Request $request)
    {
        $tindak_lanjut = TindakLanjut::table('tindak_lanjut')->paginate(2);
        return view('tindak.lanjut', ['tindak_lanjut' => $tindak_lanjut]);
    }

    public function search(Request $request)
    {
        if($request->has('search')) {
            $search = TindakLanjut::where('judul', 'like', "%" .$request->search. "%")->get();
        }
        else {
            $search = TindakLanjut::all();
        }
        return view('tindak.lanjut', ['TindakLanjut' => $search]);
    }
}