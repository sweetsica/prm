<?php

namespace App\Http\Controllers;

use App\Exports\QrsExport;
use App\Models\Customer;
use App\Models\History;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\QR;
use Carbon\Carbon;
use Complex\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class QRController extends Controller
{
    public function getQR(Request $request)
    {
        dd($request);
    }
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
        DB::beginTransaction();
        try{
            if (Session::get('customer_id') !== null) {
                $promotion_infomation = QR::where('promotion_id', $promotion_id)->where('product_id', $product_id)->firstOrFail();
                if(Session::get('notice-success')){
                    Session::forget('notice-success');
                }
                if ($promotion_infomation !== null) {
                    $promotionPointBonus = Promotion::where('id', "=", $promotion_infomation['promotion_id'])->first()->valueSale;
                    $qrs = QR::where('specialCode', '=', $special_code)->firstOrFail();
                    if ($qrs['status'] == 1) {
                       $updateQrs =  $qrs->update([
                           'status'=>0
                        ]);
                       if($updateQrs){
                           $customer_info = Customer::where('id', '=', Session::get('customer_id'))->first();
                           $customer_info['summaryPoint'] = $customer_info['summaryPoint'] + $promotionPointBonus;
                           $customer_info['totalPoint'] = $customer_info['totalPoint'] + $promotionPointBonus;
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
                           DB::commit();
                           return view('FrontEnd/blank');
                       }else{
                           DB::rollBack();
                           abort(404);
                       }

                    } else {
                        Session::flash('notice-fail', 'Mã số sản phẩm của bạn đã từng được kích hoạt. Yêu cầu tích điểm không thành công. Vui lòng liên hệ CSKH của Doppelherz Việt Nam qua email info@mastertran.vn để được bồi thường và hỗ trợ tốt nhất.');
                        Session::forget('currentURL');
                        DB::commit();
                        return view('FrontEnd/blank');
                    }

                } else {
                    abort(404);
                }
            } else {
                return redirect(route('login'));
            }

        }catch (\Exception $e){
            DB::rollBack();
            abort(404);
        }

    }

    public  function  testNotify(){
        return view('FrontEnd/blank');
    }

    public function export($startid,$endid)
    {
        $fileName = 'Danh-sách-mã-QR-từ-'.$startid.'-đến-'.$endid.'-ngày-'.Carbon::today()->format('d-m-Y').'.xlsx';
        $QrsExport = new QrsExport($startid,$endid);
        return Excel::download($QrsExport, $fileName);
    }
}
