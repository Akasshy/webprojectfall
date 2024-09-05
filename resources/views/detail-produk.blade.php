@extends('/template/navdetail')
@section('content')


<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('assetss/bootstrap/css/bootstrap.min.css')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <div class="container d-flex mt-5" >
        <div class="row">

                <img src="{{asset('storage/foto/'.$produk->foto)}}" class="rounded" alt="" srcset="" style="width: 100%;">
        </div>
        <div class="col-md-6 ms-5">
            <h1 class="display-5 fw-bold" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">{{$produk->nama_produk}}</h1>
            <p class="fw-bold" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Rp.{{$produk->harga}}</p>

            <p>
               {{$produk->deskripsi}}
            </p>
            <div class="quantity">
                <label for="" class="form-label">Jumlah</label>
                <input type="number" name="Jumlah" id="" value="1" min="1">
            </div>
            <div class="pt-3 d-flex">

                <form action="/cart/{{ $produk->id}}" method="post" >
                    @csrf
                        <button class="btn btn-dark fw-bold" type="submit" style="width: 100%; height: 33px" >
                            <i class="bi bi-bag-plus"></i>

                        </button>
                </form>
                {{-- <form action="/cart/{{ $produk->id}}" method="post" class="ms-2" style="width: 100%">
                    @csrf
                    <input type="submit" style="width: 100%" value="Beli Sekarang" class="btn btn-dark fw-bold">
                </form> --}}
                <a href="/transaksi-create/" class="btn btn-dark ms-3">Beli Sekarang
                    </a>

            </div>
        </div>
    </div>
</body>
</html>

@endsection
    {{-- <script src={{asset('/assets/js/core/jquery-3.7.1.min.js')}}></script>
	<script src={{asset('/assets/js/core/popper.min.js')}}></script>
	<script src={{asset('/assets/js/core/bootstrap.min.js')}}></script> --}}

	<!-- jQuery Scrollbar -->
	{{-- <script src={{asset('/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}></script>
	<!-- Moment JS -->
	<script src={{asset('/assets/js/plugin/moment/moment.min.js')}}></script>

	<!-- Chart JS -->
	<script src={{asset('/assets/js/plugin/chart.js/chart.min.js')}}></script>

	<!-- jQuery Sparkline -->
	<script src={{asset('/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}></script>

	<!-- Chart Circle -->
	<script src={{asset('/assets/js/plugin/chart-circle/circles.min.js')}}></script>

	<!-- Datatables -->
	<script src={{asset('/assets/js/plugin/datatables/datatables.min.js')}}></script>

	<!-- Bootstrap Notify -->
	<script src={{asset('/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}></script>

	<!-- jQuery Vector Maps -->
	<script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
	<script src="../assets/js/plugin/jsvectormap/world.js"></script>

	<!-- Sweet Alert -->
	<script src={{asset('/assets/js/plugin/sweetalert/sweetalert.min.js')}}></script>

	<!-- Kaiadmin JS -->
	<script src={{asset('/assets/js/kaiadmin.min.js')}}></script> --}}
