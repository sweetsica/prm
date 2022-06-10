<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function historyGiftExchange(Request $request){
        //hàm trả về lịch sử đổi quà
        try{
            $userInfo = $request->user();
            $order =  Order::where("customer_id",$userInfo->id)->with("gift")->get();
            return response()->json([
                "order"=>$order
            ], 200);
        }catch (\Exception $e){
            return response()->json([
                "error"=>$e
            ], 500);
        }

    }
}
