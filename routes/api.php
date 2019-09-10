<?php

use Illuminate\Http\Request;
use App\User;
use App\SinhVien;
use App\Lop;
use App\KhoaHoc;
use App\NganhHoc;
use App\PhanHe;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('hello',function(Request $req){
	return response()->json('Hello' ,200);
});
// Route::get('user',function(){
	
// 	$data = App\SinhVien::find('SV1')->lop->khoahoc->nganhhoc->phanhe;
	
// 	dd($data);
// 	return response()->json($data);
// });


Route::group([
	
	'namespace'=>'ApiController',//ten namespace
	
	
],function(){
	Route::get('getAllSinhVien','GetController@getAllSinhVien');
	Route::get('getListSinhVienByMaLop/{ma_lop}','GetController@SinhVienByLop');
	Route::get('getSinhVienById/{ma_sv}','GetController@GetLopOfSinhVien');
	Route::get('getLop','GetController@getLop');
	Route::get('SiSoLop/{ma_lop}','GetController@SiSoLop');
	Route::get('getMaKhoaInLop/{ma_lop}','GetController@getMaKhoaInLop');
	Route::get('getKhoaHoByLop/{ma_lop}','GetController@getKhoaHoByLop');
	Route::get('getKhoaHoc','GetController@getAllKhoa');
	Route::get('getNganhByMaLop/{ma_lop}','GetController@getNganhByMaLop');
	Route::get('getNganhHoc','GetController@getNganhHoc');
	Route::get('getHe','GetController@getHe');
	Route::get('xoaSv/{ma_sv}','GetController@xoaSv');
	
	
});
Route::group(['namespace'=>'ApiController'],function(){
	Route::post('ThemSinhVien','PostController@ThemSinhVien');
	Route::post('themQR','PostController@ThemQR');
});