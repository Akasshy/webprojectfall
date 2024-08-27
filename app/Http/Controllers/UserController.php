<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    function login(){
        return view("login");
    }

    function auth(Request $req){
        $validateData = $req->validate([
            'email' =>['required','email'],
            'password' =>['required']
        ]);

        if (Auth::attempt($validateData)) {
            return redirect('/admin')->with('pesan','Login Berhasil');
        }
        return redirect()->back()->with('pesan','login gagal');
    }

    function show(){

        $data['produk'] = Produk::all();
        $data ['total_produk'] = $data['produk']->count();
        return view('/admin', $data);
    }


    function search(Request $req){
        $data['produk'] = Produk::where('nama_produk','LIKE','%'.$req->cari.'%')->get();
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
            // 'deskripsi' => $req->deskripsi

        ]);
        return redirect('/admin');
    }

    function edit(Request $req){
        $data['produk'] = Produk::find($req->id);
        return view('produk-edit',$data);
    }

    function update(Request $req){
        Produk::where('id', $req->id)->update([
            'nama_produk' => $req->nama_produk,
            'kategori' => $req->kategori,
            'stok' => $req->stok,
            'harga' => $req->harga,
            // 'deskripsi' => $req->deskripsi,
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

    function logout(){
        Auth::logout();
        return redirect('/');
    }

    // BAGIAN USER
    function showuser(){
        $data['produk'] = Produk::all();
        return view('/landing', $data);
    }

    function searchuser(Request $req){
        $data['produk'] = Produk::where('nama_produk','LIKE','%'.$req->cari.'%')->orWhere('kategori','LIKE','%'.$req->cari.'%')->get();
        return view('/search',$data);
    }

    
}
