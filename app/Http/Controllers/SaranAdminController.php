<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SaranAdmin;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class SaranAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saran = DB::table('saran')
            ->join('data_pkl', 'saran.pedagang_id', '=', 'data_pkl.id')
            ->join('kat_aduan', 'saran.kategori_id', '=', 'kat_aduan.id')
            ->get();
        // $feedback = DB::table('feedback_saran_pedagang')
        //     ->join('feedback_saran_pedagang', 'feedback_saran_pedagang.saran_id', '=', 'saran.id_saran')
        //     ->get();
        return view('admin.saran', ['saran' => $saran]);
    }

    public function simpan(Request $request)
    {
        $validateData = $request->validate([
            'saran_id' => 'required',
            'isi_feedback' => 'required',
        ]);
        Feedback::create($validateData);
        return redirect('/admin/saran');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $saran = SaranAdmin::find($id);
        return view('saranadmin.edit', compact('saran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $this->validate($request, [
        //     'feedback' => 'required',
        // ]);

        // $saran = SaranAdmin::where('id', $request->id);
        // $saran->update([
        //     'feedback' => $request->feedback
        // ]);

        // if ($saran) {
        //     return redirect()
        //         ->route('admin.saran')
        //         ->with([
        //             Alert::success('Berhasil', 'Artikel Berhasil Diubah')
        //         ]);
        // } else {
        //     return redirect()
        //         ->back()
        //         ->withInput()
        //         ->with([
        //             Alert::error('Gagal', 'Artikel Gagal Diubah')
        //         ]);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}