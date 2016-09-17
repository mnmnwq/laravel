<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends CommonController
{
    //后台首页
    public function index(){
        return view('admin.index');
    }

    /**
     * 修改管理员密码
     */
    public function pass(){
        return view('admin.pass');
    }


    public function info(){
        return view('admin.info');
    }
}
