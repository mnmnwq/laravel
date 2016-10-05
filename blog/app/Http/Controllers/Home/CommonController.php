<?php

namespace App\Http\Controllers\Home;
use App\Http\Model\Navs;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    public function __construct(){
        $nav =  Navs::orderBy('nav_order')->get();
        //把$nav分享到每个view页面
        View::share('nav',$nav);
    }
}
