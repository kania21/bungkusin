<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\UploadedFile;
use App\Menus;
use App\Transaksi;
use App\Merchant;

class MenuController extends Controller
{

    public function index($id)
    {
        $this->data['menus']=Menus::where('id_merch', $id)->get();
        $this->data['merchant']=Merchant::find($id);
        // foreach ($this->data['menus'] as $value) {
        //     echo $value->id_merch;
        // }


        return view('menu1', $this->data);


//    	echo $a;
    	// return view($a);
    }
    public function hasil(Request $request)
    {
        $insert = New Transaksi;
        // $insert->id_merch;
    	foreach ($request->makanan as $key => $value) {
    		echo $value;
    	}



    	// return view('hasil');
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
    	$insert->foto = "/foto/$name";
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
