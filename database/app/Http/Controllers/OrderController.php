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

    // public function order()
    // {
    //     // $result=Order::with('locations')->select('id','item_type','location_id','tradable','user_id','status','is_active','locations.country')->orderBy('id', 'DESC')->get();
    //     $result=Order::with(['location','added_by','files','files.file'])->orderBy('id', 'DESC')->get();
    //     // dd($result);
    //     return response()->json([
    //         'result' => $result
    //         ]);
    // }
}
