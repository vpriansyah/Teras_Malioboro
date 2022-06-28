<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'data_pkl';
    protected $fillable = [
        'nama_lengkap','no_hp','alamat_ktp','paguyuban_id','nik','no_kk','nomor_nib', 'updated_at'
    ];

    public function Barang()
    {
        return $this->hasMany(App\Models\Profil::class);
    }
    
}