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

    public function getProduct()
    {
//        $data = Product::all();
        $data = Product::where('status',1)->get();
        return response()->json($data,200);
    }

    public function updateSKU()
    {
        $dataSKUs = [
            '1'=>'AZDP',
            '2'=>'AZF',
            '3'=>'ACMEN',
            '4'=>'DMENO',
            '5'=>'ANTS',
            '6'=>'BECO',
            '7'=>'ATAG',
            '8'=>'BEHAIR',
            '9'=>'CQ10',
            '10'=>'EVIT',
            '11'=>'GINK',
            '12'=>'HEMO',
            '13'=>'HAIR+',
            '14'=>'JOINU',
            '15'=>'D3DR',
            '16'=>'CALI',
            '17'=>'IMMU',
            '18'=>'IRDR',
            '19'=>'OME3s',
            '20'=>'OTM',
            '21'=>'THYM',
            '22'=>'LICO',
            '23'=>'MDC3',
            '24'=>'OME3v',
            '25'=>'PROS',
            '26'=>'VITA',
            '27'=>'D3K2',
            '28'=>'ZIN30',
            '29'=>'COMA',
            '30'=>'LAC+',
            '31'=>'COMEM',
            '32'=>'COWOM',
        ];
        foreach ($dataSKUs as $key => $dataSKU){
            $task = Product::where('id', $key)->first();
            $task->fill([
                'SKU' => $dataSKU,
            ]);
//            dd($task);
            $task->save();
        }
    }
}
