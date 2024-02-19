<?php

use App\Http\Controllers\addProduct;
use App\Http\Controllers\controllerProducto;
use App\Http\Controllers\showController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('product',[controllerProducto::class,'index'])->name('product.index');
Route::get('addProduct',[addProduct::class,'index']);
Route::post('addProduct',[addProduct::class,'store']);
Route::get('showProduct',[controllerProducto::class,'show']);
Route::post('showProduct',[controllerProducto::class,'index']);
