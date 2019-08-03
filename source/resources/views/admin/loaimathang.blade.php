@extends('admin/master')
@section('content')


<div class="container">

@if($action == "view")
	<div class="xemLoaiMatHang">
		<h1>Thông tin loại mặt hàng</h1>
		<hr>
		<div class="form-group">
			<label for="TenLoaiMatHang">Tên Loại Mặt Hàng:</label>
			<input type="text" id="TenLoaiMatHang" class="form-control" readonly value="{{$TenLoaiMatHang->TenLoaiMatHang}}">
		</div>		
	</div>
@elseif($action == "add")
	<div class="themLoaiMatHang">
		<h1>Thêm loại mặt hàng</h1>
		
		<hr>
	</div>
@elseif($action == "edit")
	<div class="suaLoaiMatHang">
		<h1>Sửa loại mặt hàng</h1>
		
		<hr>
	</div>
@endif
</div>
@endsection