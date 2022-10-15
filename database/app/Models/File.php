<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function order() //type casting
    {
        return $this->belongsTo(Order::class,'item_id','id');
    }
    public function file() //type casting
    {
        return $this->belongsTo(SingleFile::class,'file_id','id');
    }
}
