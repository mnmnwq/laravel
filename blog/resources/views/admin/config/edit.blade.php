@extends('layouts/admin')
@section('content')
@include('layouts/adminPubHead/crumbs',['tab'=>'配置项管理'])
<!--结果集标题与配置项组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>修改配置项</h3>
            @if(session('msg'))
            <p style="color:red">{{session('msg')}}</p>
            @endif
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/config/create')}}"><i class="fa fa-plus"></i>增加配置项</a>
                <a href="{{url('admin/config')}}"><i class="fa fa-recycle"></i>全部配置项</a>
            </div>
        </div>
    </div>
    <!--结果集标题与配置项组件 结束-->

    <div class="result_wrap" ng-app="myApp">
        <form action="{{url('admin/config/'.$field->conf_id)}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            {{--<input type="hidden" name="_method" value="put"/>--}}
            <table class="add_tab">
                <tbody>
                     <tr>
                        <th><i class="require">*</i>标题：</th>
                        <td>
                            <input type="text" name="conf_title" value="{{$field->conf_title}}" ng-required="true">
                            <span><i class="fa fa-exclamation-circle yellow"></i>配置项标题必须填写</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>名称：</th>
                        <td>
                            <input type="text" name="conf_name" ng-required="true" value="{{$field->conf_name}}">
                            <span><i class="fa fa-exclamation-circle yellow"></i>配置项名称必须填写</span>
                        </td>
                    </tr>
                    <tr>
                        <th>字段类型：</th>
                        <td>
                            <input type="radio" name="field_type" value="input" ng-model="data.radio" @if($field->field_type=='input')ng-checked="true"@endif/>input&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="field_type" value="textarea" ng-model="data.radio" @if($field->field_type=='textarea')ng-checked="true"@endif/>textarea&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="field_type" value="radio" ng-model="data.radio" @if($field->field_type=='radio')ng-checked="true"@endif/>radio
                            <span><i class="fa fa-exclamation-circle yellow"></i>字段类型:input textarea radio</span>
                        </td>
                    </tr>
                    <tr>
                        <th>类型值：</th>
                        <td>
                            <input type="text" class="lg" name="field_value" ng-show="data.radio=='radio'" value="{{$field->field_value}}">
                            <p><i class="fa fa-exclamation-circle yellow"></i>只有在radio的情况下才需要配置;格式: 1|开启，0|关闭</p>
                        </td>
                    </tr>
                    <tr>
                        <th>排序：</th>
                        <td>
                            <input type="text" class="sm" name="conf_order" ng-required="true" value="{{$field->conf_order}}" value="0">
                        </td>
                    </tr>
                    <tr>
                        <th>说明：</th>
                        <td>
                            <textarea name="conf_tips" id="" cols="30" rows="10">{{$field->conf_tips}}</textarea>
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