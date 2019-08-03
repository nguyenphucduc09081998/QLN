<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Hàng lưu niệm H2</title>
			
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		
		<!-- CSS -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/custom_js.js') }}"></script>
		
    </head>
    <body id="register">
			<div class="background">
			</div>
				<a href="{{ url('/') }}"><img class="logo" src="upload/logo.png" width="50" height="50"/></a>
				<div class="login-contain">
					<h1>ĐĂNG KÝ</h1>
					<form action="{{url('register')}}" id="register-form" method="POST">
						<table>
							<tr>
								<td><label for="username">Tên tài khoản: </label></td>
								<td> <input type="text" id="username" name="username" placeholder="tentaikhoan" value="{{old('username')}}"/></td>
							</tr>
							
							@if($errors->has('username'))
							<tr>
								<p style="color:red">{{$errors->first('username')}}</p>
							</tr>
							@endif
							<tr>
								<td><label for="password">Mật khẩu:</label></td>
								<td><input type= "password" id="password" name="password"/></td>
							</tr>
							@if($errors->has('password'))
							<tr>
								<p style="color:red">{{$errors->first('password')}}</p>
							</tr>
							@endif
							<tr>
								<td><label for="password">Nhập lại mật khẩu:</label></td>
								<td><input type= "password" id="password_confirmation" name="password_confirmation"/></td>
							</tr>
							<tr>
								<td><label for="HoVaTen">Họ và tên:</label></td>
								<td><input type= "text" id="HoVaTen" name="HoVaTen" placeholder="Nguyễn Văn A" value="{{old('HoVaTen')}}"/></td>
							</tr>
							@if($errors->has('HoVaTen'))
							<tr>
								<p style="color:red">{{$errors->first('HoVaTen')}}</p>
							</tr>
							@endif
							<tr>
								<td><label for="NgaySinh">Ngày sinh:</label></td>
								<td><input type= "date" id="NgaySinh" name="NgaySinh" value="{{old('NgaySinh')}}"/></td>
							</tr>
							@if($errors->has('NgaySinh'))
							<tr>
								<p style="color:red">{{$errors->first('NgaySinh')}}</p>
							</tr>
							@endif
							<tr>
								<td><label for="GioiTinh">Giới tính:</label></td>
								<td><select  id="GioiTinh" name="GioiTinh" value="{{old('GioiTinh')}}">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
									<option value="Khác">Khác</option>
								</select></td>
							</tr>
							@if($errors->has('GioiTinh'))
							<tr>
								<p style="color:red">{{$errors->first('GioiTinh')}}</p>
							</tr>
							@endif
							<tr>
								<td><label for="SoDienThoai">Số điện thoại:</label></td>
								<td><input type= "number" id="SoDienThoai" name="SoDienThoai" placeholder="0987654321" value="{{old('SoDienThoai')}}"/></br></td>
							</tr>
							<tr>
								<td><label for="email">Email:</label></td>
								<td><input type= "email" id="email" name="email" placeholder="mail@mail.com" value="{{old('email')}}"/></br></td>
							</tr>
							<tr>
								<td><label for="DiaChi">Địa chỉ:</label></td>
								<td><input type= "text" id="DiaChi" name="DiaChi" placeholder="123/đường 1" value="{{old('DiaChi')}}"/></br></td>
							</tr>
							<tr>
								<td><label for="ThanhPho">Thành phố:</label></td>
								<td><select id="ThanhPho" name="ThanhPho" value="{{old('ThanhPho')}}"/>
									<option value="HCM">Hồ Chí Minh</option>
								</select></br></td>
							</tr>
							<tr>
								<td><label for="Quan">Quận:</label></td>
								<td><select id="Quan" name="Quan" value="{{old('Quan')}}"/>
									<option value="Q1">Quận 1</option>
								</select></br></td>
							</tr>
							<tr >
								<td colspan="2"><div class="button-holder">
									<button class="btn btn-info" type="submit" id="loginbutton">Đăng ký</button>
								</div></td>
							</tr>
							<tr>
							<tr>
								<td colspan="2"><a href="{{url('login')}}">Đăng nhập</a></td>
							</tr>
							<tr>
								<td colspan="2"><a href="{{url('forget_password')}}">Quên mật khẩu? </a></td>
							</tr>
						</table>
						<input type="hidden" name="action" value="register"/>
						{!! csrf_field() !!}
					</form>
				</div>
			
@include('footer')
