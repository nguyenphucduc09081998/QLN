@extends('admin/master')
@section('content')


<div class="container">

@if($action == "view")
	<div class="xemMatHang">
		<h1>Thông tin mặt hàng</h1>
		<hr>
		<div class="form-group">
			<label for="TenMatHang">Tên Mặt Hàng:</label>
			<input type="text" id="TenMatHang" class="form-control" readonly value="{{$MatHang->TenMatHang}}">
		</div>		
		<div class="form-group">
			<label for="MoTa">Mô tả:</label>
			<textarea class="form-control" readonly>{{$MatHang->MoTa}}
			</textarea>
		</div>
		<div class="form-group">
			<label for="Gia">Giá:</label>
			<input type="text" id="Gia" class="form-control" readonly value="{{$MatHang->Gia}}">
		</div>
		<div class="form-group">
			<label for="XuatXu">Xuất xứ:</label>
			<input type="text" id="XuatXu" class="form-control" readonly value="{{$MatHang->XuatXu}}">
		</div>
		<div class="form-group">
			<label for="SoLuongTon">Số lượng tồn:</label>
			<input type="text" id="SoLuongTon" class="form-control" readonly value="{{$MatHang->SoLuongTon}}">
		</div>
		<div class="form-group">
			<label for="idLoaiMatHang">ID Loại mặt hàng:</label>
			<input type="text" id="idLoaiMatHang" class="form-control" readonly value="{{$MatHang->idLoaiMatHang}}">
		</div>
	</div>
@elseif($action == "add")
	<div class="themMatHang">
		<h1>Thêm mặt hàng</h1>
		
		<hr>
	</div>
@elseif($action == "edit")
	<div class="suaMatHang">
		<h1>Sửa mặt hàng</h1>
		
		<hr>
	</div>
@endif
</div>
@endsection