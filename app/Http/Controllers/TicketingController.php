<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TicketingController extends Controller
{
    public function index()
    {
        $saran = DB::table('FAQ')->paginate(5);
        return view('pedagang.saran', ['FAQ' => $saran]);
    }
}
