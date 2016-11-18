<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Article;
use App\Http\Model\Category;
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
        //友情链接
        $links = Links::orderBy('link_order','asc')->get();
        //配置项读取
        return view('home.index',compact('hot_art','data','hot','new_data','links'));
    }

    public function api(){
        echo 111111;
    }

    public function test(){
        return view('home.header');
    }

    /**
     * 列表页
     */
    public function cate($cate_id){
        //查看次数自增
        Category::where('cate_id',$cate_id)->increment('cate_view');
        $field = Category::find($cate_id);
        //图文列表（带分页效果）
        $data = Article::where('cate_id',$cate_id)->orderBy('art_time','desc')->paginate(4);
        //当前分类的子分类
        $submenu = Category::where('cate_pid',$cate_id)->get();
        return view('home.list',compact('field','data','submenu'));
    }

    /**
     * 文章页
     */
    public function article($art_id){
        //查看次数自增
        Article::where('art_id',$art_id)->increment('art_view');
        $field = Article::Join('category','article.cate_id','=','category.cate_id')->where('art_id',$art_id)->first();
        $article['pre'] = Article::where('art_id','<',$art_id)->orderBy('art_id','desc')->first();
        $article['next'] = Article::where('art_id','>',$art_id)->orderBy('art_id','asc')->first();
        $data = Article::where('cate_id',$field->cate_id)->orderBy('art_id','desc')->take(6)->get();
        return view('home.new',compact('field','article','data'));
    }
}
