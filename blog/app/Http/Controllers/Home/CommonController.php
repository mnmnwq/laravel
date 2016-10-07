<?php

namespace App\Http\Controllers\Home;
use App\Http\Model\Article;
use App\Http\Model\Navs;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    public function __construct(){
        $nav =  Navs::orderBy('nav_order')->get();
        $hot = Article::orderBy('art_view','desc')->take(5)->get();
        //最新发布文章（八篇）
        $new_data = Article::orderBy('art_time','desc')->take(8)->get();
        //把$nav分享到每个view页面
        View::share('nav',$nav);
        View::share('hot',$hot);
        View::share('new_data',$new_data);
    }
}
