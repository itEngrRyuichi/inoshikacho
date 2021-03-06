<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable=['user_id','provide_id','check_in','check_out'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function provides()
    {
        return $this->hasMany(Provide::class);
    }
    public function peoples()
    {
        return $this->hasMany(People::class);
    }
    protected $dates = [
        'check_in', 'check_out'
    ];
}
