<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'data_pkl';

    public function Pengguna()
    {
        return $this->belongsTo(Pengguna::class);
    }
}
