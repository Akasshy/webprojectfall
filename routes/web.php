<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[UserController::class,"login"]);
Route::post("/auth",[UserController::class,"auth"]);
Route::get('/logout',[UserController::class,'logout']);
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['adminlogin'])->group(function (){
    Route::get("/admin",[ProdukController::class,"show"]);
    Route::post('/admin',[ProdukController::class,'search']);
    Route::get("/produk/create",[ProdukController::class,"create"]);
    Route::post("/produk/create",[ProdukController::class,"add"]);
    Route::get("/produk/delete/{id}",[ProdukController::class,"delete"]);
    Route::get('/produk/edit/{id}',[ProdukController::class,'edit']);
    Route::post('/produk/update/{id}',[ProdukController::class,'update']);

    Route::get("/index",[ProdukController::class,"index"]);

    Route::get("/user",[UserController::class,"showuser"]);
    Route::get("/user/create",[UserController::class,"createuser"]);
    Route::post("/user/create",[UserController::class,"adduser"]);
    Route::get("/user/delete/{id}",[UserController::class,"userdelete"]);
    Route::get('/user/edit/{id}',[UserController::class,'useredit']);
    Route::post('/user/update/{id}',[UserController::class,'userupdate']);
    Route::get("/user",[UserController::class,"cart"]);
    Route::post("/user",[UserController::class,"addcart"]);




});
// Bagian User
Route::middleware(['userlogin'])->group(function(){

    Route::get("/landing",[UserController::class,"showproduk"]);
    Route::get('/detail-produk/{id}',[ProdukController::class,"detail"]);
    Route::get('/detail-keranjang',[KeranjangController::class,"show"]);
    Route::post('/landing',[UserController::class,'searchuser']);
    // Route::get("/landing",[CartController::class,"cart"]);
    // Route::get('/detail-produk/{id}', [UserController::class, 'detail']);
    Route::post('/cart/{produk:id}',[KeranjangController::class,'addchart'])->name('cart.add');
    Route::get("/delete-cart/{id}",[KeranjangController::class,"delete"]);

    // Route::get("/transaksi",[TransaksiController::class,"index"]);
    // Route::get("/transaksi-create/{produk:id}",[TransaksiController::class,"create"]);
    // Route::post("/transaksi-create",[TransaksiController::class,"add"]);


});



