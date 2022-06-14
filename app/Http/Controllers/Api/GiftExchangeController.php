<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Gift;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class GiftExchangeController extends Controller
{
    public function giftExchange(Request $request)
    {
        DB::beginTransaction();
        try {
            $userInfo = $request->user();
            if($userInfo){
                $gift_id = $request->get('gift_id');
                $giftInfo = Gift::where('status', 1)->find($gift_id);
                if ($userInfo->address !== null) {
                    if ($giftInfo !== null) {
                        if ($userInfo->totalPoint >= $giftInfo->valuePromotion) {
                            $customerNewTotalPoint = $userInfo->totalPoint - $giftInfo->valuePromotion;
                            $updateCustomer = $userInfo->update([
                                'totalPoint' => $customerNewTotalPoint,
                                'lastPoint' => $customerNewTotalPoint
                            ]);
                            if ($updateCustomer) {
                                $createOrder = Order::create([
                                    'customer_id' => $userInfo->id,
                                    'gift_id' => $giftInfo->id,
                                    'address' => $giftInfo->address
                                ]);
                                if ($createOrder) {
                                    DB::commit();
                                    return response()->json([
                                        "message" => "Đổi quà thành công."
                                    ], 200);
                                } else {
                                    DB::rollBack();
                                    return response()->json([
                                        "error" => "Lỗi hệ thống vui lòng thử lại sau."
                                    ], 500);
                                }
                            }else{
                                DB::rollBack();
                                return response()->json([
                                    "error" => "Lỗi hệ thống vui lòng thử lại sau."
                                ], 500);
                            }

                        } else {
                            return response()->json([
                                "error" => "Bạn không đủ điểm."
                            ], 400);
                        }
                    } else {
                        return response()->json([
                            "error" => "Phần quà không tồn tại."
                        ], 400);
                    }
                } else {
                    return response()->json([
                        "error" => "Vui lòng nhập địa chỉ để thực hiện đổi quà nhận quà."
                    ], 400);
                }
            }else{
                return response()->json([
                    "error" => "Lỗi hệ thống."
                ], 500);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                "error" => $e
            ], 500);
        }
    }
}
