<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang_pedagang';
    protected $fillable = [
        'barang','gambar','id_pedagang'
    ];

    public function Profil()
    {
        return $this->belongsTo(App\Models\Profil::class);
    }

}