<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Hàng lưu niệm H2</title>
			
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
		<!-- CSS -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/custom_js.js') }}"></script>
		
		<!-- Owlcarousel2 -->
		<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
		<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
		
		<!-- Data Table -->
		<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
		
    </head>
    <body>
	<header>
		<div class="header-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<a href="{{url('/')}}"><img src="/upload/logo.png" width="50" height="50"></a>
					</div>
					<div class="col-md-5" id="search-menu">
						<form action="{{url('search')}}" id="search-form" method="POST">
							<input type="text" placeholder="Tìm sản phẩm" id="searchproduct" name="searchproduct"/>
							<button class="btn" id="searchbutton"><b>Tìm</b></button>
							{!! csrf_field() !!}
						</form>
					</div>
					<div class="col-md-5" id="info-menu">
						
						<li><img src="/upload/phone.png" width="25" height="25"/>0964.030.602</li>
						
						@if($user = Auth::user())
							<li><img src="/upload/sign_out.png" width="25" height="25"/><a href="{{url('logout')}}"> Đăng Xuất</a></li>
							@if($user->Role==1)
								<li><img src="/upload/sign_in.png" width="25" height="25"/><a href="{{url('admin')}}"> Admin page</a></li>
							@else
								<li><a href="{{url('giohang')}}"><img src="/upload/product.png" width="25" height="25"/>
									<span id="total_cart_items"><?php
									if(session('Cart')){
										$total_cart_items = 0;

										foreach(session('Cart') as $product){
											$total_cart_items += $product[1];
										}
										echo $total_cart_items ;
									}
									?></span>
								</a></li>
							@endif
						@else
						<li><img src="/upload/sign_in.png" width="25" height="25"/><a href="{{url('login')}}"> Đăng nhập</a></li>
						<li><a href="{{url('giohang')}}"><img src="/upload/product.png" width="25" height="25"/>
							<span id="total_cart_items"><?php
							if(session('Cart')){
								$total_cart_items = 0;

								foreach(session('Cart') as $product){
									$total_cart_items += $product[1];
								}
								echo $total_cart_items ;
							}
							?></span>
						</a></li>
						@endif
					</div>
				</div>
			</div>
		</div>
		<nav class="row nav-menu">
			<div class="product-type col-sm-2">
				<a href=""><b>Dây chuyền</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Nhẫn</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Quần áo</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Đồng hồ</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Vòng tay</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Gấu bông</b></a>
			</div>
		</nav>
	</header>