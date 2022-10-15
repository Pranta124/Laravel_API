<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function location() //type casting
    {
        return $this->belongsTo(Location::class,'location_id','id');
    }
    public function added_by() //type casting
    {
        return $this->belongsTo(Employee::class,'user_id','id');
    }
    public function files() //type casting
    {
        return $this->hasMany(File::class,'item_id','id');
    }
    public function product() //type casting
    {
        return $this->hasOne(Product::class,'item_id','id');
    }

}
