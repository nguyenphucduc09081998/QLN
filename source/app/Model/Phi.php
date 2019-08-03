<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Phi extends Model
{
    //
	protected $fillable = [
        'LoaiPhi',
		'GiaTri',
    ];
	public $rules = [
		'LoaiPhi'=> 'required',
		'GiaTri'=> 'required|numberic',
	];
	public $messages = [
		'LoaiPhi.required' => 'Loại phí là trường bắt buộc',
		'GiaTri.required' => 'Giá trị là trường bắt buộc',
	];
	protected $table = "phi";
	public $timestamps = false;
}
