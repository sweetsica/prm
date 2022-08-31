<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\History;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        if(Session::get('customer_id') || Session::get('customer_name')){
//            return Redirect::to('/hoadon');
//        }
//        return view('FrontEnd/signup');
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        $request->validate([
//            "name"=>"required",
//            "email"=>["required","regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/","unique:customers"],
//            "phone"=>["required","regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/","unique:customers"],
//            "password"=>["required","min:6"],
//            "password_confirmation"=>"same:password"
//        ],[
//            "name.required"=>"Vui lòng nhập họ và tên",
//            "phone.required"=>"Vui lòng nhập số điện thoại",
//            "phone.unique"=>"Số điện thoại đã tồn tại.",
//            "phone.regex"=>"Số điện thoại không hợp lệ.",
//            "email.required"=>"Vui lòng nhập địa chỉ email.",
//            "email.unique"=>"Email đã tồn tại.",
//            "email.regex"=>"Email không hợp lệ, vui lòng nhập lại.",
//            "password.required"=>"Vui lòng nhập mật khẩu.",
//            "password.min"=>"Mật khẩu phải ít nhất 6 ký tự.",
////            "password.regex"=>"Mật khẩu phải có ít nhất 6 ký tự, có ký tự số (0-9), ký tự hoa, ký tự thường",
//            "password_confirmation.same"=>"Mật khẩu không khớp."
//        ]);
//
//        try{
//            $customer['name'] = $request['name'];
//            $customer['email'] = $request['email'];
//            $customer['phone'] = $request['phone'];
//            $customer['password'] = bcrypt($request['password']);
//            Customer::create($customer);
//            Session::flash('notice', 'Tạo thành công!');
//            return redirect(route('login'));
//        }catch (\Exception $e){
//            abort(404);
//        }
//
//
//    }

    /**
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
//    public function login()
//    {
//        if(Session::get('customer_id') || Session::get('customer_name')){
//            return Redirect::to('/hoadon');
//        }
//        return view('FrontEnd.login');
//    }
//    public  function  logout(){
//        if(Session::get('customer_id') || Session::get('customer_name')){
//            Session::forget('customer_id');
//            Session::forget('customer_name');
//            return Redirect::to('/dangnhap');
//        }else{
//            return Redirect::to('/dangnhap');
//        }
//    }

    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
//    public function checkLogin(Request $request)
//    {
//        try{
//            if(!$request->phone == null || !$request->password == null){
//                $info_customer = Customer::where('phone', $request->phone)->first();
//                if (!$info_customer == null)
//                {
//                    if (Hash::check($request->password, $info_customer->password)) {
//                        Session::put('customer_id',$info_customer['id']);
//                        Session::put('customer_name',$info_customer['name']);
//                        if(Session::get('currentURL')){
//                            return Redirect::to(Session::get('currentURL')); // trang xu ly tich diem
//                        }else{
//                            return Redirect::to('/hoadon'); // dashboard
//                        }
//                    } else {
//                        Session::flash('error', 'Đăng nhập thất bại, vui lòng kiểm tra lại tài khoản và mật khẩu');
//                        return view('FrontEnd/login');
//                    }
//                }
//                else {
//                    Session::flash('error', 'Đăng nhập thất bại, vui lòng kiểm tra lại tài khoản và mật khẩu');
//                    return view('FrontEnd/login');
//                }
//            }else{
//                Session::flash('error', 'Đăng nhập thất bại, vui lòng kiểm tra lại tài khoản và mật khẩu');
//                return view('FrontEnd/login');
//            }
//
//        }catch (\Exception $error){
//            Session::flash('error', 'Đăng nhập thất bại, vui lòng kiểm tra lại tài khoản và mật khẩu');
//            return view('FrontEnd/login');
//        }
//    }
    /**
//     * @param Request $request
//     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
//    public function changeInfoCus(Request $request,int $id){
//        $request->validate([
//            "name"=>"required",
////            "email"=>["required","regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", Rule::unique('customers')->ignore($id)],
////            "phone"=>["required","regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/", Rule::unique('customers')->ignore($id)],
//            "address"=>["required"],
//        ],[
//            "name.required"=>"Vui lòng nhập họ và tên",
////            "phone.required"=>"Vui lòng nhập số điện thoại",
////            "phone.regex"=>"Số điện thoại không hợp lệ.",
////            "phone.unique"=>"Số điện thoại đã tồn tại.",
////            "email.required"=>"Vui lòng nhập địa chỉ email",
////            "email.unique"=>"Email đã tồn tại.",
////            "email.regex"=>"Email không hợp lệ, vui lòng nhập lại",
//            "address.required"=>"Vui lòng nhập địa chỉ",
//        ]);
//        $member = Customer::find($id);
//        $member->update([
//            'name' => $request->get('name'),
////            'email' => $request->get('email'),
//            'address' => $request->get('address'),
//        ]);
//        return redirect()->to("/hoadon");
//
//    }

//    public function userBill()
//    {
//        if (Session::get('customer_id') !== null) {
//            $customerId = Session::get('customer_id');
//            $order =  Order::where("customer_id",$customerId)->with("gift")->get();
//            $userBillInfo = Customer::where('id','=',$customerId)->first();
//            $histories = History::where('customer_id',$userBillInfo->id)->get();
//            $userBillInfo['histories'] = $userBillInfo->history()->get();
////            dd($order);
//            $userBillInfo['url'] = 'https://tichdiem.doppelherz.vn/nhanthuong/'.base64_encode($userBillInfo->id).'/'.Str::random(5);
//            return view('FrontEnd/bill',compact('userBillInfo','histories','order'));
//        } else {
//            return redirect(route('login'));
//        }
//
//    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        //
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        //
//    }


}
