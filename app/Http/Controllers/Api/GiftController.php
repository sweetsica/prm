<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Gift;
use App\Models\Product;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $gift = Gift::where('status',1)->get();
        return response()->json($gift,200);
    }

    public function product(){
        $products = Product::where('status',1)->get();
        return response()->json($products,200);
    }

}
