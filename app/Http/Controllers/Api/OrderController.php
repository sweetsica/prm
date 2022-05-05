<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Gift;
use App\Models\Order;
use Illuminate\Http\Request;


class OrderController extends Controller
{
//    function  check địa chỉ
    public function changeGift(Request $request)
    {
        $customerInfo = Customer::where('id', $request['customer_id'])->first();
        if ($customerInfo !== null) {
            $giftInfo = Gift::where('id', $request['gift_id'])->first();
            if ($customerInfo['totalPoint'] >= $giftInfo['valuePromotion']) {
                $customerNewPoint = $customerInfo['totalPoint'] - $giftInfo['valuePromotion'];
                $customerInfo->lastPoint = $customerInfo->totalPoint;
                $customerInfo->totalPoint = $customerNewPoint;
                $customerInfo->save();

                if ($customerInfo['address'] !== null) {
                    if ($request['type'] == 'confirmed') {
                        $order = new Order();
                        $order->customer_id = $request['customer_id'];
                        $order->gift_id = $request['gift_id'];
                        $userInfo = Customer::where('id', $request['customer_id'])->first();
                        $order->address = $userInfo['address'];
                        $order->save();
                        return response()->json('Đổi quà thành công, chúng tôi sẽ liên hệ khi hàng được chuyển tới bạn. Xin cảm ơn!', 200);
                    } else {
                        $customerInfo = Customer::where('id', '=', $request['customer_id']);
                        $customerInfo->update([
                            'name' => $request['name'],
                            'phone' => $request['phone'],
                            'address' => $request['address']
                        ]);
                        $orderInfo = new Order();
                        $orderInfo->customer_id = $request['customer_id'];
                        $orderInfo->gift_id = $request['gift_id'];
                        $userInfo = Customer::where('id', $request['customer_id'])->first();
                        $orderInfo->address = $userInfo['address'];
                        $orderInfo->save();
                    }
                } else {
                    return response()->json('Cần thêm địa chỉ', 00);
                }
                return response()->json('Đổi quà thành công! Sản phẩm sẽ được chuyển tới: ' . $userInfo['address'], 200);
            } else {
                return response()->json('Không đủ điểm thưởng', 500);
            }
        } else {
            return response()->json('Không tồn tại user này', 404);
        }
    }

    public function postOrdertoAddress(Request $request)
    {

        return response()->json('Đổi quà thành công, chúng tôi sẽ liên hệ khi hàng được chuyển tới bạn. Xin cảm ơn!', 200);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
