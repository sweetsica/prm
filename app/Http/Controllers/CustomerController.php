<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
    public function create()
    {
        if(Session::get('customer_id') || Session::get('customer_name')){
            return Redirect::to('/hoadon');
        }
        return view('FrontEnd/signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:60',
            'password' => 'required|min:6|max:60|confirmed',
            'email' => 'required'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());
        }else{
            $customer['name'] = $request['name'];
            $customer['email'] = $request['email'];
            $customer['phone'] = $request['phone'];
            $customer['password'] = bcrypt($request['password']);
            Customer::create($customer);
            Session::flash('notice', 'Tạo thành công!');
            return redirect(route('login'));
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function login()
    {
        if(Session::get('customer_id') || Session::get('customer_name')){
            return Redirect::to('/hoadon');
        }
        return view('FrontEnd.login');
    }
    public  function  logout(){
        if(Session::get('customer_id') || Session::get('customer_name')){
            Session::forget('customer_id');
            Session::forget('customer_name');
            return Redirect::to('/dangnhap');
        }else{
            return Redirect::to('/dangnhap');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function checkLogin(Request $request)
    {
        try{
            if(!$request->phone == null){
                $info_customer = Customer::where('phone', $request->phone)->first();
                if (!$info_customer == null)
                {
                    if (Hash::check($request->password, $info_customer->password)) {
                        Session::put('customer_id',$info_customer['id']);
                        Session::put('customer_name',$info_customer['name']);
                        if(Session::get('currentURL')){
                            return Redirect::to(Session::get('currentURL')); // trang xu ly tich diem
                        }else{
                            return Redirect::to('/hoadon'); // dashboard
                        }
                    } else {
                        Session::flash('error', 'Đăng nhập thất bại, vui lòng kiểm tra lại tài khoản và mật khẩu');
                        return view('FrontEnd/login');
                    }
                }
                else {
                  dd($info_customer);
                }
            }else{
                Session::flash('error', 'Đăng nhập thất bại, vui lòng kiểm tra lại tài khoản và mật khẩu');
                return view('FrontEnd/login');
            }

        }catch (\Exception $error){
            Session::flash('error', 'Đăng nhập thất bại, vui lòng kiểm tra lại tài khoản và mật khẩu');
            return view('FrontEnd/login');
        }
    }

    public function userBill()
    {
        if (Session::get('customer_id') !== null) {
            $customerId = Session::get('customer_id');
            $userBillInfo = Customer::where('id','=',$customerId)->first();
            $histories = History::where('customer_id',$userBillInfo->id)->get();
            $userBillInfo['histories'] = $userBillInfo->history()->get();
            $userBillInfo['url'] = 'https://tichdiem.doppelherz.vn/nhanthuong/'.base64_encode($userBillInfo->id).'/'.Str::random(5);
            return view('FrontEnd/bill',compact('userBillInfo','histories'));
        } else {
            return redirect(route('login'));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
