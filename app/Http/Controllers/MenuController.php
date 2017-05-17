<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\UploadedFile;
use App\Menus;
use App\Transaksi;
use App\Merchant;
use DB;
use Auth;
use App\Transmenu;
use App\User;
use App\Topup;


class MenuController extends Controller
{
    public function index($id)
    {
        $this->data['menus']=Menus::where('id_merch', $id)->get();
        $this->data['merchant']=Merchant::find($id);

        return view('menu1', $this->data);
    }

    public function hasil(Request $request)
    {
        $id=DB::selectOne("SHOW TABLE STATUS LIKE 'transaksi'");
        $this->data['id']=$id->Auto_increment;
        $insert = New Transaksi;
        $insert->id_merch = $request->id_merch;
        $insert->id=Auth::user()->id;
        $insert->total=$request->total;
        $this->data['total']=$request->total;
        $insert->save();
        
        // $insert->id_merch;
        $test=$request->makanan;
    	foreach ($test as $key => $value) {
            
            if($value){
            $pieces = explode("|", $value);
            
            // echo $pieces[0];
            $menu = New Transmenu;
            $menu->jumlah=$pieces[1];
            $menu->id_transaksi=$id->Auto_increment;
            $menu->id_menu=$pieces[0];
            $menu->save();

            }
            
    	}
        $topup = New Topup;
        $topup->jenis="Pakai";
        $topup->jumlah=$request->total;
        $topup->id=Auth::user()->id;
        $topup->save();

        $saldo = User::find(Auth::user()->id);
        $this->data['saldolama']=$saldo->bungpay;
        $saldo->bungpay = $saldo->bungpay - $request->total;
        $saldo->save();

        $this->data['saldo'] = $saldo->bungpay ;
        // var_dump($pieces);

        $this->data['transaksi']=Transaksi::find($id->Auto_increment);
        
        // foreach ($this->data['transaksi']->order as $key => $value) {
        //    echo $value->menu->nama_menu;
        // }
        // echo $this->data['saldo'];
    	return view('hasil', $this->data);
    }

    public function addmenu(Request $request)
    {

    	$file = $request->file('photos');
    	// echo $file->getClientOriginalName();
    	$name=$file->move("foto",$file->getClientOriginalName());


    	$insert = New Menus;
    	// $insert->id_merch
    	$insert->nama_menu = $request->namamakanan;
    	$insert->deskripsi = $request->deskripsi;
    	$insert->foto = "$name";
    	$insert->harga = $request->harga;
    	$insert->save();

    	return redirect("/addmenu")->with("status", "Sukses Update");

    	// $path = $request->photo;
    	// $path=getClientOriginalName();
    	// echo $path;
    	// return back();
    }

    public function updatemenu(Request $request)
    {
    	$name=$file->move("foto",$file->getClientOriginalName());


    	$insert = New Menus;
    	// $insert->id_merch
    	$insert->nama_menu = $request->namamakanan;
    	$insert->deskripsi = $request->deskripsi;
    	$insert->foto = "/foto/$name";
    	$insert->harga = $request->harga;
    	$insert->save();

    }

}
