<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table ='transaksi';
    protected $primaryKey = 'id_transaksi';
    public $timestamps = false;
    public $incrementing = false;

    public function order(){
    	return $this->hasMany('App\Transmenu', 'id_transaksi');
    }
}
