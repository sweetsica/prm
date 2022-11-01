<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PromotionController;
use App\Http\Controllers\Api\QrController;
use App\Http\Controllers\Api\GiftController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\HelpController;

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

Route::get('/list-admin',[UserController::class, 'getListAdmin'])->name('getListAdmin');
Route::get('/create-admin',[UserController::class, 'createAdmin'])->name('createAdmin');
Route::get('/login-admin',[UserController::class, 'getTokenAdmin'])->name('getTokenAdmin');

Route::get('/list-product',[ProductController::class, 'getListProduct'])->name('getListProduct');
Route::get('/get-product',[ProductController::class, 'getProduct'])->name('getProduct');
Route::get('/product/{product_id}',[ProductController::class,'detail']);


Route::get('/get-category/{category_id}',[\App\Http\Controllers\Api\CategoryController::class, 'detail'])->name('getCategory');
Route::get('/get-category',[\App\Http\Controllers\Api\CategoryController::class, 'getCategories'])->name('getCategoryAll');

Route::get('/get-promotion',[PromotionController::class, 'getPromotion'])->name('getPromotion');

Route::get('/get-qr',[QrController::class, 'getInfoQr'])->name('getInfoQr');
Route::post('/processQr',[QrController::class, 'processQr'])->name('processQr');

Route::get('/get-gift',[GiftController::class, 'getInfoGift'])->name('getInfoGift');

Route::get('/get-info-order',[OrderController::class, 'getInfoOrder'])->name('getInfoOrder');
Route::post('/createOrder',[QrController::class, 'createOrder'])->name('createOrder');

Route::get('/list-customer',[CustomerController::class, 'getListCustomer'])->name('getListCustomer');
Route::post('/getCustomer',[CustomerController::class, 'getCustomer'])->name('getCustomer');
Route::put('/update-customer',[CustomerController::class, 'updateCustomer'])->name('updateCustomer');

Route::put('/customer/update/{customer_id}',[CustomerController::class, 'updateMore']);

Route::get('/nguoidung',[CustomerController::class, 'index'])->name('api.customer');
Route::get('/nguoidung/{customer_id}',[CustomerController::class, 'show']);
Route::put('/nguoidung/{customer_id}',[CustomerController::class, 'update']);
Route::put('/dangxuat',[CustomerController::class, 'logout']);
Route::get('/thongtinsanpham',[GiftController::class, 'product']);

Route::get('/thongtinquatang',[GiftController::class, 'index']);
Route::post('/doiqua',[OrderController::class,'changeGift']);

Route::get('/qrcode',[QrController::class,'index']);
Route::get('/promotion',[QrController::class,'promotion']);

//Route::post('/login',[\App\Http\Controllers\Api\AuthController::class,'login']);
Route::post('/login',[\App\Http\Controllers\Api\CustomerController::class,'login']);
Route::post('/login-qrcode',[\App\Http\Controllers\Api\AuthController::class,'loginForQrcode']);
Route::post('/dangky',[\App\Http\Controllers\Api\AuthController::class,'registerCustomer']);


Route::get ('/user',[UserController::class,'index']);
Route::post ('/user-login',[CustomerController::class,'index']);
//Route::get ('/user',[\App\Http\Controllers\Api\AuthController::class,'getUserInfo'])->middleware('auth:sanctum');

Route::get('/history',[\App\Http\Controllers\Api\BillController::class,'userBill'])->middleware('auth:sanctum');
Route::get('/history-gift-exchange',[\App\Http\Controllers\Api\HistoryController::class,'historyGiftExchange'])->middleware('auth:sanctum');
Route::post('/gift-exchange',[\App\Http\Controllers\Api\GiftExchangeController::class,'giftExchange'])->middleware('auth:sanctum');
Route::post('/change-info',[\App\Http\Controllers\Api\AuthController::class,'changeInformation'])->middleware('auth:sanctum');
Route::post('/change-password-has-token',[\App\Http\Controllers\Api\AuthController::class,'changePasswordHasToken'])->middleware('auth:sanctum');
Route::post('/doi-mat-khau',[\App\Http\Controllers\Api\AuthController::class,'changePasswordNoToken']);
Route::get('/logout',[\App\Http\Controllers\Api\AuthController::class,'logout'])->middleware('auth:sanctum');
//Route::get('/tichdiem/{promotion_id}/{product_id}/{special_code}',[\App\Http\Controllers\Api\ScanQRController::class,'scanQR'])->middleware('auth:sanctum');
//Route::get('/tichdiem/{promotion_id}/{product_id}/{special_code}',[\App\Http\Controllers\Api\ScanQRController::class,'scanQR']);

//Route::post('/tichdiem/{promotion_id}/{product_id}/{special_code}',[\App\Http\Controllers\Api\ScanQRController::class,'scanQR'])->middleware('auth:sanctum');
//Route::post('/tichdiem/{promotion_id}/{product_id}/{special_code}',[\App\Http\Controllers\Api\ScanQRController::class,'scanQR']);

//Route::get('/diem/{product_id}/{customer_id}',[\App\Http\Controllers\Api\ScanQRController::class, 'getPoint']);

//Route::get('/diem/{promotion_id}/{product_id}',[\App\Http\Controllers\Api\ScanQRController::class,'scanQR'])->middleware('auth:sanctum');

//Route::post('/info-qr-code',[QrController::class,'getQR'])->middleware('auth:sanctum');
Route::post('/info-qr-code',[QrController::class,'show']);
Route::post('/tichdiem',[QrController::class,'store']);

//Route::get('/qr-code',[QrController::class,'index'])->middleware('auth:sanctum');
Route::get('/qr-code',[QrController::class,'index']);

Route::post('help/send',[HelpController::class,'storeHelp'])->name('help.store');
Route::get('help/list',[HelpController::class,'getHelpList'])->name('help.list');
