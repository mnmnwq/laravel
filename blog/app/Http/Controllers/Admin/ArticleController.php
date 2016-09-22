<?php

namespace App\Http\Controllers\admin;
use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;



class ArticleController extends CommonController
{
    protected $art_obj;
    protected $cate_obj;
    public function __construct()
    {
        $this->art_obj = new Article();
        $this->cate_obj = new Category();
    }
    //get.admin/article  全部文章列表
    public function index(){
        echo '全部文章';
    }

    //get.admin/article/create  添加文章
    public function create(){
        $data = $this->cate_obj->tree();
        return view('admin.article.add',compact('data'));
    }
}
