<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhoaHoc extends Model
{
	public $timestamps = false;
	protected $table = "khoahoc";
	public $incrementing = false;
	protected $primaryKey = 'ma_khoa';
	protected $keyType = 'string';
    //
    public function lop()
    {
        return $this->hasMany('App\Lop');
    }
}
