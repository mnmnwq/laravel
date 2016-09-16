<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;

class IndexController extends CommonController
{
    //后台首页
    public function index(){
        dd(session('is_login'));
        return view('admin.index');
    }
}
