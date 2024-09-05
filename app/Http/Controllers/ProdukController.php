<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    //
    function show(){

        $data['produk'] = Produk::all();
        $data ['total_produk'] = $data['produk']->count();
        return view('/admin', $data);
    }



    function index(){
        return view('/index');
    }


    function search(Request $req){
        $data['produk'] = Produk::where('nama_produk','LIKE','%'.$req->cari.'%')->get();
        $data ['total_produk'] = $data['produk']->count();
        return view('/admin',$data);
    }

    function create(){
        return view("/produk-create");
    }

    function add(Request $req){

        $filename ='';

        if ($req->file('foto')) {
            $extfile = $req->file('foto')->getClientOriginalExtension();
            $filename = time().".".$extfile;
            $req->file('foto')->storeAs('foto',$filename);
        }

        Produk::create([
            'foto' => $filename,
            'nama_produk' => $req->nama_produk,
            'kategori' => $req->kategori,
            'stok' => $req->stok,
            'harga' => $req->harga,
            'deskripsi' => $req->deskripsi

        ]);
        return redirect('/admin');
    }

    function edit(Request $req){
        $data['produk'] = Produk::find($req->id);
        return view('produk-edit',$data);
    }

    function update(Request $req){
        $filename ='';

        if ($req->file('foto')) {
            $extfile = $req->file('foto')->getClientOriginalExtension();
            $filename = time().".".$extfile;
            $req->file('foto')->storeAs('foto',$filename);
        }
        Produk::where('id', $req->id)->update([
            'foto' => $filename,
            'nama_produk' => $req->nama_produk,
            'kategori' => $req->kategori,
            'stok' => $req->stok,
            'harga' => $req->harga,
            'deskripsi' => $req->deskripsi,
        ]);

        return redirect('/admin');
    }

    function delete(Request $req){
        $produk = Produk::find($req->id);
        $delete = Produk::where('id', $req->id)->delete();
        if ($delete) {
            if($produk->foto){
                Storage::delete('foto/'.$produk->foto);
            }
        }

        return redirect('admin');
    }

    function detail($id){
        $data['produk'] = Produk::where('id', $id)->first();
        $data['keranjang'] = Keranjang::all();
        return view('detail-produk', $data);
    }

}
