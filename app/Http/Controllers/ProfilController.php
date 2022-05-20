<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $data_pkl = DB::table('data_pkl')->where('id', 1)->get();
        return view('pedagang.profil', ['data_pkl' => $data_pkl]);
    }
}
