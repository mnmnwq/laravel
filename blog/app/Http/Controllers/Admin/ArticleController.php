<?php

namespace App\Http\Controllers\admin;
use App\Http\Model\Article;
use Illuminate\Http\Request;

use App\Http\Requests;



class ArticleController extends CommonController
{
    protected $art_obj;
    public function __construct()
    {
        $this->art_obj = new Article();
    }
    //get.admin/article  全部文章列表
    public function index(){
        echo '全部文章';
    }

    //get.admin/article/create  添加文章
    public function create(){
        $data = [];
        return view('admin.article.add',compact('data'));
    }
}
