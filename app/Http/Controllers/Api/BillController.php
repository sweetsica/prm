<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function userBill(Request $request){

        //hàm trả về danh sách lịch sử quét mã
        try{
            $userInfo = $request->user();
            $histories = History::where('customer_id',$userInfo->id)->get();
            return response()->json([
                "history"=>$histories
            ],200);
        }catch (\Exception $e){
            return response()->json([
                "error"=>$e
            ],500);
        }
    }
}
