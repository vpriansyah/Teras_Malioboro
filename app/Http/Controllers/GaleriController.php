<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index()
    {
        $filter = Galeri::filter(request(['search', 'kat_dagangan', 'lokasi_teras', 'lokasi_gedung', 'lokasi_lantai']));
        $data_pkl = $filter->orderBy('nama_lengkap')->paginate(12)->withQueryString();
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $id_data = $filter->pluck("id");
        
        $fil_jenis= DB::table('kat_dagangan')->where("id","=",(request("kat_dagangan")))->pluck("nama")->first();
        $fil_kata = (request("search"));
        $fil_loc_t = DB::table('lokasi_teras')->where("id","=",(request("lokasi_teras")))->pluck("nama")->first();
        $fil_loc_g = DB::table('lokasi_gedung')->where("id","=",(request("lokasi_gedung")))->pluck("nama")->first();
        $fil_loc_l = DB::table('lokasi_lantai')->where("id","=",(request("lokasi_gedung")))->pluck("nama")->first();
        //dd($fil_loc);
        
        // return view('publik.galeri', compact('kat_brg','lokasi_teras','data_pkl','lokasi_kios','lokasi_lantai','lokasi_gedung'));
        //dd($id_data);

        //dd($data);
        return view('publik.galeri', compact(
        'data_pkl',
        'kat_brg',
        'lokasi_teras',
        'id_data',
        'fil_jenis',
        'fil_kata',
        'fil_loc_t',
        'fil_loc_g',
        'fil_loc_l'));
    }

    public function getgedung(Request $request)
    {
        $id_teras = $request->id_teras;
        $lokasi_gedung = DB::table('lokasi_gedung')->where('lokasi_teras_id', $id_teras)->get();

        if ($id_teras == 'TRUE') {
            echo "<select class='form-select' name='gedung' id='lokasi_gedung' disabled>";
            echo "<option value='TRUE'>Semua</option>";
            foreach ($lokasi_gedung as $gedung) {
                echo "<option value='$gedung->id'>$gedung->nama</option>";
            }
            echo "</select>";
        } else {
            echo "<select class='form-select' name='gedung' id='lokasi_gedung'>";
            echo "<option value='TRUE'>Semua</option>";
            foreach ($lokasi_gedung as $gedung) {
                echo "<option value='$gedung->id'>$gedung->nama</option>";
            }
            echo "</select>";
        }
    }

    public function getlantai(Request $request)
    {
        $id_gedung = $request->id_gedung;
        $lokasi_lantai = DB::table('lokasi_lantai')->where('lokasi_gedung_id', $id_gedung)->get();

        if ($id_gedung == 'TRUE') {
            echo "<select class='form-select' name='lantai' id='lokasi_lantai' disabled>";
            echo "<option value='TRUE'>Semua</option>";
            foreach ($lokasi_lantai as $lantai) {
                echo "<option value='$lantai->id'>$lantai->nama</option>";
            }
            echo "</select>";
        } else {
            echo "<select class='form-select' name='lantai' id='lokasi_lantai'>";
            echo "<option value='TRUE'>Semua</option>";
            foreach ($lokasi_lantai as $lantai) {
                echo "<option value='$lantai->id'>$lantai->nama</option>";
            }
            echo "</select>";
        }
    }


    
    public function data($id)
    {   
        $data_pkl = DB::table('data_pkl')->where("id",$id)->get();
//        dd($data_pkl);
        $barang = DB::table('barang')->where("id_pedagang", $id)->orderBy('barang')->get();
        //dd($barang);
        $linktree = DB::table('linktree')->where("id", $id)->get();
        //dd($linktree);
        $lokasi_no_kios = DB::table('data_pkl')
                ->join('lokasi_no_kios', 'lokasi_no_kios.id', '=', 'data_pkl.lokasi_no_kios_id')
                ->select('lokasi_no_kios.*')
                ->where('data_pkl.id','=',$id)
                ->first();
        $lokasi_lantai = DB::table('data_pkl')
                ->join('lokasi_lantai', 'lokasi_lantai.id', '=', 'data_pkl.lokasi_lantai_id')
                ->select('lokasi_lantai.*')
                ->where('data_pkl.id','=',$id)
                ->first();
        $lokasi_gedung = DB::table('data_pkl')
                ->join('lokasi_gedung', 'lokasi_gedung.id', '=', 'data_pkl.lokasi_gedung_id')
                ->select('lokasi_gedung.*')
                ->where('data_pkl.id','=',$id)
                ->first();
        $lokasi_teras = DB::table('data_pkl')
                ->join('lokasi_teras', 'lokasi_teras.id', '=', 'data_pkl.lokasi_teras_id')
                ->select('lokasi_teras.*')
                ->where('data_pkl.id','=',$id)
                ->first();
        $barang_dagangan = DB::table('barang')->where("id",$id)->get();

        //dd($lokasi_no_kios);
        return view('publik.galeri-data', compact('data_pkl', 'barang', 'linktree','lokasi_teras','lokasi_gedung','lokasi_lantai','lokasi_no_kios','barang_dagangan'));
    }

    public function barang($id)
    {
        $barang_dagangan = DB::table('barang')->where("id",$id)->get();

        return view('publik.galeri-data', compact('barang_dagangan'));
    }

    public function group($id)
    {
        $data_pkl = DB::table('data_pkl')->where('kat_dagangan_id', $id)->orderBy('nama_lengkap')->paginate(12);
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lokasi_kios = DB::table('lokasi_no_kios')->get();
        $lokasi_lantai = DB::table('lokasi_lantai')->get();
        $lokasi_gedung = DB::table('lokasi_gedung')->get();
        return view('publik.galeri', compact('kat_brg', 'lokasi_teras', 'data_pkl', 'lokasi_kios', 'lokasi_lantai', 'lokasi_gedung'));
    }

    public function cari(Request $request)
    {
        $data['q'] = $request->query('search');
        $dagangan = DB::table('data_pkl')->where('dagangan', 'like', '%' . $data["q"] . '%');
        $data_pkl = DB::table('data_pkl')->where('nama_lengkap', 'like', '%' . $data["q"] . '%')->union($dagangan)->orderBy('nama_lengkap')->paginate(12);
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lokasi_kios = DB::table('lokasi_no_kios')->get();
        $lokasi_lantai = DB::table('lokasi_lantai')->get();
        $lokasi_gedung = DB::table('lokasi_gedung')->get();
        // return view('publik.galeri', compact('kat_brg','lokasi_teras','data_pkl','lokasi_kios','lokasi_lantai','lokasi_gedung'));
        return view('publik.galeri', [
            'data_pkl' => $data_pkl,
            'kat_brg' => $kat_brg,
            'lokasi_teras' => $lokasi_teras,
            'lokasi_gedung' => $lokasi_gedung,
            'lokasi_lantai' => $lokasi_lantai,
            'lokasi_kios' => $lokasi_kios
        ]);
    }
}
