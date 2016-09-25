<?php
namespace App\Http\Controllers\Admin;
use App\Http\Model\Navs;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class NavsController extends CommonController
{
    /**
     * 信息列表
     */
    public function index(){
        $data = Navs::orderBy('nav_order','asc')->get();
        return view('admin.navs.index',compact('data'));
    }

    /**
     * 删除自定义导航
     * delete. admin/navs/{navs} 删除自定义导航
     */
    public function destroy($nav_id){
        $re = Navs::where('nav_id',$nav_id)->delete();
        if($re){
            $data = ['status'=>0,'msg'=>'操作成功'];
        }else{
            $data = ['status'=>1,'msg'=>'操作失败'];
        }
        return $data;
    }

    /**
     * get.admin/navs/create  添加
     */
    public function create(){
        return view('admin/navs/add',compact('data'));
    }

    /**
     * post.admin/navs  添加信息提交
     */
    public function store(){
        $input = Input::except('_token');
        $add_result = Navs::create($input);
        if($add_result){
            return redirect('admin/navs');
        }else{
            return back('admin/navs/create')->with('msg','添加失败');
        }
    }

    /**
     * get.admin/navs/{navs}/edit 编辑信息
     */
    public function edit($nav_id){
        $field = Navs::find($nav_id);
        return view('admin.navs.edit',compact('field'));
    }

    /**
     *  put. admin/navs/{navs}  更新信息
     */
    public function update($nav_id){
        $input = Input::except('_token','_method');
        $result = Navs::where('nav_id',$nav_id)->update($input);
        if($result){
            return redirect('admin/navs');
        }else{
            return back()->with('msg','修改失败');
        }
    }

    /**
     * get. admin/navs/{navs}  显示单个自定义导航
     */
    public function show(){}

    /**
     * ajax请求修改分类order排序
     * time:2016/9/17 17:38
     */
    public function change_order(){
        $input = Input::all();
        $result = Navs::where('nav_id',$input['nav_id'])->update(array('nav_order'=>$input['nav_order']));
        if($result){
            $data = ['state'=>'0','msg'=>'排序更新成功'];
        }else{
            $data = ['state'=>'1','msg'=>'排序更新失败'];
        }
        return $data;
    }
}
