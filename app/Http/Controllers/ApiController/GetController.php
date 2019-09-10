<?php

namespace App\Http\Controllers\ApiController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lop;
use App\SinhVien;
use App\KhoaHoc;
use App\NganhHoc;
use App\PhanHe;


class GetController extends Controller
{
	public function getAllSinhVien()
	{
		$data = SinhVien::all();
    	return response($data);
	}
    public function SinhVienByLop($ma_lop,Request $req)
    {
    	//dd($ma_lop);
    	$data = Lop::find($ma_lop)->sinhvien;
    	return response()->json($data);
    }
    public function GetLopOfSinhVien($ma_sv)
    {	
    	$data =SinhVien::find($ma_sv)->lop;
    	return response()->json($data);
    }
    public function getLop()
    {
    	$data = Lop::all();
    	return response()->json($data);

    }
    public function SiSoLop($ma_lop)
    {
    	$data =Lop::withCount('sinhvien')->where('ma_lop',$ma_lop)->get();
    	return response()->json($data);
    }
    public function getMaKhoaInLop($ma_lop)
    {
    	 $data = Lop::all()->where('ma_lop',$ma_lop);
    	return response()->json($data);
    }
    public function getKhoaHoByLop($ma_lop)
    {
    	$data = Lop::find($ma_lop)->khoahoc;
    	return response()->json($data);
    }
    public function getAllKhoa()
    {
    	$data = KhoaHoc::all();
    	return response()->json($data);
    }
    public function getNganhByMaLop($ma_lop)
    {
    	$data = Lop::find($ma_lop)->nganhhoc;
    	return response()->json($data);
    }
    public function getNganhHoc()
    {
    	$data = NganhHoc::all();
    	return response()->json($data);
    }
    public function getHe()
    {
    	$data = PhanHe::all();
    	return response()->json($data);
    }
    public function xoaSv($ma_sv)
    {
    	$data = SinhVien::find($ma_sv)->delete();
    	return response()->json($data);
    }
    public function getKhoaNganhByLop($ma_lop)
    {
    	
    }
}
