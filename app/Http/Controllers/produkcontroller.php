<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class produkcontroller extends Controller
{
    //
    function show(){
        $data['produk']= produk::all();
        return view('produk',$data);
    }

    function add(){ 
        $data=[
            'action'=> url('produk/create'),
            'tombol'=>'simpan',
            'produk'=>(object)[
                'foto'=>'',
                'nama_produk'=>'',
                'harga'=>'',
                'deskripsi'=>''
            ]
            ];
        return view('form_produk',$data);
    }
    function create(Request $request){
      produk::create([
            'foto'=> $request->file('foto')->store('foto'),      
            'nama_produk'=> $request->nama_produk,
            'harga'=> $request->harga,
            'deskripsi'=> $request->deskripsi
        ]);
      return redirect('produk');
    }
    function hapus($id){
        produk::where('id',$id)->delete();
        return redirect('produk');
    }  
    function edit($id){
        $data['produk'] =produk::find($id);
        $data['action'] = url('produk/update').'/'.$data['produk']->id;
        $data['tombol'] = "Update";
        
        return view('form_produk',$data);
    }
    function update(Request $request){
        produk::where('id', $request->id)->update([
            'foto'=> $request->file('foto')->store('foto'),
            'nama_produk'=>$request->nama_produk,
            'harga'=>$request->harga,
            'deskripsi'=>$request->deskripsi,

        ]);

        return redirect('produk');
    }
    
}
