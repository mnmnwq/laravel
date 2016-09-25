<?php

namespace App\Http\Controllers\admin;
use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;


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
        $data = Article::orderby('art_id','desc')->paginate(10);
        return view('admin.article.index',compact('data'));
    }

    //post.admin/article  添加文章提交
    public function store(){
        $input = Input::except('_token');
        $input['art_time'] = time();
        $re = Article::create($input);
        if($re){
            return redirect('admin/article/create');
        }else{
            return back()->with('msg','添加失败');
        }
    }

    /**
     * 修改
     * get.admin/article/{article}/edit 编辑文章
     */
    public function edit($art_id){
        $data = $this->cate_obj->tree();
        $field = Article::find($art_id);
        return view('admin.article.edit',compact('data','field'));
    }

    /**
     *  put. admin/article/{article}  更新文章
     */
    public function update($art_id){
        $input = Input::except('_token','_method');
        $result = Article::where('art_id',$art_id)->update($input);
        if($result){
            return redirect('admin/article');
        }else{
            return back()->with('msg','修改失败');
        }
    }

    /**
     * 删除
    * @param $cate_id
     * delete. admin/article/{article} 删除分类
     */
    public function destroy($art_id){
        $re = Article::where('art_id',$art_id)->delete();
        if($re){
            $data = ['status'=>0,'msg'=>'操作成功'];
        }else{
            $data = ['status'=>1,'msg'=>'操作失败'];
        }
        return $data;
    }

    //get.admin/article/create  添加文章
    public function create(){
        $data = $this->cate_obj->tree();
        return view('admin.article.add',compact('data'));
    }
}
