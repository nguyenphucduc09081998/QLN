<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Model\LoaiMatHang;
use App\Model\MatHang;
use App\Model\HinhAnh;

class LoaiMatHangController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$loaimathangs = LoaiMatHang::all();
		return view('admin/loaimathang/index',['loaimathangs' => $loaimathangs]);
    }
	public function create_admin()
    {
     	 //
		 return view('admin/loaimathang/create');
    }
	public function store_admin(Request $request)
    {
        $loaimathang = new LoaiMatHang;
		$validator = Validator::make($request->all(), $loaimathang->rules, $loaimathang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$loaimathang = loaimathang::create(request([
				'TenLoaiMatHang',
			]));
			return redirect('/admin/loaimathang');
		}
    }
	public function show_admin($id)
    {
        //
		 $loaimathang = LoaiMatHang::where('id','=',$id)->first();
		return view('admin/loaimathang/show',['loaimathang' => $loaimathang]);
    }
	public function edit_admin($id)
    {
        //
		$loaimathang = LoaiMatHang::where('id','=',$id)->first();
		return view('admin/loaimathang/edit',['loaimathang' => $loaimathang]);
    }
	
	
	
	public function show($id)
    {
        $loaimathang = LoaiMatHang::where('id','=',$id)->first();
		$mathangs = MatHang::where('idLoaiMatHang','=',$loaimathang->id)->get();
		foreach($mathangs as $index=>$mathang){
			
			$hinhanhs = HinhAnh::where([['idContainer','=',$mathang->id],['type','=','mathang']])->get();
			$mathangs[$index]['HinhAnh'] = $hinhanhs;
		}
		
		return view('/loaimathang/show',['loaimathang' => $loaimathang,'mathangs' => $mathangs]);
    }

	public function update_admin(Request $request, $id)
    {
        //
		$loaimathang = LoaiMatHang::where('id','=',$id)->first();
		
		
		$validator = Validator::make($request->all(), $loaimathang->rules, $loaimathang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$loaimathang->TenLoaiMatHang = $request['TenLoaiMatHang'];
			$loaimathang->save();
			return redirect()->back();
		}
    }
	public function destroy($id)
    {
        //
		$mathangs = MatHang::where('idLoaiMatHang','=',$id)->get();
		foreach($mathangs as $mathang){
			MatHangController::destroy($mathang->id);
			
		}
		
		$loaimathang = LoaiMatHang::where('id','=',$id)->first();
		$loaimathang->delete();
		return redirect()->back();
    }
}
