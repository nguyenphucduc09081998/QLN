<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoaiMatHang extends Model
{
    //
	protected $fillable = [
        'TenLoaiMatHang', 
    ];	
	public $rules = [
		'TenLoaiMatHang' =>'required',
	];
	public $messages = [
		'TenLoaiMatHang.required' => 'Tên loại mặt hàng là trường bắt buộc',
	];	
	protected $table = "loaimathang";
	public $timestamps = false;
}
