<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cctv;

class CctvController extends Controller
{
    public function index()
    {
        $cctv = DB::table('cctv')->where('id', 4)->get();
        return view('publik.cctv', ['cctv' => $cctv]);
    }

}