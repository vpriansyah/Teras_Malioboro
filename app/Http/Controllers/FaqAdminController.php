<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqAdminController extends Controller
{
    public function index()
    {
        $faq = DB::table('FAQ')
            ->join('operator', 'FAQ.id_operator', '=', 'operator.id')
            ->get();
        return view('admin.faq', ['faq' => $faq]);
    }
}
