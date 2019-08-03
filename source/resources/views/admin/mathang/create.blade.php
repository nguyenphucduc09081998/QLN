@extends('admin/master')
@section('content')


<div class="container">
	<div class="themMatHang">
		<h1>Thêm mặt hàng</h1>
		<hr>
		<form action="{{url('/admin/mathang/create')}}" method="POST" enctype="multipart/form-data">
			@if($errors->has('TenMatHang'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('TenMatHang')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="TenMatHang">Tên mặt hàng: </label>
				<input type="text" id="TenMatHang" name="TenMatHang"  class="form-control" placeholder="TenMatHang" value="{{old('TenMatHang')}}" required />
			</div>
			
			@if($errors->has('Gia'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('Gia')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="Gia">Giá mặt hàng:</label>
				<input type="number" id="Gia"  class="form-control" name="Gia" value="{{old('Gia')}}" min="1" required />
			</div>

			@if($errors->has('XuatXu'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('XuatXu')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="XuatXu">Xuất xứ:</label>
				<input type= "text" id="XuatXu"  class="form-control" name="XuatXu" value="{{old('XuatXu')}}" required />
			</div>
			@if($errors->has('SoLuongTon'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('SoLuongTon')}}</p>
				</div>
			@endif
		
			<div class="form-group">
				<label for="SoLuongTon">Số lượng tồn:</label>
				<input type="number" id="SoLuongTon"  class="form-control" name="SoLuongTon" value="{{old('SoLuongTon')}}" required />
			</div>
			@if($errors->has('MoTa'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('MoTa')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="MoTa">Mô tả:</label>
				<textarea id="MoTa"  class="form-control" name="MoTa" required>{{old('MoTa')}}</textarea>
			</div>
			@if($errors->has('idLoaiMatHang'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('idLoaiMatHang')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="idLoaiMatHang">Loại mặt hàng:</label>
				<select id="idLoaiMatHang"  class="form-control" name="idLoaiMatHang" value="{{old('idLoaiMatHang')}}" required>
				@foreach ($loaimathangs as $loaimathang)
					<option value="{{$loaimathang->id}}">{{$loaimathang->TenLoaiMatHang}}</option>
				@endforeach
				</select>
			</div>
			
			@if($errors->has('hinhanh'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('hinhanh')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="hinhanh">Hình ảnh:</label>
				<input type="file"  class="form-control" name="hinhanh[]" value="{{old('hinhanh')}}" required multiple />
			</div>
	
			<div class="form-group">
				<button class="btn btn-info" type="submit">Thêm</button>
			</div>
			
			{!! csrf_field() !!}
		</form>
	</div>
</div>
@endsection