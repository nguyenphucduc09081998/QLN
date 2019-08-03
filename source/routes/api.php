<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::group(['middleware' => ['json.response']], function () {

	
	Route::middleware('auth:api')->get('/user', function (Request $request) {
		return ['errors'=>['status'=>200],'info'=>$request->user()];
	});
	Route::post('/login', 'Api\AuthController@login');
    Route::post('/register', 'Api\AuthController@register');
	Route::get('/home', 'Api\HomeController@index');
	Route::get('/listMatHang/{id}', 'Api\MatHangController@get_all_of_type');
	Route::get('/search/{searchWord}', 'Api\MatHangController@search');
	Route::get('/listLoaiMatHang', 'Api\LoaiMatHangController@index');
	Route::get('/matHang/{id}', 'Api\MatHangController@get_item_data');
	
	Route::middleware('auth:api')->group(function () {
        Route::get('/logout', 'Api\AuthController@logout')->name('logout');
        Route::post('/checkout1', 'Api\DonHangController@store1');
        Route::get('/donhang', 'Api\DonHangController@get');
    });
	Route::get('/cart/{id}', 'Api\CartController@index');
	
	
	
	Route::post('/checkout2', 'Api\DonHangController@store2');
//});