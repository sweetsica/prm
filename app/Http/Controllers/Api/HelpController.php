<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Help;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function getHelpList()
    {
        $data = Help::all();
        return response()->json($data,200);
    }
    public function storeHelp(Request $request)
    {
//        Help::create($request->all);
        $help = $request->all();
        Help::create($help);
        return response()->json([
            'status' => 200,
            'messenger' => 'Gửi yêu cầu đổi mật khẩu thành công. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!',
        ],200);
    }
}
