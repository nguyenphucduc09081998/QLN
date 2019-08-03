@extends('master')
	@section('content')
	<div class="container" id="search_contain">
		<h1 class="type_header">Các sản phẩm tìm được</h1>
		<div>
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
								<button class="btn btn-warning add_to_cart_btn"><h5>Thêm vào giỏ</h5></button>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			
		</div>
	</div>
@endsection