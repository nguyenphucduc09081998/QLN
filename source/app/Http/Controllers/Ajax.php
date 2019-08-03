<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ajax extends Controller
{
    //
	Public function AddToCart(Request $request, $idMatHang, $SoLuong = 1){
		$idMatHang =  $request['idMatHang'];
		$SoLuong =  (isset($request['SoLuong'])) ? $request['SoLuong'] : 1;
		
		$cart = session('Cart');
		$flag = 0;
		if(!$cart){
			
			$cart = [];
		}
		foreach($cart as $index => $MatHang){
			if($MatHang[0] == $idMatHang){
				$cart[$index][1] += $SoLuong;
				$flag = 1;
				$request->session()->put('Cart',$cart);
				break;
			}
			
		}
		if(!$flag){
			$request->session()->push('Cart', [$idMatHang, $SoLuong]);
		}
		
		return json_encode($cart);
	}

	
}
