@extends('admin/master')
@section('content')


<div class="container">
	<div>
		<h1> Quản lý mặt hàng</h1>
		
		<hr>
	</div>
	<div class="quanly" >
		<button class="btn btn-success addbutton">Thêm mặt hàng</button>
		<div class="product-info">
			<table class="datatable" id="table_id" >
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên mặt hàng</th>
						<th>Xuất xứ</th>
						<th>Số lượng tồn</th>
						<th>Loại mặt hàng</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($MatHangs as $MatHang)
					<tr>
						<td>{{$MatHang->id}}</td>
						<td>{{$MatHang->TenMatHang}}</td>
						<td>{{$MatHang->XuatXu}}</td>
						<td>{{$MatHang->SoLuongTon}}</td>
						<td>{{$MatHang->idLoaiMatHang}}</td>
						

						<td>
						
						<a href='{{url("/admin/xemmathang/$MatHang->id")}}' class="btn btn-info">Xem</a>
						<a href="" class="btn btn-danger" data-id="{{$MatHang->id}}">Sửa</a>
						<a href="" class="btn btn-secondary" data-id="{{$MatHang->id}}">Xóa</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection	