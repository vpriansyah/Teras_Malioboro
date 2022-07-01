<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback_saran_pedagang';
    protected $fillable = [
        'saran_id', 'isi_feedback'
    ];
}
