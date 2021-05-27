<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provide extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
}
