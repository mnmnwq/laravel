<?php
/**
 * 后台分类控制器
 * time 2016/9/17
 */
namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends CommonController
{
    //get.admin/category 全部分类列表
    public function index(){
        $cate_info = Category::all();

        dd($cate_info);
    }

    //post.admin/category
    public function store(){}

    //get.admin/category/create  添加分类
    public function create(){}

    //put. admin/category/{category}  更新分类
    public function update(){}

    //delete. admin/category/{category} 删除分类
    public function destory(){}

    //get. admin/category/{category}  显示单个分类信息
    public function show(){}

    //get.admin/category/{category}/edit 编辑分类
    public function edit(){}
}
