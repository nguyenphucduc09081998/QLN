@extends('admin/master')
@section('content')


<div class="container">
	<div>
		<h1> Quản lý người dùng</h1>
		
		<hr>
	</div>
	<div class="quanly" >
		<a href='{{url("/admin/nguoidung/create")}}' class="btn btn-success addbutton">Thêm người dùng</a>
		<div class="user-info">
			<table class="datatable" id="table_id" >
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên đăng nhập</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->SoDienThoai}}</td>
						<td>
						
						<a href='{{url("/admin/nguoidung/$user->id/show")}}' class="btn btn-info">Xem</a>
						<a href='{{url("/admin/nguoidung/$user->id/edit")}}' class="btn btn-danger">Sửa</a>
						
						<form method="POST" action='{{url("/admin/nguoidung/$user->id/delete")}}' style="display: inline-block">
							<input type="hidden" value="$user->id" name="delete_user" />
							<button onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')" class="btn btn-secondary">
							Xóa
							</button>
							{!! csrf_field() !!}
						</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>

</script>
@endsection