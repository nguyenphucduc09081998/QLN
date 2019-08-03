<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    //
	protected $fillable = [
        'type',
		'idContainer',
		'URL',
    ];
	protected $table = "hinhanh";
	public $timestamps = false;
}
