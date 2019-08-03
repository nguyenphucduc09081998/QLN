@extends('admin/master')
@section('content')


<div class="container">
	<div class="xemLoaiMatHang">
		<h1>Thông tin loại mặt hàng</h1>
		<hr>
		
		<div class="form-group">
			<label for="TenLoaiMatHang">Tên loại mặt hàng:</label>
			<input type="text" id="TenLoaiMatHang" class="form-control" readonly value="{{$loaimathang->TenLoaiMatHang}}">
		</div>
	</div>
</div>
@endsection