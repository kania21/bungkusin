<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Topup;
use Auth;


class UserController extends Controller
{
    public function topup()
    {
        $this->data['user'] = User::find(Auth::user()->id);
        $this->data['topup'] = Topup::where('id', Auth::user()->id)->get();

    	return view('topup', $this->data);
    }
    
    public function transfer(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->bungpay = $user->bungpay + $request->gender;
        $user->save();

        $topup = New Topup;
        $topup->jenis="Topup";
        $topup->jumlah=$request->gender;
        $topup->id=Auth::user()->id;
        $topup->save();

        $this->data['isi']=$request->gender+rand(5, 25);


    	return view('transfer', $this->data);
    }

    public function pulsa(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->bungpay = $user->bungpay + $request->gender;
        $user->save();

        $topup = New Topup;
        $topup->jenis="Topup";
        $topup->jumlah=$request->gender;
        $topup->id=Auth::user()->id;
        $topup->save();

        $this->data['isi']=$request->gender+rand(5, 25);


    	return view('pulsa', $this->data);
    }
}
