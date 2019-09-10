<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhanHe extends Model
{
   public $timestamps = false;
	protected $table = "phanhe";
	public $incrementing = false;
	protected $primaryKey = 'ma_he';
	protected $keyType = 'string';
    //
    public function lop()
    {
        return $this->hasMany('App\Lop');
    }
}
