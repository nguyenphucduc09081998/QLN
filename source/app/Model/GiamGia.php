<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiamGia extends Model
{
    //
	protected $fillable = [
        'idMatHang',
		'Role',
		'LoaiGiamGia'
    ];
	public $rules = [
		'idMatHang'=> 'required',
		'Role'=> 'required|numeric',
		'LoaiGiamGia'=> 'required',
	];
	public $messages = [
		'idMatHang.required' => 'ID Mặt hàng là trường bắt buộc',
		'Role.required' => 'Role trường bắt buộc',
		'LoaiGiamGia.required' => 'Loại giảm giá là trường bắt buộc',
	];
	protected $table = "giamgia";
	public $timestamps = false;
}
