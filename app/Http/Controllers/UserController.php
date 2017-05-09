<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function topup()
    {
    	return view('topup');
    }
    
    public function transfer()
    {
    	return view('transfer');
    }

    public function pulsa()
    {
    	return view('pulsa');
    }
}
