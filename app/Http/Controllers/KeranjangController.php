<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    function addchart(Produk $produk){
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Anda harus login dulu');
        }

        Keranjang::create([
            'user_id' => auth()->user()->id,
            'produk_id'=> $produk->id,
            'quantity' => 1
        ]);

        return redirect()->back()->with('Sukses', 'Produk berhasil ditambahkan ke keranjang');
    }

    function delete(Request $request){
        $delete = Keranjang::find($request->id);
        $keranjang = Keranjang::where('id', $request->id)->delete();
        if ($keranjang) {
            return redirect()->back()->with('Sukses', 'Produk Berhasil dihapus dari keranjang');
        }else {
            return redirect()->back()->with('Gagal', 'Produk Gagal dihapus dari keranjang');

        }
    }

    function show(){
        $data['keranjang'] = Keranjang::all();
        return view('/detail-keranjang', $data);
    }


}
