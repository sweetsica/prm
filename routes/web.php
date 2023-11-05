<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HistoryController;

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
//    return redirect()->to("https://doppelherz.vn");
})->name('website');

Route::get('/welcome',function (){
   return view('welcome');
});

Route::get('/login', function () {
    echo 'đăng nhập';
})->name('login');

Route::post('/doithongtin/{id}',[CustomerController::class,'changeInfoCus']);

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
});

Route::get('nova/export/{startid}/{endid}',[QRController::class,'export'])->name('qr.export');

Route::get('nova/export/customer',[CustomerController::class,'export'])->name('customer.export');
//Route::get('nova/export/history',[HistoryController::class,'export'])->name('history.export');

Route::get('nova/export/history',[HistoryController::class,'exportByRange'])->name('history.export');
Route::get('nova/export/data',[HistoryController::class,'splitdate'])->name('splitdate');
Route::get('nova/export/history/{year?}/{startDate?}/{startMonth?}/{EndDate?}/{endMonth?}',[HistoryController::class,'export'])->name('history.exportByRange');
