<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreType extends Model
{
    protected $fillable=['store_type_name'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
