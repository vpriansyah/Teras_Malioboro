<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function index()
    {
        $data_pkl = DB::table('data_pkl')->get();
        return view('pedagang.profil', ['data_pkl' => $data_pkl]);
    }
}