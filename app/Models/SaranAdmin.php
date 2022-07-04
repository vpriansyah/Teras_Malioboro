<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranAdmin extends Model
{
    use HasFactory;
    protected $table = "saran";
    protected $fillable = [
        'nama', 'jenis', 'id_kategori', 'saran_aduan', 'status', 'feedback'
    ];
    protected $guarded = [
        'id'
    ];
}