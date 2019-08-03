<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    //
	protected $fillable = [
		'idDonHang',
        'idMatHang',
		'SoLuong',
		'DichVu',
    ];
	public $rules = [
		'idDonHang'=>'required',
		'idMatHang' =>'required',
		'SoLuong' => 'required|numeric',
	];
	public $messages = [
		'idDonHang.required' => 'Đơn hàng là trường bắt buộc',
		'idMatHang.required' => 'Mặt hàng là trường bắt buộc',
		'SoLuong.required' => 'Số lượng là trường bắt buộc',
	];
	protected $table = "chitietdonhang";
	public $timestamps = false;
}
