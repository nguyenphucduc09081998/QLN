<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    //
	protected $fillable = [
        'NgayDatHang',
		'NgayGiaoHang',
		'idNguoiDung',
		'HoVaTen',
		'Email',
		'DiaChi',
		'SoDienThoai',
		'TongTien',
		'VAT',
		'PhiVanChuyen',
		'TrangThai',
    ];
	public $rules = [
		'NgayDatHang' =>'required|date',
		'NgayGiaoHang' => 'required|date',
		'idNguoiDung' => 'required',
		'HoVaTen' => 'required',
		'Email' => 'required',
		'DiaChi' => 'required',
		'SoDienThoai' => 'required',
		'TongTien' => 'required|numeric',
		'VAT' => 'required|numeric',
		'PhiVanChuyen' => 'required|numeric',

	];
	public $messages = [
		'NgayDatHang.required' => 'Ngày đặt hàng là trường bắt buộc',
		'NgayGiaoHang.required' => 'Ngày giao hàng là trường bắt buộc',
		'idNguoiDung.required' => 'người dùng là trường bắt buộc',
		'HoVaTen.required' => 'Họ và tên là trường bắt buộc',
		'Email.required' => 'Email là trường bắt buộc',
		'DiaChi.required' => 'Địa chỉ là trường bắt buộc',
		'SoDienThoai.required' => 'Số điện thoại là trường bắt buộc',
		'TongTien.required' => 'Tổng tiền là trường bắt buộc',
		'VAT.required' => 'VAT là trường bắt buộc',
		'PhiVanChuyen.required' => 'Phí vận chuyển là trường bắt buộc',
	];
	protected $table = "donhang";
	public $timestamps = false;
}
