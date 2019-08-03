<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;
use App\Model\DanhGia;
use App\Http\Controllers\Controller;

class DanhGiasController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$danhgias = DanhGia::all();
		return view('admin/danhgia/index',['danhgias' => $danhgias]);
    }
	public function show_admin($id)
    {
        $danhgia = DanhGia::where('id','=',$id)->first();
		return view('/danhgia/show',['danhgia' => $danhgia]);

    }
	 public function store(Request $request){
		$danhgia = new DanhGia;
		$validator = Validator::make($request->all(), $danhgia->rules, $danhgia->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {		
			$danhgia = DanhGia::create(request([
				'idMatHang',
				'idKhachHang', 
				'NoiDung',
				'Rating', 
			]));
		}
		return redirect()->back();
	 }
	public function destroy($id)
    {
		$danhgia = DanhGia::where('id','=',$id)->first();
		$danhgia->delete();
		return redirect()->back();
    }
}
