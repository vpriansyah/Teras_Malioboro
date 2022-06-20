<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoPedagangController extends Controller
{
    public function index()
    {
        $info_penting_pedagang = DB::table('info_penting_pedagang')->paginate(2);
        return view('pedagang.informasi', ['info_penting_pedagang' => $info_penting_pedagang]);
    }

    public function search(Request $request)
    {
        $search = DB::table('info_penting_pedagang')->where('judul', 'like', "%" . $request->search . "%")->paginate(2);
        return view('pedagang.informasi', ['info_penting_pedagang' => $search]);
    }

    public function readmore(Info $info)
    {
        $info = DB::table('info_penting_pedagang')->where("id", $info)->get();
        return view('pedagang.informasi.readmore-info.{{$info->id}}', compact('info'));
    }
}
