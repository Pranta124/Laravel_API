<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function product() //type casting
    {
        return $this->hasOne(Product::class,'category_id','id');
    }
}
