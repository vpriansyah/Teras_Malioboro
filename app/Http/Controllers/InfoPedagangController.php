<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoPedagangController extends Controller
{    
    public function index(Request $request)
    {

        if($request->query('search')){
           $info_penting_pedagang = DB::table('info_penting_pedagang')->where('judul', 'like', '%' . '$request->search' . '%')->paginate(2);
        }else{
            $info_penting_pedagang = DB::table('info_penting_pedagang')->paginate(2);
        }

        return view('pedagang.informasi', ['info_penting_pedagang' => $info_penting_pedagang]);
    }
}