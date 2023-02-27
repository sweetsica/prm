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
use Illuminate\Support\Facades\URL;
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
        if(QR::firstWhere('specialCode',$special_code)){
            $link = 'https://tichdiem.doppelherz.vn/tichdiem/'.$promotion_id.'/'.$product_id.'/'.$special_code;
            return redirect($link);
        }else{
            abort(403, 'Truy cập bị chặn');
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
