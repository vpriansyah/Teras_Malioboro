<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index()
    {
        $saran = DB::table('FAQ')->get();
        return view('pedagang.saran', ['saran' => $saran]);
    }
}
