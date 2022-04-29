<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Session;

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
    return view('welcome');
});

Route::get('/dangky',[CustomerController::class,'create'])->name('signUp');
Route::post('/dangkysend',[CustomerController::class,'store'])->name('signUp.send');

Route::get('/dangnhap',[CustomerController::class,'login'])->name('login');
Route::post('/dangnhapsend',[CustomerController::class,'checkLogin'])->name('login.send');

Route::get('doithuong',function (){
    return Redirect::to('https://promotion-manage.vercel.app/nhanthuong');
})->name('doithuong');

Route::get('/tichdiem/{promotion_id}/{product_id}/{special_code}',[QRController::class,'checkQR']);

Route::get('/clear',function(){
    Session::flush();
    Session::flash('notice_clear','');
    return view ('FrontEnd/blank');
});
