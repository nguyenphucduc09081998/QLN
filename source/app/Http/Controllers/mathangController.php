<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Model\MatHang;
use App\Model\LoaiMatHang;
use App\Model\HinhAnh;
use App\Model\DanhGia;
use App\User;

class MatHangController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$mathangs = MatHang::all();
		$loaimathangs = LoaiMatHang::all();
		return view('admin/mathang/index',['mathangs' => $mathangs,'loaimathangs'=>$loaimathangs]);
    }
	public function create_admin()
    {
     	 //
		 $mathangs = MatHang::all();
		 $loaimathangs = LoaiMatHang::all();
		 return view('admin/mathang/create',['mathangs' => $mathangs,'loaimathangs'=>$loaimathangs]);
    }
	public function store_admin(Request $request)
    {
        $mathang = new MatHang;
		$validator = Validator::make($request->all(), $mathang->rules, $mathang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {

			
			$mathang = MatHang::create(request([
				'TenMatHang',
				'Gia', 
				'XuatXu',
				'SoLuongTon', 
				'MoTa', 
				'idLoaiMatHang'
			]));
			if($request->hasFile('hinhanh')) {
				$files = $request->file('hinhanh');
				$path = public_path() . '/upload/mathang/mathang'.$mathang->id;
				foreach($files as $file){
					$file->move($path, $file->getClientOriginalName() );
					$hinhanh = HinhAnh::create(
						array(
							'type' => "mathang",
							'idContainer' => $mathang->id,
							'URL' => '/upload/mathang/mathang' . $mathang->id .'/' .$file->getClientOriginalName()
						)
					);
				}
				
			}
			
			return redirect('/admin/mathang');
		}
    }
	public function edit_admin($id)
    {
        //
		$mathang = MatHang::where('id','=',$id)->first();
		$hinhanhs = HinhAnh::where([['idContainer','=',$id],['type','=','mathang']])->get();
		$loaimathangs = LoaiMatHang::all();
		return view('admin/mathang/edit',['mathang' => $mathang, 'hinhanhs'=>$hinhanhs, 'loaimathangs'=>$loaimathangs]);
    }
	
	public function show($id)
    {
        $mathang = MatHang::where('id','=',$id)->first();
		$hinhanhs = HinhAnh::where([['idContainer','=',$id],['type','=','mathang']])->get(); 	
		$danhgias = DanhGia::where([['idMatHang','=',$id]])->get(); 
		foreach($danhgias as $index=>$danhgia){			
			$user = User::where([['id','=',$danhgia->idKhachHang]])->get();
			$danhgias[$index]['KhachHang'] = $user;
		}
		$loaimathang = LoaiMatHang::where('id','=',$mathang->idLoaiMatHang)->first();
		return view('/mathang/show',['mathang' => $mathang, 'hinhanhs'=>$hinhanhs, 'loaimathang'=>$loaimathang,'danhgias'=>$danhgias]);

    }
	public function update_admin(Request $request, $id)
    {
        //
		$mathang = MatHang::where('id','=',$id)->first();
		
		
		
		$validator = Validator::make($request->all(), $mathang->rules, $mathang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$mathang->TenMatHang = $request['TenMatHang'];
			$mathang->Gia = $request['Gia'];
			$mathang->XuatXu = $request['XuatXu'];
			$mathang->SoLuongTon = $request['SoLuongTon'];
			$mathang->MoTa = $request['MoTa'];
			$mathang->idLoaiMatHang = $request['idLoaiMatHang'];
			$mathang->save();
			if($request->hasFile('hinhanh')) {
				$files = $request->file('hinhanh');
				$path = public_path() . '/upload/mathang/mathang'.$mathang->id;
				foreach($files as $file){
					$file->move($path, $file->getClientOriginalName() );
					$hinhanh = HinhAnh::create(
						array(
							'type' => "mathang",
							'idContainer' => $mathang->id,
							'URL' => '/upload/mathang/mathang' . $mathang->id .'/' .$file->getClientOriginalName()
						)
					);
				}
				
			}
			$delete_image_ids = $request['delete_image'];
			$delete_image_ids = $delete_image_ids ? $delete_image_ids: [];
			foreach($delete_image_ids as $delete_image_id){
				
				$hinhanh = HinhAnh::where('id','=',$delete_image_id)->first();
				if($hinhanh){
					$hinhanh->delete();
				}
			}
			
			return redirect()->back();
		}
    }
	public static function destroy($id)
    {
        //
		$mathang = MatHang::where('id','=',$id)->first();
		$mathang->delete();
		$hinhanhs = HinhAnh::where('idContainer','=',$id)->delete();
		
		return redirect()->back();
    }
}
