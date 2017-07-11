<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * 注册
     */
    public function register(Request $request)
    {
        if($request->isMethod('post')){
            $validator = $this->validateRegister($request->input());
            if($validator->fails()){
                return back()->withErrors($validator)->withInput();
            }
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->created_at = date("Y-m-d H:i:s",time());
            $user->updated_at = date("Y-m-d H:i:s",time());
            if($user->save()){
                return redirect('login')->with('success', '注册成功');
            }else{
                return back()->with('error', '注册失败')->withInput();
            }
        }
        return view('auth.register');
    }

    /**
     * 注册验证
     */
    protected function validateRegister(array $data)
    {
        return Validator::make([
            'name' => 'required|alpha_num|between:2,30',
            'email' => 'required|email|between:5,255|unique:users',
            'password' => 'required|between:6,16|confirmed',
            'password_confirmation' => 'required|between:6,16',
        ],[
            'required' => ':attribute 为必填项',
            'confirmed' => '两次输入的密码不一致',
            'unique' => '该邮箱已经被人占用',
            'alpha_num' => ':attribute 必须为字母或数字'
        ],[
            'name' => '昵称',
            'email' => '邮箱',
            'password' => '密码',
            'password_confirmation' => '确认密码'
        ]);
    }
}
