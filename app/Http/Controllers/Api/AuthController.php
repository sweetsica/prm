<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function login (Request $request){

        try{
            $request->validate([
                "phone"=>["required"],
                "password"=>"required"
            ],[
                "phone.required"=>"Vui lòng nhập họ và tên",
                "password.required"=>"Vui lòng nhập mật khẩu"
            ]);
            $user = Customer::where('phone',$request->phone)->first();
            if (!Hash::check($request->password, $user->password)) {
                throw new \Exception('Sai Thong Tin Dang Nhap');
            }
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ]);
        }catch (\Exception $e){
            return response()->json([
                'status_code' => 500,
                'message' => 'Error in Login',
                'error' => $e,
            ]);
        }
    }
}
