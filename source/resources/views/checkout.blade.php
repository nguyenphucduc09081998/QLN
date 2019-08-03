@extends('master')
	@section('content')
		<div class="container">
			
			<div class="registered_customer">
				
				<h1>Thanh toán</h1>
				<form method="POST" action="/complete-checkout">
					<label for="iduser_checkout"><b> Họ và tên: </b></label><br>
					<input type="text" id="iduser_checkout" name="HoVaTen" value="{{$user->HoVaTen}}" required><br><br>
					<label  for="email_checkout"><b>Email:</b></label><br>
					<input type="text" id="email_checkout" name="Email" value="{{$user->email}}" required><br><br>
					<label  for="address_checkout"><b>Địa chỉ giao hàng: </b></label><br>
					<input type="text" id="address_checkout" name="DiaChi" required
					
					@if ($user->id)
					
					value="{{$user->DiaChi . " - " .$user->Quan. " - " . $user->ThanhPho}}"
					
					@else 
					
					value=""
				
					@endif
					
					><br><br>
					<label  for="phone_checkout"><b>Số điện thoại liên hệ:</b></label><br>
					<input type="text" id="phone_checkout" name="SoDienThoai" value="{{$user->SoDienThoai}}" required><br><br>
					<label  for="date_of_delivery"><b>Ngày giao hàng:</b></label><br>
					<input type="text" id="date_of_delivery" name="NgayGiaoHang" readonly value="<?php echo date('d-m-Y', strtotime('+ 2 days')) ?>" required><br><br>
					<h5 id="total_checkout"><b>Tổng tiền:</b>   <span>{{$TongTien}} VNĐ</span></h5>
					<div style="text-align: center;">
					<a href="{{url('/giohang')}}"class="btn btn-secondary button_checkout">Quay lại</a>
					<button class="btn btn-success button_checkout">Check out</button>		
					</div>			

					{!! csrf_field() !!}
				</form>	
			</div>	
		</div>
@endsection