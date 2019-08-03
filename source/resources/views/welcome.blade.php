@extends('master')
	@section('content')
	<div id="hp">
		<div class="hp_fullwidth_img">
			<h2>H2 MANG CẢ THẾ GIỚI ĐẾN VỚI NHÀ CỦA BẠN</h2>
		</div>
		<div class="section1">
			<div class="container">
				<h1>Hàng nghìn những món đồ lưu niệm</h1>
				<div class="row">
					@foreach ($loaimathangs as $loaimathang)
					<a href="/loaimathang/{{$loaimathang->id}}" class="col-md-4 hp_s1_product">
						<img src="{{$loaimathang->hinhAnh}}">
						<h4>{{$loaimathang->TenLoaiMatHang}}</h4>
					</a>
					@endforeach
				</div>
				
			</div>
		</div>
		
		<div class="section2">
			<div class="container">
				<h1>Sản phẩm nổi bật</h1>
				<!----------------Chỗ này sẽ làm slider carosel-------------------->
				
				<div class="row owl-carousel">
				
				@foreach($mathangs as $mathang)
					<div class="hp_s2_product item">
						<a href="/mathang/{{$mathang->id}}">
							<img src="{{$mathang->HinhAnh}}">
							<h4><b>{{$mathang->TenMatHang}}</b></h4>
							<div>Giá: <b>{{$mathang->Gia}} VNĐ</b></div>
						</a>
						
						Đánh giá:<span class="rating"> 7.6</span></br>
						<button class="btn btn-warning add_to_cart_btn" value="{{$mathang->id}}"><h5>Thêm vào giỏ</h5></button>
					</div>
				@endforeach
				</div>
				
				
			</div>
		</div>

		<div class="section3">
			<a href="">
			<h1>Tặng quà</h1>
			<a/>
		</div>
	</div>
	

@endsection
