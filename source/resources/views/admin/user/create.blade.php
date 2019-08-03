@extends('admin/master')
@section('content')


<div class="container">
	<div class="themNguoiDung">
		<h1>Thêm người dùng</h1>
		<hr>
		<form action="{{url('/admin/nguoidung/create')}}" method="POST">
			@if($errors->has('username'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('username')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="username">Tên tài khoản: </label>
				<input type="text" id="username" name="username"  class="form-control" placeholder="tentaikhoan" value="{{old('username')}}" required />
			</div>
			
			<div class="form-group">
				<label for="password">Mật khẩu:</label>
				<input type= "password" id="password"  class="form-control" name="password" required />
			</div>
			@if($errors->has('password'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('password')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="password">Nhập lại mật khẩu:</label>
				<input type= "password" id="password_confirmation"  class="form-control" name="password_confirmation" required />
			</div>
			@if($errors->has('HoVaTen'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('HoVaTen')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="HoVaTen">Họ và tên:</label>
				<input type= "text" id="HoVaTen"  class="form-control" name="HoVaTen" placeholder="Nguyễn Văn A" value="{{old('HoVaTen')}}" required />
			</div>
			@if($errors->has('NgaySinh'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('NgaySinh')}}</p>
				</div>
			@endif
		
			<div class="form-group">
				<label for="NgaySinh">Ngày sinh:</label>
				<input type= "date" id="NgaySinh"  class="form-control" name="NgaySinh" value="{{old('NgaySinh')}}" required />
			</div>
			@if($errors->has('GioiTinh'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('GioiTinh')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="GioiTinh">Giới tính:</label>
				<select  id="GioiTinh" name="GioiTinh"  class="form-control" value="{{old('GioiTinh')}}" required >
					<option value="Nam">Nam</option>
					<option value="Nữ">Nữ</option>
					<option value="Khác">Khác</option>
				</select>
			</div>
			@if($errors->has('SoDienThoai'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('SoDienThoai')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="SoDienThoai">Số điện thoại:</label>
				<input type="text" id="SoDienThoai" name="SoDienThoai" class="form-control" value="{{old('SoDienThoai')}}" required >
			</div>
			@if($errors->has('email'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('email')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" id="email" name="email" class="form-control" value="{{old('email')}}" required >
			</div>
			@if($errors->has('DiaChi'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('DiaChi')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="DiaChi">Địa chỉ:</label>
				<input type= "text" id="DiaChi" name="DiaChi"  class="form-control" placeholder="123/đường 1" value="{{old('DiaChi')}}" required />
			</div>
			@if($errors->has('ThanhPho'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('ThanhPho')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="ThanhPho">Thành phố:</label>
				<select id="ThanhPho" name="ThanhPho"  class="form-control" value="{{old('ThanhPho')}}" required />
					<option value="HCM">Hồ Chí Minh</option>
				</select>
			</div>
			@if($errors->has('Quan'))
				<div class="form-group">
					<p style="color:red">{{$errors->first('Quan')}}</p>
				</div>
			@endif
			<div class="form-group">
				<label for="Quan">Quận:</label>
				<select id="Quan" name="Quan"  class="form-control" value="{{old('Quan')}}" required />
					<option value="Q1">Quận 1</option>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-info" type="submit" id="loginbutton">Thêm</button>
			</div>
			
			{!! csrf_field() !!}
		</form>
	</div>
</div>
@endsection