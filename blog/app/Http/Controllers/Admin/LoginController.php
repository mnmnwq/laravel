<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\model\USer;
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
            dd($code);
            dd($input);
        }else{
            return view('admin.login');
        }
    }
    public function quit(){}
    public function code(){
        $this->code_obj->make();
    }
}
