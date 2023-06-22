<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\BarangController;

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
Route::get('/beranda', function () {
    return view('beranda');
});
Route::get('/template', function () {
    return view('template');
});

Route::get('produk',[produkcontroller::class,'show']);
Route::get('produk/add',[produkcontroller::class,'add']);
Route::post('produk/create',[produkcontroller::class,'create']);
Route::get('produk/hapus/{id}',[produkcontroller::class,'hapus']);
Route::get('produk/edit/{id}',[produkcontroller::class,'edit']);
Route::post('produk/update/{id}',[produkcontroller::class,'update']);

Route::get('beranda',[BarangController::class,'show']);
Route::get('produk/detail/{id}',[BarangController::class,'detail']);
