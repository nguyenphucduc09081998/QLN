<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MatHang extends Model
{
    //
	 protected $fillable = [
        'TenMatHang', 
		'Gia', 
		'XuatXu', 
		'SoLuongTon',
		'MoTa',
		'idLoaiMatHang'
    ];
	
	public $rules = [
		'TenMatHang' =>'required',
		'Gia' => 'required|numeric',
		'SoLuongTon' => 'required|numeric',
		'idLoaiMatHang' => 'required'
	];
	public $messages = [
		'TenMatHang.required' => 'Tên mặt hàng là trường bắt buộc',
		'Gia.required' => 'Giá là trường bắt buộc',
		'Gia.numeric' => 'Giá không hợp lệ',
		'SoLuongTon.required' => 'Số lượng tồn là trường bắt buộc',
		'idLoaiMatHang.required' => 'Loại mặt hàng là trường bắt buộc',
	];
	
	protected $table = "mathang";
	public $timestamps = false;
}
