<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Hàng lưu niệm H2</title>
			
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		
		<!-- CSS -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/custom_js.js') }}"></script>
		
    </head>
    <body id="login">
			<img class="background" src="/upload/travel-souvenirs-4418221737.jpg"/>
			<a href="{{ url('/') }}"><img class="logo" src="upload/logo.png" width="50" height="50"/></a>
			<div class="login-contain">
				<h1>ĐĂNG NHẬP</h1>
				<form action="{{url('login')}}" id="login-form" method="POST">
					@if($errors->has('errorlogin'))
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{$errors->first('errorlogin')}}
						</div>
					@endif
						<h4>Tên tài khoản:</h4>
						<input type= "text" id="iduser" name="username" placeholder="Tên đăng nhập" value="{{old('username')}}"/></br>
						@if($errors->has('username'))
							<p style="color:red">{{$errors->first('username')}}</p>
						@endif
						<h4>Mật khẩu:</h4>
						<input type= "password" id="password" name="password"/></br>
						@if($errors->has('password'))
							<p style="color:red">{{$errors->first('password')}}</p>
						@endif
						<div class="button-holder">
							<button class="btn btn-info" type="submit" id="loginbutton">Đăng nhập</button>
						</div>
						<a href="{{url('register')}}">Bạn chưa có tài khoản? </a></br>
						<a href="{{url('forget_password')}}">Quên mật khẩu? </a>
						<input type="hidden" name="action" value="login"/>
					{!! csrf_field() !!}
				</form>
			</div>

@include('footer')
