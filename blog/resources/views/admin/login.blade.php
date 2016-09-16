<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('/resources/views/admin/style/css/ch-ui.admin.css')}}">
	<link rel="stylesheet" href="{{asset('/resources/views/admin/style/font/css/font-awesome.min.css')}}">
	<script type="text/javascript" src="{{asset('/node_modules/angular/angular.min.js')}}"></script>
</head>
<body style="background:#F3F3F4;">
	<div class="login_box" ng-app="myApp">
		<h1>Blog</h1>
		<h2>欢迎使用博客管理平台</h2>
		<div class="form" ng-controller="firstController">
		    @if(isset($msg))
			    <p style="color:red">{{$msg}}</p>
		    @endif
			<form action="" method="post">
			{{csrf_field()}}
				<ul>
					<li>
					<input type="text" name="user_name" class="text" ng-required="true"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="user_pass" class="text" ng-required="true"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code" ng-required="true"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="{{url('admin/code')}}" alt="" ng-click="changeUrl()">
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.houdunwang.com" target="_blank">http://www.houdunwang.com</a></p>
		</div>
	</div>
</body>
<script type="text/javascript">
    angular.module('myApp',[]).controller('firstController',function($scope){
        $scope.changeUrl = function(){
        }
    })
</script>
</html>