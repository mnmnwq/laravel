<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
require_once('resources/org/code/Code.class.php');

class LoginController extends CommonController
{
    protected $code_obj;
    public function __construct(){
        $this->code_obj = new \Code;
    }
    public function login(){
        return view('admin.login');
    }
    public function quit(){}
    public function code(){
        $this->code_obj->make();
    }
}
