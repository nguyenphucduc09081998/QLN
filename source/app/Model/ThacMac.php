<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThacMac extends Model
{
    //
	protected $fillable = [
        'idMatHang',
		'idKhachHang',
		'NoiDung',
		'TraLoi',
    ];
	public $rules = [
		'idMatHang'=> 'required',
		'idKhachHang'=> 'required',
		'NoiDung' => 'required',
		'TraLoi',
	];
	public $messages = [
		'idMatHang.required' => 'Nội dung là trường bắt buộc',
		'idKhachHang.required' => 'Nội dung là trường bắt buộc',
		'NoiDung.required' => 'Nội dung là trường bắt buộc',
	];
	protected $table = "thacmac";
	public $timestamps = false;
}
