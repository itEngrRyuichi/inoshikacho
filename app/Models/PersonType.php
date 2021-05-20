<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonType extends Model
{
    use HasFactory;

    public function people()
    {
        return $this->belongsTo(People::class);
    }

    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    protected $fillable = ['person_type'];
}
