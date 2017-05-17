<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
    protected $table ='topup';
    protected $primaryKey = 'id_topup';
    public $timestamps = false;
    public $incrementing = false;
}
