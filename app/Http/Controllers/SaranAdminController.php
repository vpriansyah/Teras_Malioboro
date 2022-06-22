<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SaranAdmin;

class SaranAdminController extends Controller
{
    public function index()
    {
        $saran = DB::table('saran')
            ->get();

        return view('admin.saran', ['saran' => $saran]);
    }
}
