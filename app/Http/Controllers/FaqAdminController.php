<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\FAQ;
use RealRashid\SweetAlert\Facades\Alert;

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

    public function update(Request $request, $id_faq)
    {
        $update_faq = FAQ::find($id_faq);

        $update_faq->subject = $request->updateSubject;
        $update_faq->jawaban = $request->updateJawaban;
        $update_faq->id_operator = $request->updateIdOperator;
        $update_faq->status = $request->updateStatus;
        $update_faq->save();
        return redirect('/admin/faq');
    }

    public function hapus($id_faq)
    {
        FAQ::where('id_faq', $id_faq)->delete();

        return redirect()->route('adminfaq');
    }
}
