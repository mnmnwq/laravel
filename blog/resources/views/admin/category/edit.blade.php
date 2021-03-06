@extends('layouts/admin')
@section('content')
@include('layouts/adminPubHead/crumbs',['tab'=>'编辑文章分类'])
<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>分类管理</h3>
            @if(session('msg'))
            <p style="color:red">{{session('msg')}}</p>
            @endif
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>增加分类</a>
                <a href="{{url('admin/category')}}"><i class="fa fa-recycle"></i>全部分类</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap" ng-app="myApp">
        <form action="{{url('admin/category/'.$field->cate_id)}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put"/>
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120"><i class="require">*</i>父级分类：</th>
                        <td>
                            <select name="cate_pid">
                                <option value="0">==顶级分类==</option>
                                @foreach($data as $k=>$v)
                                <option value="{{$v['cate_id']}}" @if($field->cate_pid == $v->cate_id) selected @endif >{{$v['cate_name']}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>分类名称：</th>
                        <td>
                            <input type="text" name="cate_name" value="{{$field->cate_name}}" ng-required="true">
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类名称必须填写</span>
                        </td>
                    </tr>
                    <tr>
                        <th>分类标题：</th>
                        <td>
                            <input type="text" class="lg" value="{{$field->cate_title}}" name="cate_title">
                            {{--<p>标题可以写30个字</p>--}}
                        </td>
                    </tr>
                    <tr>
                        <th>关键词：</th>
                        <td>
                            <textarea name="cate_keywords">{{$field->cate_keywords}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>关键词描述：</th>
                        <td>
                            <textarea name="cate_description">{{$field->cate_description}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>排序：</th>
                        <td>
                            <input type="text" class="sm" name="cate_order" ng-required="true" value="{{$field->cate_order}}">
                            {{--<span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>--}}
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <script type="text/javascript">
    angular.module('myApp',[]).controller('firstController',function(){})
    </script>
@endsection