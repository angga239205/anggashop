<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class BarangController extends Controller
{
    //
    function show(){
        $data ['produk'] = produk::all();
        return view('beranda',$data);
    }
    
    function detail($id){
        $data ['produk'] = produk::find($id);
        return view('detail',$data);
    }
}
