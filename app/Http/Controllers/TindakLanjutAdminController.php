<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TindakLanjutAdmin;

class TindakLanjutAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tindaklanjut = DB::table('tindak_lanjut')
            ->get();
        return view('admin.tindaklanjut', ['tindaklanjut' => $tindaklanjut]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'Judul' => 'required',
            'Deskripsi' => 'required',
            'Foto' => 'required',
        ]);
        $validateData['Foto'] = $request->file('Foto')->store('post-images');
        TindakLanjutAdmin::create($validateData);
        return redirect('/admin/tindaklanjut');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tindaklanjut)
    {
        $update_tl = TindakLanjutAdmin::find($id_tindaklanjut);

        $update_tl->Judul = $request->updateJudul;
        $update_tl->Deskripsi = $request->updateDeskripsi;
        $update_tl->save();
        return redirect('/admin/tindaklanjut');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tindaklanjut)
    {
        TindakLanjutAdmin::where('id_tindaklanjut', $id_tindaklanjut)->delete();
        return redirect()->route('admintindaklanjut');
    }
}
