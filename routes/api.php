<?php

use App\Http\Controllers\Api\QrController;
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



//Route::get('/nguoidung',[CustomerController::class, 'index'])->name('api.customer');
Route::get('/nguoidung/{customer_id}',[CustomerController::class, 'show']);
Route::put('/nguoidung/{customer_id}',[CustomerController::class, 'update']);
Route::put('/dangxuat',[CustomerController::class, 'logout']);
Route::get('/thongtinsanpham',[GiftController::class, 'product']);

Route::get('/thongtinquatang',[GiftController::class, 'index']);
Route::post('/doiqua',[OrderController::class,'changeGift']);

Route::get('/qrcode',[\App\Http\Controllers\Api\QrController::class,'index']);
Route::get('/promotion',[\App\Http\Controllers\Api\QrController::class,'promotion']);


Route::post('/login',[\App\Http\Controllers\Api\AuthController::class,'login']);
Route::post('/login-qrcode',[\App\Http\Controllers\Api\AuthController::class,'loginForQrcode']);
Route::post('/dangky',[\App\Http\Controllers\Api\AuthController::class,'registerCustomer']);
Route::get ("/user",[\App\Http\Controllers\Api\AuthController::class,'getUserInfo'])->middleware('auth:sanctum');
Route::get('/history',[\App\Http\Controllers\Api\BillController::class,'userBill'])->middleware('auth:sanctum');
Route::get('/history-gift-exchange',[\App\Http\Controllers\Api\HistoryController::class,'historyGiftExchange'])->middleware('auth:sanctum');
Route::post('/gift-exchange',[\App\Http\Controllers\Api\GiftExchangeController::class,'giftExchange'])->middleware('auth:sanctum');
Route::post('/change-info',[\App\Http\Controllers\Api\AuthController::class,'changeInformation'])->middleware('auth:sanctum');
Route::post('/change-password-has-token',[\App\Http\Controllers\Api\AuthController::class,'changePasswordHasToken'])->middleware('auth:sanctum');
Route::post('/change-password-no-token',[\App\Http\Controllers\Api\AuthController::class,'changePasswordNoToken'])->middleware('auth:sanctum');
Route::get('/logout',[\App\Http\Controllers\Api\AuthController::class,'logout'])->middleware('auth:sanctum');
Route::get('/tichdiem/{promotion_id}/{product_id}/{special_code}',[\App\Http\Controllers\Api\ScanQRController::class,'scanQR'])->middleware('auth:sanctum');
Route::get('/qr-code',[\App\Http\Controllers\Api\QrController::class,'index'])->middleware('auth:sanctum');

