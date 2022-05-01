<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Promotion;
use App\Models\QR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QRController extends Controller
{
    public function checkQR($promotion_id, $product_id, $special_code)
    {
        if (Session::get('currentURL') == null) {
            Session::put('currentURL', url()->current());
            return redirect(route('login'));
        } else {
            if (Session::get('customer_id') !== null) {
                $promotion_infomation = QR::where('promotion_id', $promotion_id)->where('product_id', $product_id)->firstOrFail();
                if ($promotion_infomation !== null) {
                    $promotionPointBonus = Promotion::where('id',"=",$promotion_infomation['promotion_id'])->first()->valueSale;
                    $qrs = QR::where('specialCode', '=', $special_code)->firstOrFail();
                    if($qrs['status']==1){
                        $qrs->status = 0;
                        $qrs->save();
                        $customer_info = Customer::where('id','=',Session::get('customer_id'))->first();
                        $customer_info['totalPoint'] = $customer_info['lastPoint'] + $promotionPointBonus;
                        $customer_info['lastPoint'] = $customer_info['totalPoint'];
                        $customer_info->save();
                        Session::flash('notice', 'Tích điểm thành công! Sản phẩm của bạn đã được tích '. $promotionPointBonus .' xx điểm vào tài khoản. Cảm ơn bạn đã tham gia chương trình.');
                        Session::forget('currentURL');
//                        Session::flush();
                        return view('FrontEnd/blank');
                    }else{
                        Session::flash('notice', 'Mã số sản phẩm của bạn đã từng được kích hoạt. Yêu cầu tích điểm không thành công. Vui lòng liên hệ CSKH của Doppelherz Việt Nam qua email info@mastertran.vn để được bồi thường và hỗ trợ tốt nhất.');
                        Session::forget('currentURL');
                        return view('FrontEnd/blank');
                    }
                } else {
                    echo '404 không có sản phẩm này';
                }
            } else {
                return redirect(route('login'));
            }
        }

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
