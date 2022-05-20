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
                $query->where('kat_dagangan_id', $kat_dagangan);
            });
        });
    }

    public function kat_dagangan()
    {
        return $this->belongsTo(Kat_dagangan::class);
    }
}
