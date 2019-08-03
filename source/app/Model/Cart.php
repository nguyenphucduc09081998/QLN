<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
	protected $fillable = [
		'idNguoiDung',
        'idMatHang',
		
    ];
	public $rules = [
		'idNguoiDung' =>'required',
		'idMatHang' => 'required',
	];
	public $messages = [
		'idNguoiDung.required' => 'Id người dùng là trường bắt buộc',
		'idMatHang.required' => 'Id mặt hàng là trường bắt buộc',
	];
	protected $table = "cart";
	public $timestamps = false;
}
