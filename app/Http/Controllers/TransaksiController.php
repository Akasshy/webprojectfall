<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // function index(){
    //     $transaksi = Transaksi::all();
    //     return view('/transaksi', $transaksi);
    // }

    // public function create()
    // {
    //     $produk['produk'] = Produk::all();
    //     return view('transaksi-create',$produk);
    // }

    // function add(Request $req){
    //     $transaksi = new Transaksi();
    //     $transaksi->produk_id = $req->input('produk_id');
    //     $transaksi->quantity = $req->input('quantity');
    //     $transaksi->quantity = $req->input('quantity');
    //     $transaksi->total_price = $req->input('total_price');
    //     $transaksi->save();
    //     return redirect('/transaksi');
    // }
}
