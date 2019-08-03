<?php

namespace App\Http\Controllers\Api;
use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class AuthController extends Controller
{
    //
	public function register (Request $request) {
		$user = new User;
		$validator = Validator::make($request->all(), $user->rules, $user->messages);

		if ($validator->fails())
		{
			return response(['status'=>422,'errors'=>$validator->errors()->all()], 422);
		}

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

		$token = $user->createToken('Laravel Password Grant Client')->accessToken;
		$response = ['status'=>200,'token' => $token,'id'=>$user->id];

		return response($response, 200);
	}
	
	
	public function login (Request $request) {		
		$username = $request->input('username');
		$password = $request->input('password');
		$user = User::where('username', $username)->first();
		
		if ($user) {
			if( Auth::attempt(['username' => $username, 'password' =>$password])) {
				$token = $user->createToken('Laravel Password Grant Client')->accessToken;
				$response = ['status'=>1,'token' => $token,'id' => $user->id];
				return response($response, 200);
			} else {
				$response = ['status'=>0,'error' =>'Password missmatch'];
				return response($response, 422);
			}

		} else {
			$response = ['status'=>0,'error' =>'User does not exist'];
			return response($response, 422);
		}
	}
	
	
	public function logout (Request $request) {
		$token = $request->user()->token();
		$token->revoke();
		$response = 'You have been succesfully logged out!';
		return response($response, 200);
	}
}
