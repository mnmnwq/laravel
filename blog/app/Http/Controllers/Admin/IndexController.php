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

    public function info(){
        return view('admin/info');
    }
}
