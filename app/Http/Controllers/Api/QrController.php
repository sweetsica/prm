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
use Illuminate\Support\Facades\Session;
use App\Traits\getIpAdress;

class QrController extends Controller
{
    use getIpAdress;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request->get('limit');
        $promotion_id = $request->get('promotion_id');
        $result = QR::promotionById($promotion_id)->limit($limit);
        return response()->json($result,200);
    }
    public function promotion(){
        $result = Promotion::all();
        return response()->json($result,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
                $promotion_infomation = QR::where('promotion_id', $request['promotion_id'])
                    ->where('product_id', $request['product_id'])
                    ->where('specialCode', $request['special_code'])
                    ->firstOrFail();
                if ($promotion_infomation !== null) {
                    $promotionPointBonus = Promotion::where('id', "=", $promotion_infomation['promotion_id'])->first()->valueSale;
                    $qrs = QR::where('specialCode', '=', $request['special_code'])->first();
                    if ($qrs['status'] == 1) {
                        $updateQrs =  $qrs->update([
                            'status'=>0
                        ]);
                        if($updateQrs){
                            $customer_info = Customer::where('id', '=', $request['user'])->first();
                            $customer_info['summaryPoint'] = $customer_info['summaryPoint'] + $promotionPointBonus;
                            $customer_info['totalPoint'] = $customer_info['totalPoint'] + $promotionPointBonus;
                            $customer_info['lastPoint'] = $customer_info['totalPoint'];
                            $customer_info->save();
                            $history = new History();
                            $history->customer_id = $request['user'];
                            $history->qr_specialCode = $request['special_code'];
                            $productInfo = Product::where('id', $promotion_infomation->product_id)->firstOrFail();
                            $history->product_name = $productInfo['name'];
                            $history->price = $productInfo['price'];
                            $history->qr_id = $promotion_infomation['id'];
                            $history->ipaddress = $this->getIp();
                            $history->save();
                            Session::flash('notice-success', [
                                $promotionPointBonus,$productInfo
                            ]);
                            Session::forget('currentURL');
                            DB::commit();
                            return response()
                                ->json([
                                    "messenger"=>'Tích điểm thành công!',
                                    "status_code"=>200,
                                    "productInfo"=>$productInfo,
                                    "point"=>$promotionPointBonus
                                ], 200);
                        }else{
                            DB::rollBack();
                            abort(404);
                            return response()->json('Lỗi!',404);
                        }

                    } else {
                        Session::flash('notice-fail', 'Mã số sản phẩm của bạn đã từng được kích hoạt. Yêu cầu tích điểm không thành công. Vui lòng liên hệ CSKH của Doppelherz Việt Nam qua email info@mastertran.vn để được bồi thường và hỗ trợ tốt nhất.');
                        Session::forget('currentURL');
                        DB::commit();
                        return response()->json('Mã đã được kích hoạt, vui lòng thử lại',400);
                    }

                } else {
                    abort(404);
                }

        }catch (\Exception $e){
            DB::rollBack();
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        try{
            $info_qr = QR::where('specialCode','=',$request->special_code)->first();
            return response()->json($info_qr,200);
        }catch (\Exception $e) {
            $info_qr = $e;
            return response()->json('Truy vấn sai, vui lòng thử lại',500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
