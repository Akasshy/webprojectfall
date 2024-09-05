<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
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
            'password' =>['required'],
            'role' => ['required']
        ]);

        if (Auth::attempt($validateData)) {
            if (Auth::user()->role == 'admin') {
                return redirect('/index')->with('pesan','Login Berhasil');
            }if (Auth::user()->role == 'user') {
                return redirect('/landing');
            }

        }
        return redirect()->back()->with('pesan','login gagal');

    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }


    // BAGIAN USER
    function showproduk(){
        $data['produk'] = Produk::all();
        $data['keranjang'] = Keranjang::all();
        return view('/landing', $data);
    }

    // function detail($id){
    //     $produk = Produk::findOrFail($id);
    //     return view('/detail-produk', ['produk' => $produk]);
    // }

    function searchuser(Request $req){
        $data['produk'] = Produk::where('nama_produk','LIKE','%'.$req->cari.'%')->orWhere('kategori','LIKE','%'.$req->cari.'%')->get();
        $data['keranjang'] = Keranjang::all();
        return view('/search',$data);
    }

    function showuser(){
        $data['user'] = User::all();
        $data ['total_user'] = $data['user']->count();
        return view('/user', $data);
    }

    function createuser(){
        return view('/user-create');
    }

    function adduser(Request $req){

        // $filename ='';

        // if ($req->file('fotouser')) {
        //     $extfile = $req->file('fotouser')->getClientOriginalExtension();
        //     $filename = time().".".$extfile;
        //     $req->file('fotouser')->storeAs('fotouser',$filename);
        // }
        $filename = time().'.'.$req->fotouser->extension();
        $req->fotouser->move(public_path('fotouser'), $filename);

        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'role' => $req->role,
            'fotouser' => $filename,

        ]);
        return redirect('/user');
    }

    function userdelete(Request $req){
        $user = User::find($req->id);
        $delete = User::where('id', $req->id)->delete();

        return redirect('/user');
    }
    function useredit(Request $req){
        $data['user'] = User::find($req->id);
        return view('user-edit',$data);
    }

    function userupdate(Request $req){

        // if ($req->file('foto')) {
        //     $extfile = $req->file('foto')->getClientOriginalExtension();
        //     $filename = time().".".$extfile;
        //     $req->file('foto')->storeAs('foto',$filename);
        // }
        $filename = time().'.'.$req->fotouser->extension();
        $req->fotouser->move(public_path('fotouser'), $filename);
        User::where('id', $req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'role' => $req->role,
            'fotouser' => $filename,
            // 'deskripsi' => $req->deskripsi,
        ]);

        return redirect('/user');
    }


}
