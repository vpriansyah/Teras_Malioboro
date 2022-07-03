<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    use HasFactory;

    protected $table = "saran";
    protected $primaryKey = 'id_saran';
    protected $fillable = [
        'pedagang_id', 'jenis_aduan', 'kategori_id', 'saran_aduan', 'status',
    ];

    public function Feedback()
    {
        return $this->hasOne(FeedbackPedagang::class);
    }

    public function Pedagang()
    {
        return $this->belongsTo(Profil::class);
    }
}
