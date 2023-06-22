    @extends('template')
    @section('content')

   
<a href="{{url('/produk/add')}}" class="btn btn_primary">Tambah Data</a>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">

 <table class="table table-hover table-bordered table-striped">
    <tr>
        <th>no</th>
        <th>foto</th>
        <th>nama</th>
        <th>harga</th>
        <th>deskripi</th>
        <th>aksi</th>
    </tr>

    <tr>
        @foreach ($produk as $key => $item)
        <td>{{ $key+1 }}</td>
        <td>
            <img src="/storage/{{ $item->foto}}" alt="" width="100">
        </td>
        <td>{{ $item->nama_barang }}</td>
        <td>{{ $item->harga}}</td>
        <td>{{ $item->deskripsi }}</td>
        <td>
            <a href="/produk/hapus/{{ $item->id}}" class="btn btn-primary" onclick="return window.confirm('Hapus data ini?')">Hapus</a>
            <a href="/produk/edit/{{ $item->id}}" class="btn btn-primary">Edit</a>
        </td>
    </tr>
    @endforeach
 </table>           
        </div>
    </div>
</div>
</body>
</html>
@endsection