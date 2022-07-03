<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kat_aduan extends Model
{
    use HasFactory;

    protected $table = 'kat_aduan';
    protected $fillable = [
        'jenis', 'status'
    ];
}
