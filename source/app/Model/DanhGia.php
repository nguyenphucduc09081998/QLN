<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DanhGia extends Model
{
    //
	protected $fillable = [
        'idMatHang',
		'idKhachHang',
		'NoiDung',
		'Rating',
    ];
	public $rules = [
		'idMatHang'=> 'required',
		'idKhachHang'=> 'required',
		'NoiDung' => 'required',
		'Rating',
	];
	public $messages = [
		'idMatHang.required' => 'Nội dung là trường bắt buộc',
		'idKhachHang.required' => 'Nội dung là trường bắt buộc',
		'NoiDung.required' => 'Nội dung là trường bắt buộc',
	];
	protected $table = "danhgia";
	public $timestamps = false;
}
