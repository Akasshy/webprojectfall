@extends('/template/navdetail')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('assetss/bootstrap/css/bootstrap.min.css')}}>
</head>
<body >
    <div class="container mt-5">
        @foreach ($keranjang as $item)
        <div class="card">
            <div class="container d-flex " >
                <div class="row">
                    <div class="col-md-1">
                        <img src="{{asset('storage/foto/'.$item->produk->foto)}}" class="img rounded mt-2" alt="" srcset="" style="width: 100px;">
                    </div>
                </div>
                <div class="col-md-8 ms-5 mt-3">
                    <h5 class="">{{$item->produk->nama_produk}}</h5>
                    <p class="fw-bold">Rp. {{$item->produk->harga}}</p>
                    <!-- <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores non delectus praesentium quod nostrum expedita possimus, porro fugit officia facere!
                    </p> -->
                    <div class="quantity d-flex mb-2">
                        <label for="" class="form-label fw-bold">Jumlah</label>
                        <input class="ms-3" type="number" style="height: 25px" name="Jumlah" id="" value="1" min="1">
                        <form action="/cart/{{ $item->id}}" method="post" style="width: 100%; height: 100%; margin-left: 500px">
                            @csrf
                            <input type="submit" style="" value="Beli Sekarang" class="fw-bold btn btn-dark">
                        </form>
                        <div class="notif-content mb-3">
                            <a href="/delete-cart/{{$item->id}}">
                                <input class="btn btn-dark fw-bold ms-3" type="submit" value="Hapus" style="width: 100%; height: 100%;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>

@endsection
