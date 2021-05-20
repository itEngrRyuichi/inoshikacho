<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable=['person_type_id','plan_id','price'];

    public function person_type()
    {
        return $this->belongsTo(Person_type::class);
    }
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
