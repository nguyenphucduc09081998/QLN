<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    //
	public function getLogin() {
    	return view('login');
    }
	public function username()
	{
		return 'username';
	}
	
	public function postLogin(Request $request) {
    	$rules = [
    		'username' =>'required|min:4',
    		'password' => 'required|min:4'
    	];
    	$messages = [
    		'username.required' => 'Tên đăng nhập là trường bắt buộc',
    		'username.min' => 'Tên đăng nhập phải chứa ít nhất 4 ký tự',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 4 ký tự',
    	];
    	$validator = Validator::make($request->all(), $rules, $messages);

    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
    		$username = $request->input('username');
    		$password = $request->input('password');

    		if( Auth::attempt(['username' => $username, 'password' =>$password])) {
    			return redirect()->intended('/');
    		} else {
    			$errors = new MessageBag(['errorlogin' => 'Tên đăng nhập hoặc mật khẩu không đúng']);
    			return redirect()->back()->withInput()->withErrors($errors);
    		}
    	}
    }
	public function logout() {
    	Auth::logout();
		return redirect('/');
    }
}
