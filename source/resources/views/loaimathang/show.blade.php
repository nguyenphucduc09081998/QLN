@extends('master')
	@section('content')
	<div id="loaimathang_contain" class="container">
		<h1 class="type_header">{{$loaimathang->TenLoaiMatHang}}</h1>
		<div id="allmathang_contain">
			<div class="row">
				
				@foreach($mathangs as $mathang)
					<div class="col-md-4">
						<div class="product-info">
							<a href="/mathang/{{$mathang->id}}">	
								<div class="owl-carousel owl-theme">
								@foreach($mathang['HinhAnh'] as $HinhAnh)
									<div class="item">
										<img src="{{$HinhAnh->URL}}">
									</div>
								@endforeach								
								</div>
							</a>
							<div class="product_elements">
								<h3>Tên mặt hàng: {{$mathang->TenMatHang}}<h3>
								<p>Xuất xứ: {{$mathang->XuatXu}}</p>
								<p>Giá: {{$mathang->Gia}}</p>
								<button class="btn btn-warning add_to_cart_btn" value="{{$mathang->id}}"><h5>Thêm vào giỏ</h5></button>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			
		</div>
			
	</div>
	
	
@endsection