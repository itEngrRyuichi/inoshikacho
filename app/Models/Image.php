<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    protected $fillable = ['url'];
}
