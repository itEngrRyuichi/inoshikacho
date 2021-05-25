<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = ['plan_name'];

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    public function reserve()
    {
        return $this->belongsTo(Reserve::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

}
