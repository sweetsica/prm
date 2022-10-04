<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Hitory;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $info = Category::all();
        return response()->json($info,200);
    }

    public function detail($category_id)
    {
        try{
            $category_product = CategoryProduct::where('category_id','=',$category_id)->get();
            $product_ids = $category_product->map(function ($item, $key) {
                return $item->product_id;
            });
            $products = Product::whereIn('id',$product_ids)->get();
            return response()->json([
                'status_code' => 200,
                'data' => $products,
            ], 200);
        }catch (\Exception $e){
            return response()->json([
                'status_code' => 500,
                'error' => $e,
            ], 200);
        }
    }
}
