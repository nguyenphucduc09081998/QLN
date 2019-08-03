@extends('admin/master')
@section('content')

<div class="container">
	<div class="suaLoaiMatHang">
		<h1>Sửa mặt hàng</h1>
		<hr>
		<form action='{{url("/admin/loaimathang/$loaimathang->id/edit")}}' method="POST">
			@if($errors->has('tenloaimathang'))
				<tr>
					<p style="color:red">{{$errors->first('tenloaimathang')}}</p>
				</tr>
			@endif
			<div class="form-group">
				<label for="tenloaimathang">Tên loại mặt hàng:</label>
				<input type="text" name="TenLoaiMatHang" id="TenLoaiMatHang" class="form-control" value="{{$loaimathang->TenLoaiMatHang}}" required>
			</div>
			<div class="form-group">
				<button class="btn btn-info" type="submit" id="loginbutton">Sửa đổi</button>
			</div>
			{!! csrf_field() !!}
		</form>
	</div>
</div>
@endsection