<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hitory;
use App\Models\Product;

class ProductController extends Controller
{

    public function detail($product_id)
    {
        try{
            $productInfo = Product::where('id', $product_id)->firstOrFail();
            return response()->json($productInfo,200);

        }catch (\Exception $e){
            abort(404);
        }

    }
}
