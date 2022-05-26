<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\History;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\QR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QRController extends Controller
{
    /**
     * @param $promotion_id
     * @param $product_id
     * @param $special_code
     * Hàm xử lý mã QR
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|void
     */
    public function checkQR($promotion_id, $product_id, $special_code)
    {
        Session::put('currentURL', url()->current());
        if (Session::get('customer_id') !== null) {
            $promotion_infomation = QR::where('promotion_id', $promotion_id)->where('product_id', $product_id)->firstOrFail();
            if(Session::get('notice-success')){
                Session::forget('notice-success');
            }
            if ($promotion_infomation !== null) {
                $promotionPointBonus = Promotion::where('id', "=", $promotion_infomation['promotion_id'])->first()->valueSale;
                $qrs = QR::where('specialCode', '=', $special_code)->firstOrFail();
                if ($qrs['status'] == 1) {
                    $qrs->status = 0;
                    $qrs->save();
                    $customer_info = Customer::where('id', '=', Session::get('customer_id'))->first();
                    $customer_info['summaryPoint'] = $customer_info['summaryPoint']+ $promotionPointBonus;
                    $customer_info['totalPoint'] = $customer_info['lastPoint'] + $promotionPointBonus;
                    $customer_info['lastPoint'] = $customer_info['totalPoint'];
                    $customer_info->save();
                    $history = new History();
                    $history->customer_id = Session::get('customer_id');
                    $history->qr_specialCode = $special_code;
                    $productInfo = Product::where('id', $promotion_infomation->product_id)->firstOrFail();
                    $history->product_name = $productInfo['name'];
                    $history->price = $productInfo['price'];
                    $history->qr_id = $promotion_infomation['id'];
                    $history->save();

                    Session::flash('notice-success', [
                        $promotionPointBonus,$productInfo
                    ]);
                    Session::forget('currentURL');
                    return view('FrontEnd/blank');
                } else {
                    Session::flash('notice-fail', 'Mã số sản phẩm của bạn đã từng được kích hoạt. Yêu cầu tích điểm không thành công. Vui lòng liên hệ CSKH của Doppelherz Việt Nam qua email info@mastertran.vn để được bồi thường và hỗ trợ tốt nhất.');
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

    public  function  testNotify(){
        return view('FrontEnd/blank');
    }

}
