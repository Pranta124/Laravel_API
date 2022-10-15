<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function order() //type casting
    {
        return $this->hasOne(Order::class,'location_id','id');
    }

}
