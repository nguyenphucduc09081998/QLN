@extends('admin/master')
@section('content')


<div class="container">
	<div>
		<h1> Quản lý mặt hàng</h1>
		
		<hr>
	</div>
	<div class="quanly" >
		<a href='{{url("/admin/mathang/create")}}' class="btn btn-success addbutton">Thêm mặt hàng</a>
		<div class="product-info">
			<table class="datatable" id="table_id" >
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên mặt hàng</th>
						<th>Giá</th>
						<th>Loại mặt hàng</th>
						<th>Số lượng tồn</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($mathangs as $mathang)
					<tr>
						<td>{{$mathang->id}}</td>
						<td>{{$mathang->TenMatHang}}</td>
						<td>{{$mathang->Gia}}</td>
						<td>
						@foreach ($loaimathangs as $loaimathang)
							@if($loaimathang->id == $mathang->idLoaiMatHang)
								{{$loaimathang->TenLoaiMatHang}}
							@endif
						@endforeach
						</td>
						<td>{{$mathang->SoLuongTon}}</td>
						<td>
						
						<a href='{{url("/admin/mathang/$mathang->id/show")}}' class="btn btn-info" target="_blank">Xem</a>
						<a href='{{url("/admin/mathang/$mathang->id/edit")}}' class="btn btn-danger">Sửa</a>
						
						<form method="POST" action='{{url("/admin/mathang/$mathang->id/delete")}}' style="display: inline-block">
							<input type="hidden" value="$user->id" name="delete_user" />
							<button onclick="return confirm('Bạn có chắc muốn xóa mặt hàng này không?')" class="btn btn-secondary">
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