<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NganhHoc extends Model
{
	public $timestamps = false;
	protected $table = "nganhhoc";
	public $incrementing = false;
	protected $primaryKey = 'ma_nganh';
	protected $keyType = 'string';
    //
    public function lop()
    {
        return $this->hasMany('App\Lop');
    }
}
