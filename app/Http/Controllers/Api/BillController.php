<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function userBill(Request $request){
        try{
            $userInfo = $request->user();
            $histories = History::where('customer_id',$userInfo->id)->get();
            return response()->json([
                "user"=>$userInfo,
                "history"=>$histories
            ],200);
        }catch (\Exception $e){
            return response()->json([
                "error"=>$e
            ],500);
        }
    }
}
