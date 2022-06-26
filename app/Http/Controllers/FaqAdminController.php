<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\FAQ;

class FaqAdminController extends Controller
{
    public function index()
    {
        $faq = DB::table('FAQ')
            ->join('operator', 'FAQ.id_operator', '=', 'operator.id')
            ->paginate(15);
        $operator = DB::table('operator')
            ->where('nik',  '=', Auth::user()->name)
            ->get();
        return view('admin.faq', ['faq' => $faq, 'operator' => $operator]);
    }

    public function simpan(Request $request)
    {
        $validateData = $request->validate([
            'subject' => 'required',
            'jawaban' => 'required',
            'id_operator' => 'required',
            'status' => 'required',
        ]);

        FAQ::create($validateData);
        return redirect('/admin/faq');
    }
}
