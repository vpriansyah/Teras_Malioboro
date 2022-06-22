<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'FAQ';
    protected $primaryKey = 'id_faq';
    protected $fillable = [
        'subject', 'jawaban', 'id_operator', 'status'
    ];
}
