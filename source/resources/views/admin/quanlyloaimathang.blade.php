@extends('admin/master')
@section('content')


<div class="container">
	<div>
		<h1> Quản lý loại mặt hàng</h1>
		
		<hr>
	</div>
	<div class="quanly" >
		<button class="btn btn-success addbutton">Thêm mặt hàng</button>
		<div class="typeproduct-info">
			<table class="datatable" id="table_id" >
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên loại mặt hàng</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($LoaiMatHangs as $LoaiMatHang)
					<tr>
						<td>{{$LoaiMatHang->id}}</td>
						<td>{{$LoaiMatHang->TenLoaiMatHang}}</td>
						<td>
						
						<a href='{{url("/admin/xemloaimathang/$LoaiMatHang->id")}}' class="btn btn-info">Xem</a>
						<a href="" class="btn btn-danger" data-id="{{$LoaiMatHang->id}}">Sửa</a>
						<a href="" class="btn btn-secondary" data-id="{{$LoaiMatHang->id}}">Xóa</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection	