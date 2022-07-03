<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $table = 'operator';

    public function FAQ()
    {
        return $this->hasMany(FAQ::class);
    }

    public function Feedback()
    {
        return $this->hasMany(FeedbackPedagang::class);
    }
}
