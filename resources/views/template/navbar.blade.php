<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('assets/bootstrap/css/bootstrap.min.css')}}>
    <i class="bi bi-cart-fill"></i>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
        <div class="container" style="margin-left: 110px">
          <a class="navbar-brand " href="/admin">
            <h2 class="fw-bold text-dark" >VibeKet</h2>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item ">
                    <a class="nav-link text-dark ms-3" href="/admin">Produk Saya</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link text-dark ms-3" href="#">Penjualan Barang</a>
              </li>
              {{-- <li class="dropdown ">
                <a class="nav-link dropdown-toggle ms-3 text-dark" href="" data-bs-toggle="dropdown">Data</a>
                  <ul class="dropdown-menu ">
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Another link</a></li>
                    <li><a class="dropdown-item" href="#">A third link</a></li>
                  </ul> --}}
                {{-- <li class="input-group d-flex ms-3  " >
                  <input class="form-control" type="text" placeholder="Cari disini...." style="width: 400px;height: 40px; " >
                  <button class="btn btn-dark" type="button" style="height: 40px; ">Cari</button>
                </li>  --}}
               </li>
               <!-- icon notif -->
               <li class="nav-item  mt-2" style="padding-left: 550px">
                <a href="" class="text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                  </svg>
                </a>
               </li>
               <!-- icon pesan -->
               <li class="nav-item ms-4 mt-2 ">
                <a href="" class="text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2"/>
                  </svg>
                </a>
               </li>
               <!-- Icon Keranjang -->
               {{-- <li class="nav-item ms-4 mt-1">
                <a href="" class="text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg>
                </a>
               </li> --}}
                <li class="nav-item ">
                    <a href="" class="" style="padding-left: 30px ;" >
                        <img class="img rounded-circle " src={{asset('gambar/profil.jpg')}} style="width: 35px;" alt="" srcset="">

                    </a>
                </li>
            </ul>
        {{-- <a class="btn btn-danger" href="/logout">Logout</a> --}}


          </div>
        </div>
      </nav>

      <div class="pt-5">
        @yield('content')
      </div>
