<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    function show(){
        return view('register');
    }

    function register(Request $req){
        $req->validate([
            'nama' => ['required', 'max:50'],
            'email' => ['required', 'email'],
            'password' => ['required','min:4','confirmed'],
            'konfirnasi_password' => ['required'],
            'alamat' => ['required'],
            'nomortelepon' => ['required'],
        ]);

        $user = Register::create([
            'nama' => $req->nama,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'alamat' => $req->alamat,
            'nomortelepon' => $req->nomortelepon,
        ]);

        return redirect()->route('login')->with('Sukses', 'Register Berhasil');
    }
}
