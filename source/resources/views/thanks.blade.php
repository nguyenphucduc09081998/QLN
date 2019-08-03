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
    <body id="thanks">
			<img class="background" src="/upload/thanks.jpg"/>
			<a href="{{ url('/') }}"><img class="logo" src="upload/logo.png" width="50" height="50"/></a>
			<div class="login-contain">
				<form id="login-form" method="POST">
						<h4><b>Bạn đã đặt hàng thành công!</b><h4>
						<h4><b>Cám ơn bạn đã ủng hộ chúng tôi!</b></h4>
						
						<div class="back-holder">
							<a href= "{{url('/')}}" class="btn btn-info" id="backbutton">Tiếp tục mua hàng</a>
						</div>		
				</form>
			</div>
			
@include('footer')