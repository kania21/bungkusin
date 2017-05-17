<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table ='menu';
    protected $primaryKey = 'id_menu';
    public $timestamps = false;
    public $incrementing = false;

    public function transmenu(){
    	return $this->hasMany('App\Transmenu', 'id_menu');
    }
}
