@extends('layouts/admin')
@section('content')
@include('layouts/adminPubHead/crumbs',['tab'=>'全部文章'])
	<!--结果页快捷搜索框 开始-->
	{{--<div class="search_wrap">
        <form action="" method="post">
            <table class="search_tab">
                <tr>
                    <th width="120">选择分类:</th>
                    <td>
                        <select onchange="javascript:location.href=this.value;">
                            <option value="">全部</option>
                            <option value="http://www.baidu.com">百度</option>
                            <option value="http://www.sina.com">新浪</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>--}}
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <div class="result_title">
                <h3>文章列表</h3>
                @if(session('msg'))
                <div class="mark">{{session('msg')}}</div>
                @endif
            </div>
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>添加文章</a>
                    <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>全部文章</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc">ID</th>
                        <th>标题</th>
                        <th>点击</th>
                        <th>编辑</th>
                        <th>发布时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($data as $v)
                    <tr>
                        <td class="tc">{{$v->art_id}}</td>
                        <td>
                            <a href="#">{{$v->art_title}}</a>
                        </td>
                        <td>{{$v->art_view}}</td>
                        <td>{{$v->art_editor}}</td>
                        <td>{{date('Y-m-d H:i',$v->art_time)}}</td>
                        <td>
                            <a href="{{url('admin/article/'.$v->art_id.'/edit')}}">修改</a>
                            <a href="javascript::" onclick="delCate({{$v->art_id}})">删除</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <div class="page_list">
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </form>
    <style type="text/css">
        .result_content ul li span{
            font-size:15px;
            padding: 6px 12px;
        }
        .result_content ul .active{
            background-color: #337ab7;
                border-color: #337ab7;
        }
    </style>
    <!--搜索结果页面 列表 结束-->
    <script type="text/javascript">
         //删除分类
            function delCate(art_id){
                layer.confirm('您确定要删除这篇文章么？', {
                  btn: ['确定','取消'] //按钮
                }, function(){
                    $.post('{{url('admin/article/')}}/'+art_id,{'_method':'delete','_token':'{{csrf_token()}}'},function(data){
                        if(data.status == 0){
                        location.href = location.href;
                        layer.msg(data.msg, {icon: 6});
                        }else{
                        layer.msg(data.msg, {icon: 5});
                        }
                    });
                  //layer.msg('的确很重要', {icon: 1});
                }, function(){
                });
            }
    </script>
@endsection