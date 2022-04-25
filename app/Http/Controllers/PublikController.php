<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublikController extends Controller
{
    public function index()
    {
        $info_penting = DB::table('info')->where('status', 'Aktif')->get();
        return view('publik.index', ['info_penting' => $info_penting]);
    }
}
