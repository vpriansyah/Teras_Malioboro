<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanPublik extends Model
{
    use HasFactory;
    protected $table = 'jawaban_publik';
    protected $guarded = ['id'];
    public $timestamps = false;
    // protected  $primaryKey = 'id';
    // protected $fillable = [

    // ];

}
