<?php

namespace App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lop;
use App\SinhVien;
use App\KhoaHoc;
use App\NganhHoc;
use App\PhanHe;
use Illuminate\Support\Facades\Input;



class PostController extends Controller
{
    public function ThemSinhVien(Request $request)
    {
    	// $data = 
    	// $save = json_encode($data);
    	$sinhvien = new SinhVien();
    	$content = $request->getContent();
    	//settype($content,"array");
    	$data = json_decode($content,true);
    	$ok = json_decode($data);



     // $ngay_sinh = new DateTime($ok->ngay_sinh);
     // $ngay_sinh->format("Y-m-d H:i:s");

    	 
    	$sinhvien->ma_sv = $ok->ma_sv;
    	$sinhvien->email = $ok->email;
    	$sinhvien->ngay_sinh =$ok->ngay_sinh;
    	$sinhvien->gioi_tinh = $ok->gioi_tinh;
    	$sinhvien->hinh_QR = $ok->hinh_QR;
    	$sinhvien->hinh_the = $ok->hinh_the;
    	$sinhvien->hinh_thuc_tro = $ok->hinh_thuc_tro;
    	$sinhvien->ho_khau = $ok->ho_khau;
    	$sinhvien->ho_ten = $ok->ho_ten;
    	$sinhvien->ma_lop = $ok->ma_lop;
    	$sinhvien->mat_khau = $ok->mat_khau;
    	$sinhvien->so_dt = $ok->so_dt;
    	$sinhvien->so_pin = $ok->so_pin;

    	 $sinhvien->save();
    	//
    	// if ($data != "") {
    	// 	
    	// 	$sinhvien->ngay_sinh = null;
    	// 	
    	// }

    	
    	return ;
    }
    public function ThemQR(Request $request)
    {
    	// $sinhvien = new SinhVien();
    	$content = $request->getContent();
    	$data = json_decode($content,true);
    	$ok = json_decode($data);

    	$masv = $ok->ma_sv;
    	$hinh_QR = $ok->hinh_QR;
    	$so_pin = $ok->so_pin;

    	$sinhvien = SinhVien::find($masv);

		$sinhvien->hinh_QR = $hinh_QR;
		$sinhvien->so_pin = $so_pin;
		$sinhvien->save();
    	// SinhVien::where('ma_sv', $masv)
     //      ->update(['hinh_QR' => $hinh_QR,'so_pin'=>$so_pin]);
          return response(dd($ok));
    }
}
