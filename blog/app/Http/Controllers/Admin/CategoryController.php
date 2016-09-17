<?php
/**
 * 后台分类控制器
 * time 2016/9/17
 */
namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CategoryController extends CommonController
{
    protected $cate_obj;
    public function __construct(){
        $this->cate_obj = new Category();
    }
    //get.admin/category 全部分类列表
    public function index(){
        $cate_info = Category::all();
        $data = $this->cate_obj->get_tree($cate_info,'cate_name','cate_id','cate_pid');
        return view('admin.category.index')->with('data',$data);
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

    /**
     * ajax请求修改分类order排序
     * time:2016/9/17 17:38
     */
    public function change_order(){
        $input = Input::all();
        $result = Category::where('cate_id',$input['cate_id'])->update(array('cate_order'=>$input['cate_order']));
        if($result){
            $data = ['state'=>'0','msg'=>'排序更新成功'];
        }else{
            $data = ['state'=>'1','msg'=>'排序更新失败'];
        }
        return $data;
    }
}