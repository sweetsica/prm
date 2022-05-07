<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\GiftController;
use App\Http\Controllers\Api\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/nguoidung',[CustomerController::class, 'index'])->name('api.customer');
Route::get('/nguoidung/{user_id}',[CustomerController::class, 'get_info']);

Route::get('/thongtinquatang',[GiftController::class, 'index']);
Route::post('/doiqua',[OrderController::class,'changeGift']);

Route::get('/testmd5',function (){
    $data = "muop dang la kho qua 9991";
//    return md5($data);
    return base64_encode($data);
});

