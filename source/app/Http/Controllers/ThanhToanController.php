<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ThanhToanController extends Controller
{
    //
	public function show(Request $request){
		if(Auth::check()){
			$id = Auth::user()->id;
			$user = User::where('id','=',$id)->first();
		}
		else{
			 $user = new User;
		}
		$TongTien = session('TongTien');
		return view('checkout',['user' => $user,'TongTien' => $TongTien]);
	}
}
