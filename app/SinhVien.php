<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SinhVien extends Model
{
	
	public $timestamps = false;
	protected $table = "sinhvien";
	public $incrementing = false;
	protected $primaryKey = 'ma_sv';
	protected $keyType = 'string';
	protected $guarded = [];

	
	public function lop()
	{
		return $this->belongsTo('App\Lop','ma_lop');
	}
}
