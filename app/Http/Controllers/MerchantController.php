<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Merchant;
use Illuminate\Support\Facades\Auth;

class MerchantController extends Controller
{
    public function index(){
#    	$this->data['merchants']=Merchant::get();
   # 	return view('test',$this->data);
    	return view('signup');
    }
    public function bungkus(){
        if(Auth::user()->merchant) return redirect('/addmenu');
        // if(0) echo "a";
    	return view('test');
    }
    public function form(){
    	return view('formsignup');
    }
    public function proses(Request $request){
        $this->data["id_transaksi"]=$request->id;
        return view('pesanan', $this->data);
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
}
