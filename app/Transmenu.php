<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transmenu extends Model
{
    protected $table ='transmenu';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;

    public function menu()
    {
    	return $this->belongsTo('App\Menus', 'id_menu');
    }
}

