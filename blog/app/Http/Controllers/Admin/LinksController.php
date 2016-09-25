<?php
namespace App\Http\Controllers\Admin;
use App\Http\Model\Links;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class LinksController extends CommonController
{
    /**
     * 信息列表
     */
    public function index(){
        $data = Links::orderBy('link_order','asc')->get();
        return view('admin.links.index',compact('data'));
    }

    /**
     * 删除友情链接
     * delete. admin/links/{links} 删除友情链接
     */
    public function destroy($link_id){
        $re = Links::where('link_id',$link_id)->delete();
        if($re){
            $data = ['status'=>0,'msg'=>'操作成功'];
        }else{
            $data = ['status'=>1,'msg'=>'操作失败'];
        }
        return $data;
    }

    /**
     * get.admin/links/create  添加
     */
    public function create(){
        return view('admin/links/add',compact('data'));
    }

    /**
     * post.admin/links  添加信息提交
     */
    public function store(){
        $input = Input::except('_token');
        $add_result = Links::create($input);
        if($add_result){
            return redirect('admin/links');
        }else{
            return back('admin/links/create')->with('msg','添加失败');
        }
    }

    /**
     * get.admin/links/{links}/edit 编辑信息
     */
    public function edit($link_id){
        $field = Links::find($link_id);
        return view('admin.links.edit',compact('field'));
    }

    /**
     *  put. admin/links/{links}  更新信息
     */
    public function update($link_id){
        $input = Input::except('_token','_method');
        $result = Links::where('link_id',$link_id)->update($input);
        if($result){
            return redirect('admin/links');
        }else{
            return back()->with('msg','修改失败');
        }
    }

    /**
     * get. admin/links/{links}  显示单个友情链接
     */
    public function show(){}

    /**
     * ajax请求修改分类order排序
     * time:2016/9/17 17:38
     */
    public function change_order(){
        $input = Input::all();
        $result = Links::where('link_id',$input['link_id'])->update(array('link_order'=>$input['link_order']));
        if($result){
            $data = ['state'=>'0','msg'=>'排序更新成功'];
        }else{
            $data = ['state'=>'1','msg'=>'排序更新失败'];
        }
        return $data;
    }
}
