<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
//use App\Http\model\User;
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
            if(strtoupper($input['code']) != $code){
                return view('admin.login')->with('msg','验证码错误');
            }
            session(['is_login'=>true]);
            //dd($code);
            //dd($input);
            return redirect('admin/index');
        }else{
            return view('admin.login');
        }
    }
    public function quit(){}
    public function code(){
        $this->code_obj->make();
    }
}
