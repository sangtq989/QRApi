<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lop extends Model
{
	public $timestamps = false;
	protected $table = "lop";
	public $incrementing = false;
	protected $primaryKey = 'ma_lop';
	protected $keyType = 'string';
    //
    public function sinhvien()
    {
        return $this->hasMany('App\SinhVien','ma_lop');
    }
    public function khoahoc()
    {
        return $this->belongsTo('App\KhoaHoc','ma_khoa');
    }
    public function nganhhoc()
    {
         return $this->belongsTo('App\NganhHoc','ma_nganh');
    }
    public function phanhe()
    {
         return $this->belongsTo('App\PhanHe','ma_he');
    }
}
