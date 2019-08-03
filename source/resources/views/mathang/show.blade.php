@extends('master')
	@section('content')
	<div id="mathang_contain" class="container">
		<div class="section1 row">
			<div class = "mathang_imgs col-md-6">
				<div class="owl-carousel owl-theme">
					@foreach($hinhanhs as $hinhanh)
						<div class="main_img item">
							<img src="{{$hinhanh->URL}}">
						</div>
					@endforeach
				</div>
			</div>
			<div class = "mathang_desc col-md-6">
				<div class="title">
					<h1>{{$mathang->TenMatHang}}<h1>
				</div>
				<div class="xuatxu">
					<label>Xuất xứ:</label> <span>{{$mathang->XuatXu}}</span>
				</div>
				<div class="xuatxu">
					<label>Loại mặt hàng:</label> <span>{{$loaimathang->TenLoaiMatHang}}</span>
				</div>
				<div class="description">
				
					<p>
					<label>Mô tả:</label> 
					{{$mathang->MoTa}}
					</p>
				</div>
				<div class="price">
					<h2>{{$mathang->Gia}} vnđ</h2>
				</div>
				<div class="add_to_card form-group">
					<label class="">Số lượng:</label> 
					<input class="soluong form-control" type="number" name="soluong" max="99" min="1" id="soluong" value="1"/>
					<button class="btn btn-warning add_to_cart_btn_with_quantity" id="addToCart" value="{{$mathang->id}}">Thêm vào giỏ</button>
				</div>
			</div>
		</div>
		
		
		<div class="section2">
			<div class="container">
				<div class="danhgia">
					<h3>Đánh giá</h3>
					@foreach($danhgias as $danhgia)
					<div class="comment row">
						<div class="col-md-1"> 
							<img class="user-avatar" href="#" src="/upload/user_avatar.jpg"/>
						</div>
						<div class="col-md-11">
						@foreach($danhgia['KhachHang'] as $KhachHang)
							<p><b>{{$KhachHang->username}}</b><p/>
							<p class="comment-content" >{{$danhgia->NoiDung}}</p>
						@endforeach
						</div>
					</div>
					@endforeach
				</div>
				@if (Auth::check())
				<div class="cauhoi">
					<label class="ask-header">Bình luận</label>
					<div>
						<form action="{{url('comment')}}" id="comment-form" method="POST">
							<input type="hidden" name="idMatHang" value= "{{$mathang->id}}">
							<input type="hidden" name="idKhachHang" value= "{{Auth::user()->id}}">			
							<textarea class="form-control ask-field" row="5" cols="50" placeholder="Bạn cảm thấy như thế nào về mặt hàng này?" name="NoiDung"></textarea>
							<label id="rating">Đánh giá</label>
							<input class="form-control rating-input" type="number" min="1" max="10" step="1" name="Rating" ><br>
							<button class="btn btn-ask" type="submit"><b>Gửi đánh giá</b> </button>
							{!! csrf_field() !!}
						</form>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
@endsection
