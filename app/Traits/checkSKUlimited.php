<?php
namespace App\Traits;

use App\Models\Customer;
use App\Models\Product;
use Carbon\Carbon;


trait checkSKUlimited{
    public function checkSKU($user_id,$product_id){
        $productSKU = Product::find($product_id)->id;
        $customer = Customer::find($user_id);
//        $histories = $customer->histories()->whereMonth('created_at', Carbon::now()->month)->get();
        $histories = $customer->histories()
            ->whereMonth('created_at', Carbon::now()->month)
            ->where('product_id', $productSKU)
            ->get()
            ->pluck('product_id')
            ->count();
//        $counted = array_count_values($histories->pluck('product_id')->toArray());
//        dd($histories);
        if ($histories >=5) {
            return false;
        }
        return true;
    }

    public function checkLimit10($user_id)
    {
        $customer = Customer::find($user_id);
        $histories = $customer->histories()
            ->whereMonth('created_at', Carbon::now()->month)
            ->get()
            ->pluck('product_id')
            ->count();
        if ($histories >=10) {
            return false;
        }
        return true;
//        dd($histories);
    }
}
