<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    public function reserves()
    {
        return $this->belongsTo(Reserve::class);
    }
}
