<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;

class UserController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$users = User::where('role','=','2')->get();
		return view('admin/user/index',['users' => $users]);
    }
	public function create_admin()
    {
     	 //
		 return view('admin/user/create');
    }
	public function store_admin(Request $request)
    {
        $user = new User;
		$validator = Validator::make($request->all(), $user->rules, $user->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$request['Role']=2;
			$request['Active']=0;
			$user = User::create(request([
				'username',
				'email', 
				'password',
				'HoVaTen', 
				'NgaySinh', 
				'SoDienThoai', 
				'GioiTinh', 
				'DiaChi', 
				'ThanhPho',
				'Quan',
				'Role',
				'Active'
			]));
			return redirect('/admin/nguoidung');
		}
    }
	public function show_admin($id)
    {
        //
		$user = User::where('id','=',$id)->first();
		return view('admin/user/show',['user' => $user]);
    }
	public function edit_admin($id)
    {
        //
		$user = User::where('id','=',$id)->first();
		return view('admin/user/edit',['user' => $user]);
    }
	
	
	
	public function create()
    {
        //
		return view('user/create');
    }
	public function store(Request $request)
    {
        //
		$user = new User;
		$validator = Validator::make($request->all(), $user->rules, $user->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$request['Role']=2;
			$request['Active']=0;
			$user = User::create(request([
				'username',
				'email', 
				'password',
				'HoVaTen', 
				'NgaySinh', 
				'SoDienThoai', 
				'GioiTinh', 
				'DiaChi', 
				'ThanhPho',
				'Quan',
				'Role',
				'Active'
			]));
			
			auth()->login($user);
			return redirect('/');
		}
    }
	public function show($id)
    {
        //

    }
	public function edit($id)
    {
        //
    }
	public function update(Request $request, $id)
    {
        //
		$user = User::where('id','=',$id)->first();
		$email = $request['email'];
		if($user->email == $request['email']){
			unset($request['email']);	
		}

		$user->rules['email'] = 'e-mail|unique:users,email';
		unset($user->rules['username']);
		unset($user->rules['password']);
		
		
		$validator = Validator::make($request->all(), $user->rules, $user->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$user->email = $email;
			$user->HoVaTen = $request['HoVaTen'];
			$user->NgaySinh = $request['NgaySinh'];
			$user->SoDienThoai = $request['SoDienThoai'];
			$user->GioiTinh = $request['GioiTinh'];
			$user->DiaChi = $request['DiaChi'];
			$user->ThanhPho = $request['ThanhPho'];
			$user->Quan = $request['Quan'];
			$user->save();
			return redirect()->back();
		}
    }
	public function destroy($id)
    {
        //
		$user = User::where('id','=',$id)->first();
		$user->delete();
		return redirect()->back();
    }
}
