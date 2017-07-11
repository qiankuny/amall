<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * 登录
     */
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            $email = $request->input('email');
            $password = $request->input('password');
            $validator = $this->validateLogin($request->input());
            if($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
                // Authentication passed...
//                return redirect()->intended('home');
                $request->session()->put('email', $email);
                return Redirect::to('home')->with('success', '登录成功！');
            }else{
                return back()->with('error', '账号或密码错误')->withInput();
            }
        }
        return view('auth.login');
    }

    /**
     * 登录页面验证
     */
    protected function validateLogin(array $data)
    {
        return Validator::make($data, [
            'email' => 'required',
            'password' => 'required|between:6,16',
        ],[
            'required' => ':attribute 为必填项',
            'between' => ':attribute 的长度为6-16位',
        ],[
            'email' => '邮箱',
            'password' => '密码',
        ]);
    }

    /**
     * 退出登录
     */
    public function logout()
    {
        if(Auth::guard('web')->user()){
            Auth::guard('web')->logout();
        }
        return Redirect::to('');
    }
}
