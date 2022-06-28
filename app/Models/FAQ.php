<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $table = 'FAQ';
    protected $primaryKey = 'id_faq';
    protected $fillable = [
        'subject', 'jawaban', 'id_operator', 'status'
    ];

    public function operator()
    {
        return $this->belongsTo(App\Models\Operator::class);
    }
}
