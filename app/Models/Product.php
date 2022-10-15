<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sub_Category;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function order() //type casting
    {
        return $this->belongsTo(Order::class,'item_id','id');
    }
    public function category() //type casting
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function sub_category() //type casting
    {
        return $this->belongsTo(Sub_Category::class,'sub_category_id','id');
    }
}
