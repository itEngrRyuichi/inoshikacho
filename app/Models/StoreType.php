<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreType extends Model
{
    protected $fillable=['name',];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
