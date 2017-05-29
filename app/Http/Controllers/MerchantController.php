<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchant;

class MerchantController extends Controller
{
    public function index(){
#    	$this->data['merchants']=Merchant::get();
   # 	return view('test',$this->data);
    	return view('signup');
    }
    public function bungkus(){
    	return view('test');
    }
    public function form(){
    	return view('formsignup');
    }
    public function proses(){
        return view('pesanan');
    }
    public function history(){
        return view('historay');
    }
    public function merchant(){
        return view('pesananmerchant');
    }
    public function addmenu(){
        return view('merchantsego');
    }
    public function editmenu(){
        return view('editmenu');
    }
     public function merchantmenu(){
        return view('menubaru');
    }
    public function dashmerch(){
        return view('dashmerch');
    }
    public function tambahmenu(){
        return view('tambahmenu');
    }
}
