<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable=['room_name','capacity','store_id','amenity_id'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function amenities()
    {
        return $this->hasMany(Amenity::class);
    }
    public function reserve()
    {
        return $this->belongsTo(Reserve::class);
    }
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    public function provides()
    {
        return $this->hasMany(Provide::class);
    }
}
