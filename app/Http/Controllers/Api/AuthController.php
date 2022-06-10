<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "phone" => ["required"],
                "password" => "required"
            ],[
                "phone.required"=>"Vui lòng nhập số điện thoại",
                "password.required"=>"Vui lòng nhập mật khẩu"
            ]);
            if ($validator->fails()) {
                return response()->json([
                    "status_code"=>400,
                    "error"=>$validator->errors()
                ], 400);
            }
            $user = Customer::where('phone', $request->phone)->first();
            if ($user == null && !Hash::check($request->password, $user->password)) {
                return response()->json([
                    "status_code"=>400,
                    "error" => "Sai thông tin đăng nhập"
                ], 400);
            }
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                "status_code"=>500,
                'error' => $e,
            ], 500);
        }
    }

    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "email" => ["required", "regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", "unique:customers"],
                "phone" => ["required", "regex:/(84|0[3|5|7|8|9])+([0-9]{8})\b/", "unique:customers"],
                "password" => ["required", "min:6"],
                "password_confirmation" => "same:password"
            ],[
                "name.required" => "Vui lòng nhập họ và tên",
                "phone.required" => "Vui lòng nhập số điện thoại",
                "phone.unique" => "Số điện thoại đã tồn tại.",
                "phone.regex" => "Số điện thoại không hợp lệ.",
                "email.required" => "Vui lòng nhập địa chỉ email",
                "email.unique" => "Email đã tồn tại.",
                "email.regex" => "Email không hợp lệ, vui lòng nhập lại",
                "password.required" => "Vui lòng nhập mật khẩu",
                "password.regex" => "Mật khẩu phải có ít nhất 6 ký tự",
                "password_confirmation.same" => "Mật khẩu không khớp"
            ]);
            if ($validator->fails()) {
                return response()->json([
                    "status_code"=>400,
                    "error"=>$validator->errors()
                ], 400);
            }
            $fullName = $request->get('name');
            $email = $request->get('email');
            $phone = $request->get('phone');
            $password = $request->get('password');
            Customer::create([
                'name' => $fullName,
                'email' => $email,
                'phone' => $phone,
                'password' => bcrypt($password)
            ]);
            return response()->json([
                "status_code"=>200,
                "message"=>"Tạo tài khoản thành công"
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status_code' => 500,
                'error' => $e,
            ], 500);
        }
    }

    public function getUserInfo(Request $request)
    {
        $userInfo = $request->user();
        return response()->json([
            "user" => [
                "id" => $userInfo->id,
                "name" => $userInfo->name,
                "phone" => $userInfo->phone,
                "email" => $userInfo->email,
                "address" => $userInfo->address,
                "currentPoint" => $userInfo->totalPoint,
                "summaryPoint" => $userInfo->summaryPoint,
                "created_at" => $userInfo->created_at
            ]
        ], 200);
    }

    public function changeInformation(Request $request)
    {
        $userInfo = $request->user();
        try {
            $validator = Validator::make($request->all(), [
                "name" => "required",
                "email" => ["required", "regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/", Rule::unique('customers')->ignore($userInfo->id)],
                "address" => ["required"],
            ],[
                "name.required" => "Vui lòng nhập họ và tên",
                "phone.required" => "Vui lòng nhập số điện thoại",
                "phone.regex" => "Số điện thoại không hợp lệ.",
                "phone.unique" => "Số điện thoại đã tồn tại.",
                "email.required" => "Vui lòng nhập địa chỉ email",
                "email.unique" => "Email đã tồn tại.",
                "email.regex" => "Email không hợp lệ, vui lòng nhập lại",
                "address.required" => "Vui lòng nhập địa chỉ",
            ]);
            if ($validator->fails()) {
                return response()->json([
                    "status_code"=>400,
                    "error"=>$validator->errors()
                ], 400);
            }
            if ($userInfo) {
                $changeInfo = $userInfo->update([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'address' => $request->get('address')
                ]);
                if ($changeInfo) {
                    return response()->json([
                        "message" => "Đổi thông tin thành công."
                    ], 200);
                } else {
                    return response()->json([
                        "message" => "Đổi thông tin thất bại."
                    ], 400);
                }
            }
        } catch (\Exception $e) {
            return response()->json([
                'status_code' => 500,
                'error' => $e,
            ], 500);
        }
    }

    public function changePasswordHasToken(Request $request): \Illuminate\Http\JsonResponse
    {
        $user = $request->user();
        $validator = Validator::make($request->all(), [
            "curren_password" => "required",
            "new_password" => "required|min:6",
            "password_confirmation" => "same:new_password"
        ],[
            "curren_password.required" => "Vui lòng nhập mật khẩu hiện tại",
            "new_password.required" => "Vui lòng nhập mật khẩu",
            "new_password.regex" => "Mật khẩu phải có ít nhất 6 ký tự",
            "password_confirmation.same" => "Mật khẩu không khớp"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "status_code"=>400,
                "error"=>$validator->errors()
            ], 400);
        }

        return $this->extractedUpdatePassword($request, $user);
    }

    public function changePasswordNoToken(Request $request): \Illuminate\Http\JsonResponse
    {
        $validator = Validator::make($request->all(), [
            "curren_password" => "required",
            "new_password" => "required|min:6",
            "password_confirmation" => "same:new_password"
        ],[
            "curren_password.required" => "Vui lòng nhập mật khẩu hiện tại",
            "new_password.required" => "Vui lòng nhập mật khẩu",
            "new_password.regex" => "Mật khẩu phải có ít nhất 6 ký tự",
            "password_confirmation.same" => "Mật khẩu không khớp"
        ]);
        if ($validator->fails()) {
            return response()->json([
                "status_code"=>400,
                "error"=>$validator->errors()
            ], 400);
        }
        $user = Customer::where('phone', $request->get("phone"))->first();
        return $this->extractedUpdatePassword($request, $user);
    }

    /**
     * @param Request $request
     * @param $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function extractedUpdatePassword(Request $request, $user): \Illuminate\Http\JsonResponse
    {
        if (!Hash::check($request->get("curren_password"), $user->password)) {
            return response()->json([
                'error' => 'Sai mật khẩu hiện tại không đúng.'
            ], 400);
        }
        $updatePassword = $user->update([
            'password' => bcrypt($request->get("new_password"))
        ]);
        if ($updatePassword) {
            return response()->json([
                'message' => 'Thay đổi mật khẩu thành công.'
            ], 200);
        }
        return response()->json([
            'error' => 'Thay đổi mật thất bại.'
        ], 400);
    }

    public function logout(Request $request)
    {
        if ($request->user()->tokens()->delete()) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Logged Out Successfully'
                ],
                200
            );
        };
        return response()->json(
            [
                'success' => false,
                'error' => 'Logged Out false'
            ],
            400
        );
    }
    public function loginForQrcode(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                "email" => ["required"],
                "password" => "required"
            ],[
                "email.required"=>"Vui lòng nhập email",
                "password.required"=>"Vui lòng nhập mật khẩu"
            ]);
            if ($validator->fails()) {
                return response()->json([
                    "status_code"=>400,
                    "error"=>$validator->errors()
                ], 400);
            }
            $user = User::where('email', $request->email)->first();
            if ($user == null && !Hash::check($request->password, $user->password)) {
                return response()->json([
                    "status_code"=>400,
                    "error" => "Sai thông tin đăng nhập"
                ], 400);
            }
            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return response()->json([
                'status_code' => 200,
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                "status_code"=>500,
                'error' => $e,
            ], 500);
        }
    }
}
