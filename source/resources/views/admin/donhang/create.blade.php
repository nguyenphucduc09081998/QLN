@extends('admin/master')
@section('content')


<div class="container">
	<div class="them">
		<h1>Thêm mặt hàng</h1>
		<hr>
		<form action="{{url('/admin/loaimathang/create')}}" method="POST">
			@if($errors->has('TenLoaiMatHang'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('TenMatHang')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="TenLoaiMatHang">Tên loại mặt hàng: </label>
				<input type="text" id="TenLoaiMatHang" name="TenLoaiMatHang"  class="form-control" placeholder="TenLoaiMatHang" value="{{old('TenLoaiMatHang')}}" required />
			</div>
			
			@if($errors->has('Gia'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('Gia')}}</p>
				</div>
			@endif
			<div class="form-group">
				<button class="btn btn-info" type="submit">Thêm</button>
			</div>
			
			{!! csrf_field() !!}
		</form>
	</div>
</div>
@endsection