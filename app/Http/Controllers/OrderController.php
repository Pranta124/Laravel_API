<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        $result=OrderResource::collection(Order::with(['location','added_by','files','files.file','product','product.category','product.sub_category'])->orderBy('id', 'DESC')->get());
        return response()->json([
            'result' => $result
            ]);
    }


}
