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
    public function withdraw(Request $request)
    {
        $this->data['isi']=20000000;
        return view('withdraw', $this->data);
    }

    public function withdrawget(Request $request)
    {
        $this->data['isi']=20000000;
        return redirect('/withdraw')->with('status', 'Mohon Tunggu, dana akan segera dikirim ke rekening anda. Terima Kasih');
    }
      public function daftar(Request $request)
    {
        
        return view('daftar', $this->data);
    }
}
