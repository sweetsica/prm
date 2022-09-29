<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Cassandra\Custom;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer_all = Customer::get()->all();
        return response()->json($customer_all,200);
    }

    public function login(Request $request)
    {
        $customer = Customer::where('phone','=',$request->phone)->orWhere('email','=',$request->email)->first();
        if($customer){
            $data = Customer::find($customer['id']);
            $tokenResult = $customer->createToken('authToken')->plainTextToken;
            return response()->json([
                'data' => $data,
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                ], 200);
        }else{
            $data = "Không tồn tại thông tin này, vui lòng kiểm tra lại";
            return response()->json($data, 200);
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customerInfo = Customer::where('id','=',$id)->first();
        return response()->json($customerInfo,200);
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
        $member = Customer::find($id);
        $member->update([
            'name' => $request->get('name'),
//            'email' => $request->get('email'),
            'address' => $request->get('address'),
        ]);
        return $member;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateMore(Request $request, $id)
    {
        $member = Customer::find($id);
        $data = [];
        if($request->has('name')) {
            $data['name'] = $request->get('name');
        }
        if($request->has('address')) {
            $data['address'] = $request->get('address');
        }
        if($request->has('password')) {
            $data['password'] = bcrypt($request->get('password'));
        }
        if($request->has('email')) {
            $data['email'] = $request->get('email');
        }
        if(!empty($data)) {
            $member->update($data);
            return response()->json([
                'status_code' => 200,
                'message' => 'Cập nhật thông tin thành công',
            ], 200);
        }
        return response()->json([
            'status_code' => 500,
            'message' => 'Cập nhật thông tin thấp bại',
        ], 200);
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
