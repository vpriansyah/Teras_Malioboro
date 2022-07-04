<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JawabanPublik;
use App\Models\AduanSaranPublik;
 
class PublikAdminController extends Controller
{
 
    public function aduansaran()
    {   
        $aduan_saran = DB::table('aduan_saran_publik')->select('id')->get()->toArray();
        // dd($aduan_saran);

        $id_jawaban = DB::table('jawaban_publik')->select('id_aduan_saran')->get()->toArray();
        foreach ($id_jawaban as $jawaban) {
                    $data[] = $jawaban->id_aduan_saran;
                }

        $aduan_saran_publik = DB::table('aduan_saran_publik')->where('aduan_saran_publik.jenis', 'public')->where('tampil', 'false')
            ->join('kat_aduan', 'kat_aduan.id', '=', 'aduan_saran_publik.kategori')
            // ->leftJoin('jawaban_publik', 'jawaban_publik.id_aduan_saran', '=', 'aduan_saran_publik.id')
            ->select('aduan_saran_publik.*', 'kat_aduan.jenis')
            ->whereNotIn('aduan_saran_publik.id', $data)
            ->orderBy('aduan_saran_publik.id', 'DESC')
            ->paginate(
                $perPage = 5, $columns = ['*'], $pageName = 'publik'
            );

        $aduan_saran_privat = DB::table('aduan_saran_publik')->where('aduan_saran_publik.jenis', 'private')->where('tampil', 'false')
            ->join('kat_aduan', 'kat_aduan.id', '=', 'aduan_saran_publik.kategori')
            // ->join('jawaban_publik', 'jawaban_publik.id_aduan_saran', '=', 'aduan_saran_publik.id')
            ->select('aduan_saran_publik.*', 'kat_aduan.jenis')
            ->orderBy('aduan_saran_publik.id', 'DESC')
            ->paginate(
                $perPage = 5, $columns = ['*'], $pageName = 'privat'
            );

        // dd($aduan_saran_publik, $aduan_saran_privat);

        foreach ($aduan_saran as $as) {
            $data[$as->id] = DB::table('aduan_saran_publik')->where('id', $as->id)->get();
        }
        // dd($data);

    	return view('admin.aspublik', [
            'as_publik' => $aduan_saran_publik,
            'as_privat' => $aduan_saran_privat,
            'data'      => $data,
        ]);
    }

    public function jawabanpublik()
    {
        $aduan_saran_tampil = DB::table('aduan_saran_publik')->where('aduan_saran_publik.jenis', 'public')->where('tampil', 'true')
            ->join('kat_aduan', 'kat_aduan.id', '=', 'aduan_saran_publik.kategori')
            ->join('jawaban_publik', 'jawaban_publik.id_aduan_saran', '=', 'aduan_saran_publik.id')
            ->select('jawaban_publik.*', 'kat_aduan.jenis', 'aduan_saran_publik.nama', 'aduan_saran_publik.email', 'aduan_saran_publik.no_hp', 'aduan_saran_publik.saran_aduan', 'aduan_saran_publik.tampil')
            ->orderBy('aduan_saran_publik.id', 'DESC')
            ->paginate(
                $perPage = 5, $columns = ['*'], $pageName = 'tampil'
            );

        $jawaban_publik = DB::table('jawaban_publik')
            ->join('aduan_saran_publik', 'aduan_saran_publik.id', '=', 'jawaban_publik.id_aduan_saran')
            ->join('kat_aduan', 'kat_aduan.id', '=', 'aduan_saran_publik.kategori')
            ->where('aduan_saran_publik.jenis', 'public')->where('tampil', 'false')
            ->select('jawaban_publik.*', 'kat_aduan.jenis', 'aduan_saran_publik.nama', 'aduan_saran_publik.email', 'aduan_saran_publik.no_hp', 'aduan_saran_publik.saran_aduan', 'aduan_saran_publik.tampil')
            ->orderBy('aduan_saran_publik.id', 'DESC')
            ->paginate(
                $perPage = 5, $columns = ['*'], $pageName = 'jawaban'
            );

        // dd($aduan_saran_tampil);

        return view('admin.jawabanpublik', [
            'as_tampil' => $aduan_saran_tampil,
            'jawaban_publik' => $jawaban_publik,
        ]);
    }

    public function tambah_jawaban(Request $request)
    {
        $this->validate($request, [
            'jawaban'      =>  'required',
        ]);

        JawabanPublik::Create([
            'id_aduan_saran'    =>  $request->id_aduan_saran,
            'id_users'          =>  $request->id_users,
            'jawaban'           =>  $request->jawaban,
        ]);
        
        return redirect('admin/aduansaranpublik')->with('success', 'Aduan & Saran telah dijawab!');
    }

    public function ubah_jawaban(Request $request, $id)
    {
        $this->validate($request, [
            'jawaban'      =>  'required',
        ]);

        $jawaban_publik             = JawabanPublik::find($id);
        $jawaban_publik->jawaban     = $request->jawaban;
        $jawaban_publik->save();
        
        return redirect('admin/jawabanpublik')->with('success', 'Jawaban Aduan & Saran telah diubah!');
    }

    public function tampilkan($id)
    {
        $as_publik          = AduanSaranPublik::find($id);
        $as_publik->tampil  = 'true';
        $as_publik->save();
        
        return redirect('admin/jawabanpublik')->with('success', 'Aduan & Saran telah ditampilkan!');
    }

    public function sembunyikan($id)
    {
        $as_publik          = AduanSaranPublik::find($id);
        $as_publik->tampil  = 'false';
        $as_publik->save();
        
        return redirect('admin/jawabanpublik')->with('success', 'Aduan & Saran telah disembunyikan!');
    }

    public function hapus_jawaban($id)
    {
        JawabanPublik::where('id', $id)->delete();

        return redirect('admin/jawabanpublik')->with('success', 'Jawaban Aduan & Saran berhasil dihapus!');
    }
}