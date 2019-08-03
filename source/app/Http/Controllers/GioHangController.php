<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MatHang;
use App\Model\Phi;


class GioHangController extends Controller
{
    //
	public function show(Request $request){
		$data = session('Cart');
		$mathangs= [];
		if($data!=null){
			foreach($data as $product){
			
				$mathang =  MatHang::where('id','=',$product[0])->first();
				$mathang['SoLuong'] = $product[1];
				$mathang['ThanhTien'] = $product[1] * $mathang->Gia;
				$mathangs[] = $mathang;
			}
		}
		
		$TongTienChuaThue = 0;
		$TongTien = 0;
		
		
		$PhiVanChuyen = Phi::where('LoaiPhi','VanChuyen')->first();
		$PhiVanChuyen = $PhiVanChuyen->Gia;
		foreach($mathangs as $mathang){
			$TongTienChuaThue += $mathang['ThanhTien'];	
		}
		$VAT = Phi::where('LoaiPhi','VAT')->first();
		$VAT = $VAT->Gia * $TongTienChuaThue / 100;
		$TongTien += $VAT + $PhiVanChuyen + $TongTienChuaThue;
		$request->session()->put('TongTien', $TongTien);
		$request->session()->put('VAT', $VAT);
		$request->session()->put('PhiVanChuyen', $PhiVanChuyen);
		return view('cart',['mathangs' => $mathangs,
		'TongTienChuaThue' => $TongTienChuaThue,
		'VAT'=> $VAT,
		'PhiVanChuyen'=> $PhiVanChuyen,
		'TongTienChuaThue'=> $TongTienChuaThue,
		'TongTien' => $TongTien
		]);
	}
	
	public function destroy(Request $request, $id){
		$data = session('Cart');
		foreach($data as $index => $product){
			if($product[0] == $id){
				unset($data[$index]);
			}
		}
		$request->session()->put('Cart', $data);
		
		return redirect('/giohang');
	}
}
	
	

