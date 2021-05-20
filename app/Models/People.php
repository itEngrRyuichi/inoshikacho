<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public function person_type()
    {
        return $this->belongsTo(Person_type::class);
    }

    public function reserve()
    {
        return $this->belongsTo(Reserve::class);
    }

}
