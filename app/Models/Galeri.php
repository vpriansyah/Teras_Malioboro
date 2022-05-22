<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'data_pkl';

    public function scopeFilter($query, array $filters)
    {
        // if (request('search')) {
        //     return $query->where('dagangan', 'like', '%' . request('search') . '%')
        //         ->orWhere('nama_lengkap', 'like', '%' . request('search') . '%');
        // }

        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('dagangan', 'like', '%' . $filters['search'] . '%')
        //         ->orWhere('nama_lengkap', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('dagangan', 'like', '%' . $search . '%')
                ->orWhere('nama_lengkap', 'like', '%' . $search . '%');
        });

        $query->when($filters['kat_dagangan'] ?? false, function ($query, $kat_dagangan) {
            return $query->whereHas('kat_dagangan', function ($query) use ($kat_dagangan) {
                if($kat_dagangan == 0) {
                    $query->where('kat_dagangan_id', TRUE);
                } else {
                    $query->where('kat_dagangan_id', $kat_dagangan);
                }
            });
        });

        $query->when($filters['lokasi_teras'] ?? false, function ($query, $lokasi_teras) {
            return $query->whereHas('lokasi_teras', function ($query) use ($lokasi_teras) {
                if($lokasi_teras == 0) {
                    $query->where('lokasi_teras_id', TRUE);
                } else {
                    $query->where('lokasi_teras_id', $lokasi_teras);
                }
            });
        });

        $query->when($filters['lokasi_gedung'] ?? false, function ($query, $lokasi_gedung) {
            return $query->whereHas('lokasi_gedung', function ($query) use ($lokasi_gedung) {
                if($lokasi_gedung == 0) {
                    $query->where('lokasi_gedung_id', TRUE);
                } else {
                    $query->where('lokasi_gedung_id', $lokasi_gedung);
                }
            });
        });

        $query->when($filters['lokasi_lantai'] ?? false, function ($query, $lokasi_lantai) {
            return $query->whereHas('lokasi_gedung', function ($query) use ($lokasi_lantai) {
                if($lokasi_lantai == 0) {
                    $query->where('lokasi_lantai_id', TRUE);
                } else {
                    $query->where('lokasi_lantai_id', $lokasi_lantai);
                }
            });
        });
    }

    public function kat_dagangan()
    {
        return $this->belongsTo(Kat_dagangan::class);
    }

    public function lokasi_teras()
    {
        return $this->belongsTo(Lokasi_teras::class);
    }

    public function lokasi_gedung()
    {
        return $this->belongsTo(Lokasi_gedung::class);
    }

    public function lokasi_lantai()
    {
        return $this->belongsTo(Lokasi_lantai::class);
    }
}
