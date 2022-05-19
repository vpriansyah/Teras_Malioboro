<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Galeri2Controller extends Controller
{
    public function index()
    {
        $data_pkl = Galeri::filter(request(['search', 'kat_dagangan']))->paginate(12);
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lokasi_kios = DB::table('lokasi_no_kios')->get();
        $lokasi_lantai = DB::table('lokasi_lantai')->get();
        $lokasi_gedung = DB::table('lokasi_gedung')->get();

            //    dd($data_pkl);
        // return view('publik.galeri2', compact('kat_brg','lokasi_teras','data_pkl','lokasi_kios','lokasi_lantai','lokasi_gedung'));

        return view('publik.galeri2', [
            'data_pkl' => $data_pkl,
            'kat_brg' => $kat_brg,
            'lokasi_teras' => $lokasi_teras,
            'lokasi_gedung' => $lokasi_gedung,
            'lokasi_lantai' => $lokasi_lantai,
            'lokasi_kios' => $lokasi_kios
        ]);
    }

    public function data($id)
    {
        $data_pkl = DB::table('data_pkl')->where("id", $id)->get();
        //        dd($data_pkl);
        $lokasi_no_kios = DB::table('data_pkl')
            ->join('lokasi_no_kios', 'lokasi_no_kios.id', '=', 'data_pkl.lokasi_no_kios_id')
            ->select('lokasi_no_kios.*')
            ->get();
        return view('publik.galeri-data', ['data_pkl' => $data_pkl], ['lokasi_no_kios' => $lokasi_no_kios]);
    }

    public function group($id)
    {
        $data_pkl = DB::table('data_pkl')->where('kat_dagangan_id', $id)->paginate(12);
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lokasi_kios = DB::table('lokasi_no_kios')->get();
        $lokasi_lantai = DB::table('lokasi_lantai')->get();
        $lokasi_gedung = DB::table('lokasi_gedung')->get();
        return view('publik.galeri2', compact('kat_brg', 'lokasi_teras', 'data_pkl', 'lokasi_kios', 'lokasi_lantai', 'lokasi_gedung'));
    }

    public function cari(Request $request)
    {
        $data['q'] = $request->query('search');
        $dagangan = DB::table('data_pkl')->where('dagangan', 'like', '%' . $data["q"] . '%');
        $data_pkl = DB::table('data_pkl')->where('nama_lengkap', 'like', '%' . $data["q"] . '%')->union($dagangan)->paginate(12);
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lokasi_kios = DB::table('lokasi_no_kios')->get();
        $lokasi_lantai = DB::table('lokasi_lantai')->get();
        $lokasi_gedung = DB::table('lokasi_gedung')->get();
        // return view('publik.galeri2', compact('kat_brg','lokasi_teras','data_pkl','lokasi_kios','lokasi_lantai','lokasi_gedung'));
        return view('publik.galeri2', [
            'data_pkl' => $data_pkl,
            'kat_brg' => $kat_brg,
            'lokasi_teras' => $lokasi_teras,
            'lokasi_gedung' => $lokasi_gedung,
            'lokasi_lantai' => $lokasi_lantai,
            'lokasi_kios' => $lokasi_kios
        ]);
    }
}
