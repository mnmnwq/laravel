@extends('layouts/admin')
@section('content')
@include('layouts/adminPubHead/crumbs',['tab'=>'文章管理'])
<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>编辑文章</h3>
            @if(session('msg'))
            <div class="mark">{{session('msg')}}</div>
            @endif
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>增加文章</a>
                <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>全部文章</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap" ng-app="myApp">
        <form action="{{url('admin/article/'.$field->art_id)}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="put"/>
            <table class="add_tab">
                <tbody>
                    <tr>
                        <th width="120">分类：</th>
                        <td>
                            <select name="cate_id">
                                @foreach($data as $k=>$v)
                                <option value="{{$v['cate_id']}}" @if($v['cate_id']==$field->cate_id)selected @endif>{{$v['_cate_name']}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>文章标题：</th>
                        <td>
                            <input type="text" class="lg" name="art_title" value="{{$field->art_title}}" ng-required="true">
                            {{--<p>标题可以写30个字</p>--}}
                        </td>
                    </tr>
                    <tr>
                        <th>编辑：</th>
                        <td>
                            <input type="text" class="sm" name="art_editor" value="{{$field->art_editor}}" ng-required="true">
                            {{--<span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>--}}
                        </td>
                    </tr>
                    <tr>
                        <th>缩略图：</th>
                        <td>
                            <input type="text" size="50" name="art_thumb" readonly="true" value="{{$field->art_thumb}}">
                            <input id="file_upload" name="file_upload" type="file" multiple="true" >
                            <script src="{{asset('resources/org/uploadify/jquery.uploadify.min.js')}}" type="text/javascript"></script>
                            <link rel="stylesheet" type="text/css" href="{{asset('resources/org/uploadify/uploadify.css')}}">
                            <script type="text/javascript">
                            		<?php $timestamp = time();?>
                            		$(function() {
                            			$('#file_upload').uploadify({
                            			    'buttonText' : '选择图片',
                            				'formData'     : {
                            					'timestamp' : '<?php echo $timestamp;?>',
                            					'_token'     : '{{csrf_token()}}'
                            				},
                            				'swf'      : '{{asset('resources/org/uploadify/uploadify.swf')}}',
                            				'uploader' : '{{url('admin/upload')}}',
                            				'onUploadSuccess' : function(file,data,response){
                            				$('input[name=art_thumb]').val(data);
                            				$('#art_thumb_img').attr('src','/'+data);
                            				}
                            			});
                            		});
                            </script>
                            <style>
                            .uploadify{display:inline-block;}
                            .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
                            table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
                            </style>
                            {{--<p>标题可以写30个字</p>--}}
                        </td>
                    </tr>
                     <tr>
                        <th></th>
                        <td>
                            <img src="/{{$field->art_thumb}}" id="art_thumb_img" alt="" style="max-width: 350px;max-height: 100px;"/>
                        </td>
                    </tr>
                    <tr>
                        <th>关键词：</th>
                        <td>
                            <input type="text" value='{{$field->art_keywords}}' class="lg" name="art_keywords">
                        </td>
                    </tr>
                    <tr>
                        <th>描述：</th>
                        <td>
                            <textarea name="art_description">{{$field->art_description}}</textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>文章内容：</th>
                        <td>
                        <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.config.js')}}"></script>
                            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/ueditor.all.min.js')}}"> </script>
                            <script type="text/javascript" charset="utf-8" src="{{asset('resources/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                            <script id="editor" name="art_content" type="text/plain" style="width:860px;height:500px;" ng-required="true">{!!$field->art_content!!}</script>
                            <script type="text/javascript">
                                    var ue = UE.getEditor('editor');
                            </script>
                            <style>
                                .edui-default{line-height: 28px;}
                                div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                                {overflow: hidden; height:20px;}
                                div.edui-box{overflow: hidden; height:22px;}
                            </style>
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