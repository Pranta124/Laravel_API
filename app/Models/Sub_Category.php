<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function product() //type casting
    {
        return $this->hasOne(Product::class,'sub_category_id ','id');
    }
}
