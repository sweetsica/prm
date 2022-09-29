<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\History;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\QR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScanQRController extends Controller
{
    //
    public function scanQR(Request $request,$promotion_id, $product_id, $special_code){
        $user = $request->user();
        DB::beginTransaction();
        try{
            if($user == null){
                return response()->json([
                    "status_code"=>404,
                    "error" => "Vui lòng đăng nhập"
                ], 404);
            }else{
                $promotion_infomation = QR::where('promotion_id', $promotion_id)->where('product_id', $product_id)->firstOrFail();
                $productInfo = Product::where('id', $promotion_infomation->product_id)->firstOrFail();
                if($promotion_infomation != null){
                    $promotionPointBonus = Promotion::where('id', $promotion_infomation->promotion_id)->first()->valueSale;
                    $qrs = QR::where('specialCode', $special_code)->firstOrFail();
                    if($qrs->status == 1){
                        $qrs->status = 0;
                        $qrs->save();
                        $user['summaryPoint'] = $user['summaryPoint'] + $promotionPointBonus;
                        $user['totalPoint'] = $user['totalPoint'] + $promotionPointBonus;
                        $user['lastPoint'] = $user['summaryPoint'];
                        $user->save();
                        History::create([
                            "customer_id"=>$user->id,
                            "qr_specialCode"=>$special_code,
                            "product_name"=>$productInfo->name,
                            "price"=>$productInfo->price,
                            "qr_id"=>$promotion_infomation->id
                        ]);
                        DB::commit();
                        return response()->json([
                            "product"=>$productInfo,
                            "status_code"=>200,
                            "status"=>true,
                            "point"=>$promotionPointBonus,
                            "massage" => "Tích điểm thành công"
                        ], 200);
                    }else{
                        return response()->json([
                            "product"=>$productInfo,
                            "status_code"=>200,
                            "status"=>false,
                            "massage" => "Tích điểm thất bại"
                        ], 200);
                    }
                }else{
                    return response()->json([
                        "status_code"=>404,
                        "error" => "Không có sản phẩm này"
                    ], 404);
                }
            }
        }catch (\Exception $e){
            DB::rollBack();
            return response()->json([
                "status_code"=>500,
                "error" => $e
            ], 500);
        }
    }


    public function getPoint($product_id, $customer_id) {
        try {
            $customer = Customer::where('id','=',$customer_id)->first();
            $productInfo = Product::where('id', $product_id)->firstOrFail();
            if($customer){
                $data = new \stdClass();
                $data->customer_id = $customer->id;
                $data->totalPoint = $customer->totalPoint;
                $data->lastPoint = $customer->lastPoint;
                $data->summaryPoint = $customer->summaryPoint;
                $data->product = $productInfo;
                    return response()->json([
                        'status_code' => 200,
                        'data' => $data,
                    ], 200);
                }else{
                $data = "Không tồn tại thông tin này, vui lòng kiểm tra lại";
                return response()->json($data, 200);
            }
        }catch (\Exception $e){
            return response()->json([
                "status_code"=>500,
                "error" => $e
            ], 500);
        }
    }

}
