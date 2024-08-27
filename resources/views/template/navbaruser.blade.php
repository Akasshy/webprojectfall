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
        <div class="container">
          <a class="navbar-brand " href="">
            <h2 class="fw-bold text-dark" >VibeKet</h2>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item ">
                    <a class="nav-link text-dark ms-3" href="/landing">Beranda</a>
                  </li>
                 <form action="/landing" method="post">
                    @csrf
                     <li class="input-group d-flex ms-3 me-5 " >
                       <input  name="cari" class="form-control" type="text" placeholder="Cari disini...." style="width: 500px;height: 40px; " >
                       <button class="btn btn-dark" style="height: 40px; ">Cari</button>
                     </li>
                </form>
               <!-- icon notif -->
               <li class="nav-item ms-5 mt-1 ">
                <a href="" class="text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
                  </svg>
                </a>
               </li>
               <!-- icon pesan -->
               <li class="nav-item ms-4 mt-1 ">
                <a href="" class="text-dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
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
                <li class="nav-item">
                    <a href="" class="" style="margin-left: 90px;" >
                        <img class="img rounded-circle" src="gambar/profil.jpg" style="width: 35px;" alt="" srcset="">
                    </a>
                </li>
            </ul>
        <!-- <button class="btn btn-success me-2" type="button">Login</button>
        <button class="btn btn-primary" type="button">Register</button> -->

          </div>
        </div>
      </nav>

      <div class="pt-5">
        @yield('content')
      </div>
