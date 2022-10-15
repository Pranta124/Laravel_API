<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function order() //type casting
    {
        return $this->hasOne(Order::class,'user_id','id');
    }
}
