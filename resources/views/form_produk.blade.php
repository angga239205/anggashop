@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
        <form action="{{ $action }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <label for="" class="form-label">foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>

            <div class="mb-2">
                <label for="" class="form-label">nama</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ $produk->nama_produk}}" placeholder="masukan nama barang">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">harga</label>
                <input type="text" name="harga" id="harga" class="form-control" value="{{ $produk->harga}}" placeholder="masukan harga">
            </div>
            <div class="mb-2">
                <label for="" class="form-label">deskripi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="{{ $produk->deskripsi }}" placeholder="masukan deskripsi">
            </div>
           <div class="mb-2">
            <td colspan="2" align="center">
                <input type="submit" value="{{ $tombol }}" class="btn btn-primary form-control">
            </td>
           </div>
        </div>
    </form>
</body>
</html>
@endsection