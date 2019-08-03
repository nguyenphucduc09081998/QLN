@extends('admin/master')
@section('content')


<div class="container">
	<div>
		<h1> Quản lý đơn hàng</h1>
		
		<hr>
	</div>
	<div class="quanly" >
		<!--<a href='{{url("/admin/loaimathang/create")}}' class="btn btn-success addbutton">Thêm loại mặt hàng</a>-->
		<div class="producttype-info">
			<table class="datatable" id="table_id" >
				<thead>
					<tr>
						<th>ID</th>
						<th>Họ và tên</th>
						<th>Email</th>
						<th>Ngày đặt hàng</th>
						<th>Ngày giao hàng</th>
						<th>Trạng thái</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($donhangs as $donhang)
					<tr>
						<td>{{$donhang->id}}</td>
						<td>{{$donhang->HoVaTen}}</td>						
						<td>{{$donhang->Email}}</td>
						<td>{{$donhang->NgayDatHang}}</td>
						<td>{{$donhang->NgayGiaoHang}}</td>
						<td>{{$donhang->TrangThai}}</td>
						
						<td>
						
						<a href='{{url("/admin/donhang/$donhang->id/show")}}' class="btn btn-info">Xem</a>
						
						<form method="POST" action='{{url("/admin/donhang/$donhang->id/delete")}}' style="display: inline-block">
							<input type="hidden" value="$donhang->id" name="delete_user" />
							<button onclick="return confirm('Bạn có chắc muốn xóa loại mặt hàng này không?')" class="btn btn-secondary">
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