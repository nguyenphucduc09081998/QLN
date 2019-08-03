<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;
use App\DonHang;
use App\ChiTietDonHang;
use App\Model\MatHang;

class DonHangController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$donhangs = DonHang::all();
		return view('admin/donhang/index',['donhangs' => $donhangs]);
    }
	public function create_admin()
    {
     	 //
		 
		$donhangs = DonHang::all();
		 return view('admin/donhang/create',['donhangs' => $donhangs]);
    }
	public function store_admin(Request $request)
    {
        $donhang = new DonHang;
		$validator = Validator::make($request->all(), $donhang->rules, $donhang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$donhang = DonHang::create(request([
				'NgayDatHang',
				'NgayGiaoHang',
				'idChiTietDonHang',
				'idNguoiDung',
				'ThanhTien',
				'PhuongThucThanhToan',
				'PhuongThucGiaoTien',
			]));			
			return redirect('/admin/donhang');
		}
    }
	public function show_admin($id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		$chitietdonhangs =ChiTietDonHang::where('idDonHang','=',$id)->get();
		foreach($chitietdonhangs as $index=>$chitietdonhang){
			
			$mathang = MatHang::where([['id','=',$chitietdonhang->idMatHang]])->get();
			$chitietdonhangs[$index]['MatHang'] = $mathang;
		}
		return view('admin/donhang/show',['donhang' => $donhang],['chitietdonhangs'=>$chitietdonhangs]);
    }
	public function edit_admin($id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		$chitietdonhangs =ChiTietDonHang::where('idDonHang','=',$id)->get();
		foreach($chitietdonhangs as $index=>$chitietdonhang){
			
			$mathang = MatHang::where([['id','=',$chitietdonhang->idMatHang]])->get();
			$chitietdonhangs[$index]['MatHang'] = $mathang;
		}
		return view('admin/donhang/edit',['donhang' => $donhang],['chitietdonhangs'=>$chitietdonhangs]);
    }	
	public function update_admin(Request $request, $id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		
		
		$validator = Validator::make($request->all(), $donhang->rules, $donhang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$donhang->idDonHang = $request['idDonHang'];
			$donhang->NgayGiaoHang=$request['NgayGiaoHang'];
			$donhang->NgayDatHang=$request['NgayDatHang'];
			$donhang->idNguoiDung = $request['idNguoiDung'];
			$donhang->HoVaTen = $request['HoVaTen'];
			$donhang->Email = $request['Email'];
			$donhang->DiaChi = $request['DiaChi'];
			$donhang->SoDienThoai = $request['SoDienThoai'];
			$donhang->TongTien = $request['TongTien'];
			$donhang->VAT = $request['VAT'];
			$donhang->PhiVanChuyen = $request['PhiVanChuyen'];
			$donhang->TrangThai = $request['TrangThai'];
			$donhang->save();
			return redirect()->back();
		}
		
    }
	public function destroy($id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		$donhang->delete();
		return redirect()->back();
    }
	public function store(Request $request)
    {
		
        //
		$donhang = new DonHang;

			
		$TongTien = session('TongTien');
		$VAT = session('VAT');
		$PhiVanChuyen = session('PhiVanChuyen');
		$TrangThai = "DANGXULY";
		
		$donhang->NgayDatHang = date("Y-m-d H:i:s");
		$donhang->NgayGiaoHang = date("Y-m-d H:i:s", strtotime('+ 2 days'));
		
		if(Auth::check()){
			$donhang->idNguoiDung = Auth::user()->id;
		}
		$donhang->HoVaTen = $request['HoVaTen'];
		$donhang->Email = $request['Email'];
		$donhang->DiaChi = $request['DiaChi'];
		$donhang->SoDienThoai = $request['SoDienThoai'];
		$donhang->TongTien = $TongTien;
		$donhang->VAT = $VAT;
		$donhang->PhiVanChuyen = $PhiVanChuyen;
		$donhang->TrangThai = $TrangThai;
		$donhang->save();
		
		
		
		$matHangs = session('Cart');
		foreach($matHangs as $matHang){
			$ChiTietDonHang = new ChiTietDonHang;
			$ChiTietDonHang->idDonHang = $donhang->id;
			$ChiTietDonHang->idMatHang = $matHang[0];
			$ChiTietDonHang->SoLuong = $matHang[1];
			$ChiTietDonHang->save();

		}

		$request->session()->forget('TongTien');
		$request->session()->forget('VAT');
		$request->session()->forget('PhiVanChuyen');
		$request->session()->forget('Cart');

		return redirect('/thanks');
    }
}
