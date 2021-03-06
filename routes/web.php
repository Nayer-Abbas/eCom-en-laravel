<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
route::view('/login', 'login');
route::view('/register','register');
Route::post("/login", [UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/", [ProductController::class,'index']);
Route::get("/detail/{id}", [ProductController::class,'detail']);
Route::get("/search", [ProductController::class,'search']);
Route::post("/add_to_cart", [ProductController::class,'addToCart']);
Route::get("/Cartlist", [ProductController::class,'CartList']);
Route::get("/removecart/{id}", [ProductController::class,'removeCart']);
Route::get("/ordernow", [ProductController::class,'orderNow']);
Route::Post("/orderplace", [ProductController::class,'orderPlace']);
Route::get("/myorder", [ProductController::class,'myOrder']);