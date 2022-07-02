<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TindakLanjutAdmin extends Model
{
    use HasFactory;
    protected $table = 'tindak_lanjut';
    protected $primaryKey = 'id_tindaklanjut';
    protected $fillable = [
        'Judul', 'Deskripsi', 'Foto'
    ];
}
