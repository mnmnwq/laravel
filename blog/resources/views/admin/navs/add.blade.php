@extends('layouts/admin')
@section('content')
@include('layouts/adminPubHead/crumbs',['tab'=>'自定义导航管理'])
<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>自定义导航添加</h3>
            @if(isset($msg))
            <div class="mark">{{$msg}}</div>
            @endif
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/navs/create')}}"><i class="fa fa-plus"></i>增加导航</a>
                <a href="{{url('admin/navs')}}"><i class="fa fa-recycle"></i>全部导航</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap" ng-app="myApp">
        <form action="{{url('admin/navs')}}" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th><i class="require">*</i>导航名称：</th>
                        <td>
                            <input type="text" name="nav_name" ng-required="true">
                            <input type="text" name="nav_alias" class="sm" >
                            <span><i class="fa fa-exclamation-circle yellow"></i>导航名称必须填写</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>Url：</th>
                        <td>
                            <input type="text" name="nav_url" class="lg" ng-required="true">
                        </td>
                    </tr>
                    <tr>
                        <th>导航排序：</th>
                        <td>
                            <input type="text" class="sm" name="nav_order" ng-required="true">
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
    angular.module('myApp',[])
    </script>
@endsection