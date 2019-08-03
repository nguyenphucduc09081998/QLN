@extends('admin/master')
@section('content')


<div class="container">
	<div>
		<h1> Quản lý loại mặt hàng</h1>
		
		<hr>
	</div>
	<div class="quanly" >
		<a href='{{url("/admin/loaimathang/create")}}' class="btn btn-success addbutton">Thêm loại mặt hàng</a>
		<div class="producttype-info">
			<table class="datatable" id="table_id" >
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên loại mặt hàng</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($loaimathangs as $loaimathang)
					<tr>
						<td>{{$loaimathang->id}}</td>
						<td>{{$loaimathang->TenLoaiMatHang}}</td>
						<td>
						
						<a href='{{url("/admin/loaimathang/$loaimathang->id/show")}}' class="btn btn-info">Xem</a>
						<a href='{{url("/admin/loaimathang/$loaimathang->id/edit")}}' class="btn btn-danger">Sửa</a>
						
						<form method="POST" action='{{url("/admin/loaimathang/$loaimathang->id/delete")}}' style="display: inline-block">
							<input type="hidden" value="$loaimathang->id" name="delete_user" />
							<button onclick="return confirm('Bạn có chắc muốn xóa loại mặt hàng này không? Tất cả các mặt hàng của loại mặt hàng này cũng sẽ bị xóa')" class="btn btn-secondary">
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