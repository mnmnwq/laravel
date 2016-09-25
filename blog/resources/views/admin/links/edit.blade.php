@extends('layouts/admin')
@section('content')
@include('layouts/adminPubHead/crumbs',['tab'=>'友情链接管理'])
<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>修改链接</h3>
            @if(session('msg'))
            <p style="color:red">{{session('msg')}}</p>
            @endif
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/links/create')}}"><i class="fa fa-plus"></i>增加链接</a>
                <a href="{{url('admin/links')}}"><i class="fa fa-recycle"></i>全部链接</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap" ng-app="myApp">
        <form action="{{url('admin/links/'.$field->link_id)}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put"/>
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th><i class="require">*</i>链接名称：</th>
                        <td>
                            <input type="text" name="link_name" value="{{$field->link_name}}" ng-required="true">
                            <span><i class="fa fa-exclamation-circle yellow"></i>分类名称必须填写</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>Url：</th>
                        <td>
                        <input type="text" name="link_url"  class="lg" value="{{$field->link_url}}" ng-required="true">
                        </td>
                    </tr>
                    <tr>
                        <th>链接标题：</th>
                        <td>
                            <input type="text" class="lg" value="{{$field->link_title}}" name="link_title">
                            {{--<p>标题可以写30个字</p>--}}
                        </td>
                    </tr>
                    <tr>
                        <th>链接排序：</th>
                        <td>
                            <input type="text" class="sm" name="link_order" ng-required="true" value="{{$field->link_order}}">
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