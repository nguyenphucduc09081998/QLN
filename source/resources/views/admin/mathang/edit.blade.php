@extends('admin/master')
@section('content')

<div class="container">
	<div class="suaMatHang">
		<h1>Sửa mặt hàng</h1>
		<hr>
		<form action='{{url("/admin/mathang/$mathang->id/edit")}}' method="POST" enctype="multipart/form-data">
			@if($errors->has('TenMatHang'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('TenMatHang')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="tenmathang">Tên mặt hàng:</label>
				<input type="text" name="TenMatHang" id="TenMatHang" class="form-control" value="{{$mathang->TenMatHang}}">
			</div>
			
			@if($errors->has('Gia'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('Gia')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="Gia">Giá:</label>
				<input type="text" name="Gia" id="Gia" class="form-control" value="{{$mathang->Gia}}">
			</div>
			
			@if($errors->has('XuatXu'))
			<div class="form-group">
				<p style="color:red">{{$errors->first('XuatXu')}}</p>
			</div>
			@endif
			<div class="form-group">
				<label for="XuatXu">Xuất Xứ:</label>
				<input type="text" name="XuatXu" id="XuatXu" class="form-control" value="{{$mathang->XuatXu}}">
			</div>
			@if($errors->has('SoLuongTon'))
			<div class="form-group">
				<p style="color:red">{{$errors->first('SoLuongTon')}}</p>
			</div>
			@endif
			<div class="form-group">
				<label for="SoLuongTon">Số lương tồn:</label>
				<input type="number" name="SoLuongTon" id="SoLuongTon" class="form-control" value="{{$mathang->SoLuongTon}}">
			</div>
			@if($errors->has('MoTa'))
			<div class="form-group">
				<p style="color:red">{{$errors->first('MoTa')}}</p>
			</div>
			@endif
			<div class="form-group">
				<label for="MoTa">Mô tả:</label>
				<textarea name="MoTa" id="MoTa" class="form-control">{{$mathang->MoTa}}</textarea>
			</div>
			@if($errors->has('idLoaiMatHang'))
			<div class="form-group">
				<p style="color:red">{{$errors->first('idLoaiMatHang')}}</p>
			</div>
			@endif
			<div class="form-group">
				<label for="idLoaiMatHang">Loại mặt hàng:</label>
				<select id="idLoaiMatHang"  class="form-control" name="idLoaiMatHang" value="{{$mathang->idLoaiMatHang}}" required>
				@foreach ($loaimathangs as $loaimathang)
					<option value="{{$loaimathang->id}}">{{$loaimathang->TenLoaiMatHang}}</option>
				@endforeach
				</select>
			</div>
			
			@foreach ($hinhanhs as $hinhanh)
			<div class="form-group">
				<label for="idLoaiMatHang">Hình ảnh:</label>
				<div class="form-control">
				<img class="fixed_size_img" src="{{$hinhanh->URL}}"/>
				<input id="{{$hinhanh->id}}" type="hidden" name="delete_image[]" value="">
					<button type="button" class="btn btn-danger delete_image" value="{{$hinhanh->id}}">Xóa</button>
					<button type="button" class="btn btn-success recover_image" value="{{$hinhanh->id}}" style="display:none">Phục hồi</button>
				</div>
			</div>
			@endforeach
			<div class="form-group">
				<label for="hinhanh">Hình ảnh:</label>
				<input type="file"  class="form-control" name="hinhanh[]" multiple />
			</div>
			<div class="form-group">
				<button class="btn btn-info" type="submit" id="loginbutton">Sửa đổi</button>
			</div>
			{!! csrf_field() !!}
		</form>
	</div>
</div>

<script>
	$(document).ready(function(){
	$('.delete_image').click(function(){
		var selector = $(this).val();
		$('#'+selector).val(selector);
		$('.recover_image[value='+selector+']').show();
		$(this).hide();
	})
	$('.recover_image').click(function(){
		var selector = $(this).val();
		$('#'+selector).val("");
		$('.delete_image[value='+selector+']').show();
		$(this).hide();
	})	
		
	})
</script>
@endsection