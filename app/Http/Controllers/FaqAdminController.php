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

    public function update(Request $request)
    {
        $this->validate($request, [

            'subject' => 'required',
            'jawaban' => 'required',
            'id_operator' => 'required',
            'status' => 'required',
        ]);

        $faq = FAQ::where('id', $request->id);
        $faq->update([
            'subject' => $request->subject,
            'jawaban' => $request->jawaban,
            'id_operator' => $request->id_operator,
            'status' => $request->status,
        ]);

        if ($faq) {
            return redirect()
                ->route('pedagang.profil')
                ->with([
                    Alert::success('Berhasil', 'Artikel Berhasil Diubah')
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    Alert::error('Gagal', 'Artikel Gagal Diubah')
                ]);
        }
    }

    public function hapus($id_faq)
    {
        FAQ::where('id_faq', $id_faq)->delete();

        return redirect()->route('adminfaq');
    }
}
