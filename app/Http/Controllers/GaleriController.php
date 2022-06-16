<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index()
    {
        $data['q'] = null;
        $data_pkl = DB::table('data_pkl')
        ->join ('lokasi_gedung', 'lokasi_gedung.id','=','data_pkl.lokasi_gedung_id')
        ->join ('lokasi_lantai', 'lokasi_lantai.id','=','data_pkl.lokasi_lantai_id')
        ->select('data_pkl.*')
        ->paginate(12);
        $req = $data['q'];
        $kat_brg = DB::table('kat_dagangan')->get();
        $current = null;
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lantai_sekarang = DB::table('lokasi_lantai')->first();
        $gedung_sekarang = DB::table('lokasi_gedung')->first();
        $teras_sekarang = DB::table('lokasi_teras')->first();
//        dd($lokasi_teras);
        return view('publik.galeri', compact('lantai_sekarang','gedung_sekarang','teras_sekarang','req','current','kat_brg','lokasi_teras','data_pkl'));
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

    public function barang($id2)
    {
        $barang_dagangan = DB::table('barang')->where("id",$id)->get();

        return view('publik.galeri-data', compact('barang_dagangan'));
    }

    public function group($id)
    {
        $data['q'] = null;
        $req = $data['q'];
        $data_pkl = DB::table('data_pkl')
        ->join ('kat_dagangan', 'kat_dagangan.id','=','data_pkl.kat_dagangan_id')
        ->join ('lokasi_gedung', 'lokasi_gedung.id','=','data_pkl.lokasi_gedung_id')
        ->join ('lokasi_lantai', 'lokasi_lantai.id','=','data_pkl.lokasi_lantai_id')
        ->join ('lokasi_teras', 'lokasi_teras.id','=','data_pkl.lokasi_teras_id')
        ->select('data_pkl.*')
        ->where('kat_dagangan.nama','=', $id)
        ->orWhere('lokasi_teras.nama','=',$id)
        ->paginate(12);
        //$data_pkl = [$data, $teras, $gedung, $lantai];
        $current = $id;
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lokasi_lantai = DB::table('lokasi_lantai')->get();
        $lokasi_gedung = DB::table('lokasi_gedung')->get();
        $teras_sekarang = DB::table('lokasi_teras')->first();
        $lantai_sekarang = DB::table('lokasi_lantai')->first();
        $gedung_sekarang = DB::table('lokasi_gedung')->first();
        return view('publik.galeri', compact('lantai_sekarang','gedung_sekarang','teras_sekarang','req','current','kat_brg','lokasi_teras','data_pkl','lokasi_lantai','lokasi_gedung','teras_sekarang'));
    }

    public function group2($id2)
    {
        $data['q'] = null;
        $req = $data['q'];
        $data_pkl = DB::table('data_pkl')
        ->join ('kat_dagangan', 'kat_dagangan.id','=','data_pkl.kat_dagangan_id')
        ->join ('lokasi_gedung', 'lokasi_gedung.id','=','data_pkl.lokasi_gedung_id')
        ->join ('lokasi_lantai', 'lokasi_lantai.id','=','data_pkl.lokasi_lantai_id')
        ->select('data_pkl.*')
        ->where('nama_lengkap', $id)
        ->orWhere('lokasi_teras_id',$id)
        ->paginate(12);
        //$data_pkl = [$data, $teras, $gedung, $lantai];
        $current = $id;
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lantai_sekarang = DB::table('lokasi_lantai')->first();
        $gedung_sekarang = DB::table('lokasi_gedung')->first();
        $teras_sekarang = DB::table('lokasi_teras')->first();
        return view('publik.galeri', compact('teras_sekarang','req','current','kat_brg','lokasi_teras','data_pkl','lokasi_lantai','lokasi_gedung'));
    }

    public function cari(Request $request)
    {
        $current = null;
        $data['q'] = $request->query('search');
        $dagangan = DB::table('data_pkl')-> where('dagangan','like','%'. $data["q"] .'%'); 
        $data_pkl = DB::table('data_pkl')
        ->where('nama_lengkap','like','%'. $data["q"] .'%')
        ->union($dagangan)->paginate(12);
        $req = $data['q'];
        $kat_brg = DB::table('kat_dagangan')->get();
        $lokasi_teras = DB::table('lokasi_teras')->get();
        $lantai_sekarang = DB::table('lokasi_lantai')->first();
        $gedung_sekarang = DB::table('lokasi_gedung')->first();
        $teras_sekarang = DB::table('lokasi_teras')->first();
        return view('publik.galeri', compact('teras_sekarang','gedung_sekarang','lantai_sekarang','req','current','kat_brg','lokasi_teras','data_pkl'));        
    }
}
