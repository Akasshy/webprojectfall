<?php

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

Route::middleware(['\App\Http\Middleware\StatusLogin::class'])->group(function (){
    Route::get("/admin",[UserController::class,"show"]);
    Route::post('/admin',[UserController::class,'search']);
    Route::get("/produk/create",[UserController::class,"create"]);
    Route::post("/produk/create",[UserController::class,"add"]);
    Route::get("/produk/delete/{id}",[UserController::class,"delete"]);
    Route::get('/produk/edit/{id}',[UserController::class,'edit']);
    Route::post('/produk/update/{id}',[UserController::class,'update']);
    Route::get('/logout',[UserController::class,'logout']);

    Route::get("/landing",[UserController::class,"showuser"]);
    Route::post('/landing',[UserController::class,'searchuser']);
});
// Bagian User



