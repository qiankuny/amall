<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * 登录页面
     */
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            echo '执行登录';
        }
        return view('admin.login');
    }
}
