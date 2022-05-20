<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'users';

    public function Profil()
    {
        return $this->hasMany(Profil::class);
    }
}
