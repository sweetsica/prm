<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->to("https://tichdiem.doppelherz.vn");
})->name('website');

Route::get('/dangky',[CustomerController::class,'create'])->name('signUp');
Route::post('/dangky',[CustomerController::class,'store'])->name('signUp.send');

Route::get('/dangnhap',[CustomerController::class,'login'])->name('login');
Route::get('/dangxuat',[CustomerController::class,'logout'])->name('logout');
Route::post('/dangnhap',[CustomerController::class,'checkLogin'])->name('login.send');
Route::post('/doithongtin/{id}',[CustomerController::class,'changeInfoCus']);

Route::get('/hoadon',[CustomerController::class,'userBill'])->name('user.bill');

Route::get('doithuong',function (){
    return Redirect::to('https://promotion-manage.vercel.app/nhanthuong');
})->name('doithuong');

Route::get('/tichdiem/{promotion_id}/{product_id}/{special_code}',[QRController::class,'checkQR']);
Route::get('/thongbao',[QRController::class,'testNotify']);
Route::get('/clear',function(){
    Session::flush();
    Session::flash('notice_clear','');
    return route('login');
});

Route::get('/testmd5',function (){
    $data = "muop dang la kho qua 9991";
    dd(URL::route('website'));
//    return md5($data);
//    return base64_encode($data);
});

Route::get('/export',[QRController::class,'export']);
