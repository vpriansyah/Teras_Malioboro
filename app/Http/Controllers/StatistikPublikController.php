<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatistikPublikController extends Controller
{
    public function index()
    {
        $data['laki'] = DB::table('data_pkl')->where('gender', 'L')->get();
        $data['perempuan'] = DB::table('data_pkl')->where('gender', 'P')->get();

        return view('publik.statistik', ['data' => $data]);
    }
}
