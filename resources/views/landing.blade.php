@extends('/template/navbaruser')

@section('content')

<div class="container mt-3 ">
    <div class="mb-2" style="padding-top: 3%;">
        <div class="banner" >
          <img class="img rounded" src="{{asset('storage/foto/image.png')}}" style="width: 100%; height: 400px; " alt="" srcset="">
        </div>
      </div>
        <p class="fw-bold" style="font-size: 30px;">Rekomendasi </p>

        <div class="mt-2">
            <div class="row">
                @foreach ($produk as $key => $item)
                <div class="col-2 me-4 mt-2 md-5">
                        <div class="card" style="width:200px;height: 100%;">
                            <img class="card-img-top border border-end-0" src="{{asset('storage/foto/'.$item->foto)}}" alt="Card image" style="width:100%;  ">
                            <div class="card-body "> 
                                <p class="card-title " style="font-size: 17px;">{{$item->nama_produk}}</p>
                                <p class="fw-bold">Rp.
                                    {{$item->harga}}
                                </p>
                                <a href="" class="btn btn-dark" style="width: 100%; height: 30%;">
                                    <p class="fw-bold">Beli Sekarang</p>
                                </a>
                                {{-- <a href="" class="text-dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                    </svg>
                                </a> --}}
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

</div>
@endsection


