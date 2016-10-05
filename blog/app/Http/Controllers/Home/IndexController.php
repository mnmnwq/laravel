<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Config;
use App\Http\Model\Links;

class IndexController extends CommonController
{
    public function __construct(){
        parent::__construct();
    }

    /**
     * 首页
     */
    public function index(){
        //点击量最高的六篇文章
        $hot_art = Article::orderBy('art_view','desc')->take(6)->get();
        //图文列表（带分页效果）
        $data = Article::orderBy('art_time','desc')->paginate(5);
        //最新发布文章（八篇）
        $new_data = Article::orderBy('art_time','desc')->take(8)->get();
        //友情链接
        $links = Links::orderBy('link_order','asc')->get();
        //配置项读取

        return view('home.index',compact('hot_art','data','new_data','links'));
    }

    /**
     * 列表页
     */
    public function cate(){
        return view('home.list');
    }

    /**
     * 文章页
     */
    public function article(){
        return view('home.new');
    }
}
