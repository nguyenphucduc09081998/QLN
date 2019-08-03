<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Model\MatHang;
use App\Model\HinhAnh;



class SearchController extends Controller
{
	
	
	public function show(Request $request)
    {
		$name= $request['searchproduct'];
		$mathangs = MatHang::where('TenMatHang','like','%'.$name.'%')->get();
		foreach($mathangs as $index=>$mathang){
			
			$hinhanhs = HinhAnh::where([['idContainer','=',$mathang->id],['type','=','mathang']])->get();
			$mathangs[$index]['HinhAnh'] = $hinhanhs;
		}
        return view ('search',['mathangs' => $mathangs]);
    }

	
}
