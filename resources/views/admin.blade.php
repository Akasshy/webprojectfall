@extends('/template/navbar')
@section('content')
    @if (Session::has('pesan'))
    <div class="alert alert-success mt-5">{{ Session::get('pesan') }}</div>
    @endif

    <div class="container mt-5">
        <h3>Produk Saya</h3>
    </div>
    <p style="margin-left: 125px; ">Total Data Produk : {{$total_produk}}</p>
    <div class="container d-flex pt-3">
        <div class="">
            <a href="/produk/create" class="btn btn-primary">Tambah Produk</a><br>
        </div>
        <div class="" style="padding-left: 333px">
            <form action="/admin" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text-secondary" name="cari" style="width: 600px;" class="form-control" placeholder="Search">
                    <button class="btn btn-dark " type="submit">Go</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container pt-2">
        <table class="table " >
            <thead class="table ">
                <tr >
                    <th style="padding-bottom: 20px">No</th>
                    <th style="padding-left: 40px;padding-bottom: 20px">Foto</th>
                    <th style="padding-left: 60px;padding-bottom: 20px">Nama Produk</th>
                    <th style="padding-bottom: 20px">Kategori</th>
                    <th style="padding-bottom: 20px">Stok</th>
                    <th style="padding-bottom: 20px">Harga</th>
                    <th style="padding-left: 45px; padding-bottom: 20px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produk as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img class="rounded" src="{{asset('storage/foto/'.$item->foto)}}" alt="" srcset="" style="width: 100px; height: 100px;"></td>
                        <td class="fw-bold">{{$item->nama_produk}}</td>
                        <td style="padding-left: 15px">{{$item->kategori}}</td>
                        <td style="padding-left: 15px">{{$item->stok}}</td>
                        <td>{{$item->harga}}</td>
                        <td>

                            <a href="/produk/delete/{{$item->id}}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                            <a href="/produk/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection
