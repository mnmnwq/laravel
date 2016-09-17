<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class IndexController extends CommonController
{
    /**
     * 后台首页
     */
    public function index(){
        return view('admin.index');
    }

    /**
     * 修改管理员密码
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pass(){
        if($input = Input::all()){
            $session_user_info = session('user_info');
            //根据当前session里面的信息查找当前的用户信息
            $find_user_info = User::where('user_id',$session_user_info['user_id'])->first();
            //根据提交的信息进行核对
            if(md5($input['o_pass']) != $find_user_info['user_pass']){
                return view('admin.pass')->with('msg','原始密码错误');
            }
            if($input['n_pass'] != $input['r_pass']){
                return view('admin.pass')->with('msg','新密码和确认密码不相同');
            }
        }else{
            return view('admin.pass');
        }
    }

    public function info(){
        return view('admin.info');
    }

    /**
     * validate实例，修改管理员密码
     */
    public function example_pass(){
        if($input = Input::all()){
            $rules = [
                'o_pass'=>'required',
            ];
            $message = [
                'o_pass.required'=>'原始密码不能为空',
            ];
            $validator = Validator::make($input,$rules);
            if($validator->passes()){
                echo 'yes';
            }else{
                dd($validator->errors()->all());
            }
        }else{
            return view('admin.pass');
        }
    }
}
