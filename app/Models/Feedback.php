<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback_saran_pedagang';
    protected $primaryKey = 'id_feedback';
    protected $fillable = [
        'saran_id', 'isi_feedback', 'operator_id', 'id_pedagang'
    ];

    public function Saran()
    {
        return $this->hasOne(Saran::class);
    }

    public function Operator()
    {
        return $this->belongsTo(Operator::class);
    }
}