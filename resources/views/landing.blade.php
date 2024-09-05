@extends('/template/navbaruser')

@section('content')
<link rel="stylesheet" href={{asset('assets/css/kaiadmin.min.css')}} />
<link rel="stylesheet" href={{asset('assets/css/bootstrap.min.css')}} />
<link rel="stylesheet" href={{asset('assets/css/plugins.min.css')}} />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="container mt-3 ">
    <div class="mb-2" style="padding-top: 3%;">
        <div class="banner" >
          <img class="img rounded" src="{{asset('storage/foto/iklan.jpg')}}" style="width: 100%; height: 400px; " alt="" srcset="">
        </div>
      </div>
        <p class="fw-bold" style="font-size: 30px;">Rekomendasi </p>

        <div class="mt-2">
            <div class="row">
                @foreach ($produk as $key => $item)
                <div class="col-2 me-4 mt-2 md-5">
                        <div class="card" style="width:200px;height: 90%;">
                            <a href="/detail-produk/{{$item->id}}">
                                <img class="card-img-top border border-end-0" src="{{asset('storage/foto/'.$item->foto)}}" alt="Card image" style="width:100%;  ">

                            </a>
                            <div class="card-body ">

                                    <div class="Text"  style="width:180px ; word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word ">
                                        <p class="card-title " style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{$item->nama_produk}}</p>
                                    </div>
                                    <p class="fw-bold" style="">Rp.
                                        {{$item->harga}}
                                    </p>

                                <div class="d-flex">
                                    <form action="/cart/{{ $item->id}}" method="post" style="width: 100%; height: 33px">
                                        @csrf
                                        <input type="submit" style="" value="Beli Sekarang" class="fw-bold btn btn-dark">
                                    </form>
                                    <form action="/cart/{{ $item->id}}" method="post" class="ms-2">
                                        @csrf
                                            <button class="btn btn-dark" type="submit" style="width: 100%; height: 33px" >
                                                <i class="bi bi-bag-plus"></i>
                                            </button>

                                    </form>

                                </div>



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
<script src={{asset('/assets/js/core/jquery-3.7.1.min.js')}}></script>
      <script src={{asset('/assets/js/core/popper.min.js')}}></script>
      <script src={{asset('/assets/js/core/bootstrap.min.js')}}></script>


