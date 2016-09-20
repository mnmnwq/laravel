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
use Illuminate\Support\Facades\Validator;

class CategoryController extends CommonController
{
    protected $cate_obj;
    public function __construct(){
        $this->cate_obj = new Category();
    }
    //get.admin/category 全部分类列表
    public function index(){
        $data = $this->cate_obj->tree();
        return view('admin.category.index')->with('data',$data);
    }

    //get.admin/category/create  添加分类
    public function create(){
        $data = Category::where('cate_pid',0)->get();
        return view('admin.category.add',compact('data'));
    }

    //post.admin/category  添加分类提交
    public function store(){
        $input = Input::except('_token');
        $add_result = Category::create($input);
        if($add_result){
            return redirect('admin/category');
        }else{
            return view('admin.category.add')->with('msg','添加失败');
        }
    }

    //put. admin/category/{category}  更新分类
    public function update($cate_id){
        $input = Input::except('_token','_method');
        $result = Category::where('cate_id',$cate_id)->update($input);
        if($result){
            return redirect('admin/category');
        }else{
            return back()->with('msg','修改失败');
        }
    }

    //get.admin/category/{category}/edit 编辑分类
    public function edit($cate_id){
        $field = Category::find($cate_id);
        $data = Category::where('cate_pid',0)->get();
        return view('admin.category.edit',compact('field','data'));
    }

    //delete. admin/category/{category} 删除分类
    public function destroy($cate_id){
        $re = Category::where('cate_id',$cate_id)->delete();
        Category::where('cate_pid',$cate_id)->update(['cate_pid'=>0]);
        if($re){
            $data = ['status'=>0,'msg'=>'操作成功'];
        }else{
            $data = ['status'=>1,'msg'=>'操作失败'];
        }
        return $data;
    }

    //get. admin/category/{category}  显示单个分类信息
    public function show(){}

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
