<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $table ='Merchant';
    protected $primaryKey = 'id_merchant';
    public $timestamp = false;
    public $incrementing = false;
}
