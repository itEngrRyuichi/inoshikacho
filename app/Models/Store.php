<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable=['store_name','postal','address','phone','store_type_id','area_id'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function reserves()
    {
        return $this->hasMany(Reserve::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function storeType()
    {
        return $this->belongsTo(StoreType::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
