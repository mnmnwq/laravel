<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Model\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

require_once('resources/org/code/Code.class.php');

class LoginController extends CommonController
{
    protected $code_obj;
    public function __construct(){
        $this->code_obj = new \Code;
    }
    public function login(){
        if($input = Input::all()){
            $code = $this->code_obj->get();
            $user_info = User::where('user_name',$input['user_name'])->first();
            if(!empty($user_info)){
                if(md5($input['user_pass']) != $user_info['user_pass']){
                    return view('admin.login')->with('msg','密码错误');
                }
            }else{
                return view('admin.login')->with('msg','用户名不存在');
            }
            if(strtoupper($input['code']) != $code){
                return view('admin.login')->with('msg','验证码错误');
            }
            unset($user_info['user_pass']);
            $user_arr = $user_info;
            session(['is_login'=>true,'user_info'=>$user_arr]);
            return redirect('admin/index');
        }else{
            return view('admin.login');
        }
    }

    /**
     * 修改管理员密码
     */
    public function pass(){
        view('admin.pass');
    }

    /**
     * 登出操作
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function quit(){
        session(['is_login'=>false,'user_info'=>null]);
        return redirect('admin/login');
    }
    public function code(){
        $this->code_obj->make();
    }
}
