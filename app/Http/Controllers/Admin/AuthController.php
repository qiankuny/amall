<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Validator;
use Auth;
use Redirect;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    /**
     * 登录页面
     */
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $validator = $this->validateLogin($request->input());
            if($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            $username = $request->input('username');
            $password = $request->input('password');
            if(Auth::guard('admin')->attempt(['username' => $username, 'password' => $password])){
                return Redirect::to(config('admin.prefix'))->with('success', '登录成功');
            }else{
                return back()->with('error', '账号或密码错误')->withInput();
            }
        }
        return view('admin.login');
    }

    /**
     * 登录验证
     */
    public function validateLogin(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|alpha_num',
            'password' => 'required',
        ], [
            'required' => ':attribute 为必填项',
        ], [
            'username' => '账号',
            'password' => '密码',
        ]);
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        if(Auth::guard('admin')->user()){
            Auth::guard('admin')->logout();
        }
        return redirect()->route('admin.login');
    }


}
