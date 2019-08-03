@extends('admin/master')
@section('content')


<div class="container">
	<div class="xemDonHang">
		<h1>Thông tin đơn hàng</h1>
		<hr>
		
		<div class="form-group">
			<label for="ID">ID Đơn hàng:</label>
			<input type="text" id="ID" class="form-control" readonly value="{{$donhang->id}}">
		</div>
		<div class="form-group">
			<label for="idNguoiDung">ID Người dùng:</label>
			<input type="text" id="idNguoiDung" class="form-control" readonly value="{{$donhang->idNguoiDung}}">
		</div>
		<div class="form-group">
			<label for="HoVaTen">Tên người dùng:</label>
			<input type="text" id="HoVaTen" class="form-control" readonly value="{{$donhang->HoVaTen}}">
		</div>
		<div class="form-group">
			<label for="Email">Email:</label>
			<input type="text" id="Email" class="form-control" readonly value="{{$donhang->Email}}">
		</div>
		<div class="form-group">
			<label for="DiaChi">Địa chỉ:</label>
			<input type="text" id="DiaChi" class="form-control" readonly value="{{$donhang->DiaChi}}">
		</div>
		<div class="form-group">
			<label for="SoDienThoai">Số điện thoại:</label>
			<input type="text" id="SoDienThoai" class="form-control" readonly value="{{$donhang->SoDienThoai}}">
		</div>
		<div class="form-group">
			<label for="TongTien">Tổng tiền:</label>
			<input type="text" id="TongTien" class="form-control" readonly value="{{$donhang->TongTien}}">
		</div>
		<div class="form-group">
			<label for="VAT">VAT:</label>
			<input type="text" id="VAT" class="form-control" readonly value="{{$donhang->VAT}}">
		</div>
		<div class="form-group">
			<label for="PhiVanChuyen">Phí vận chuyển:</label>
			<input type="text" id="PhiVanChuyen" class="form-control" readonly value="{{$donhang->PhiVanChuyen}}">
		</div>
		<div class="form-group">
			<label for="TrangThai">Trạng thái:</label>
			<input type="text" id="TrangThai" class="form-control" readonly value="{{$donhang->TrangThai}}">
		</div>
		<div>
		<h1> Chi tiết đơn hàng</h1>
		
		<hr>
	</div>
	<div class="quanly" >
		<!--<a href='{{url("/admin/loaimathang/create")}}' class="btn btn-success addbutton">Thêm loại mặt hàng</a>-->
		<div class="producttype-info">
			<table class="datatable" id="table_id" >
				<thead>
					<tr>
						<th>ID</th>
						<th>ID Đơn hàng</th>
						<th>Tên mặt hàng</th>
						<th>Số lượng</th>
						<th>Dịch vụ</th>
					</tr>
				</thead>
				<tbody>
					@foreach($chitietdonhangs as $chitietdonhang)
						@foreach($chitietdonhang['MatHang'] as $MatHang)
					<tr>
						<td>{{$chitietdonhang->id}}</td>
						<td>{{$chitietdonhang->idDonHang}}</td>						
						<td>{{$MatHang->TenMatHang}}</td>
						<td>{{$chitietdonhang->SoLuong}}</td>
						<td>{{$chitietdonhang->DichVu}}</td>						
					</tr>
					@endforeach
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	</div>
</div>
@endsection