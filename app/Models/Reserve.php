<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable=['user_id','store_id','plan_id','room_id','check_in','check_out'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    public function plans()
    {
        return $this->hasMany(Plan::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
    public function people()
    {
        return $this->hasMany(People::class);
    }
}
