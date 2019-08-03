@extends('master')
	@section('content')

	<div id="giohang_contain" class="container">
		
		<div class="giohang-info">
			<h1>Giỏ hàng của bạn</h1>
			<table class="table" id="table_giohang" >
				<thead>
					<tr>
						<th>Tên mặt hàng</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				@foreach($mathangs as $mathang)
					<tr>
						<td>{{$mathang->TenMatHang}}</td>
						<td>{{$mathang->Gia}} VNĐ</td>
						<td>{{$mathang->SoLuong}}</td>
						<td>{{$mathang->ThanhTien}} VNĐ</td>
						<td>

							<form method="POST" action='{{url("/giohang/$mathang->id/delete")}}' style="display: inline-block">
								<button onclick="return confirm('Bạn có chắc muốn xóa mặt hàng này không?')" class="btn btn-secondary">
								Xóa
								</button>
								{!! csrf_field() !!}
							</form>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		<div class="row"> 
			<div class="col-md-8">
			</div>
			<div class="col-md-4 calculating">
				<div class="calculating_element">
					<p><b>Tổng tiền:</b> {{$TongTienChuaThue}} VNĐ</p>
					<p><b>Thuế phát sinh(VAT,..):</b> {{$VAT}}  VNĐ</p>
					<p><b>Phí vận chuyển:</b> {{$PhiVanChuyen}} VNĐ</p>
				</div>
				<div class="total_calculating">
					<p><b>Tổng tất cả:</b> {{$TongTien}} VNĐ</p>
				</div>
			</div> 
		</div>
		<div class="cart-action">
			<div class="row">
				<div class="col-md-8">
				</div>
				<div class="col-md-4">
					<a href="{{url('/')}}" class="btn btn-secondary returnbutton">Tiếp tục mua hàng</a>
					<a href="{{url('/thanhtoan')}}" class="btn btn-success checkoutbutton">Checkout đơn hàng</a>
				</div>
					
			
					
			</div>
		</div>
	</div>
@endsection