<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('assetss/bootstrap/css/bootstrap.min.css')}}>
    {{-- <link rel="stylesheet" href={{asset('assets/css/bootstrap.min.css')}} /> --}}
    <link rel="stylesheet" href={{asset('assets/css/plugins.min.css')}} />
    <link rel="stylesheet" href={{asset('assets/css/kaiadmin.min.css')}} />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href={{asset('assets/css/demo.css')}} />
    <i class="bi bi-cart-fill"></i>
    <title>User</title>
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
            <ul class="navbar-nav mt-3">
                <li class="nav-item ">
                    <a class="nav-link text-dark ms-3 fw-bold " style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" href="/landing"><h6>Beranda</h6></a>
                  </li>
                 <form action="/landing" method="post">
                    @csrf
                     <li class="input-group d-flex ms-3 me-5 " >
                       <input  name="cari" class="form-control" type="text" placeholder="Cari disini...." style="width: 500px;height: 40px; " >
                       <button class="btn btn-dark" style="height: 40px; ">Cari</button>
                     </li>
                </form>


            <li class="nav-item topbar-icon dropdown hidden-caret ms-5 mt-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="/"
                  id="notifDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="dark" class="bi bi-cart2" viewBox="0 0 16 16" style="margin-bottom: 15px">
                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l1.25 5h8.22l1.25-5zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                  </svg>
                  {{-- <span class="notification">1</span> --}}
                </a>
                <ul
                  class="dropdown-menu notif-box animated fadeIn"
                  aria-labelledby="notifDropdown"
                >
                  <li>
                    <div class="dropdown-title">
                      Keranjang Anda
                    </div>
                  </li>
                  <li>
                      <div class="notif-scroll scrollbar-outer">
                          <div class="notif-center">
                          @foreach ($keranjang as $item)
                            <a href="/detail-keranjang">
                                <img src="{{asset('storage/foto/'.$item->produk->foto)}}"  class="mt-2 ms-3" style="width: 60px;height:60px">
                            <div class="notif-content">
                                <span class=" ms-4 " style="word-wrap:break-word ; white-space: normal ; overflow-wrap: break-word"> {{$item->produk->nama_produk}} </span>
                                <br>
                                <span class=" ms-4">Rp. {{$item->produk->harga}}</span>
                            </div>
                            <div class="notif-content mb-3" style="margin-left: 200px; margin-top: -25px">
                                <a href="/delete-cart/{{$item->id}}">
                                    <input class="btn btn-dark" type="submit" value="Delete"></a>
                            </div>
                            </a>
                        @endforeach
                    </div>
                    </div>
                  </li>
                </ul>
              </li>


                <li class="nav-item topbar-user dropdown hidden-caret ms-5">
                    <a
                      data-bs-toggle="dropdown"
                      href="#"
                      aria-expanded="true"
                    >
                      <div class="avatar-sm">
                        <img
                          src="assets/img/profile.jpg"
                          alt=""
                          class="avatar-img rounded-circle"
                        />
                      </div>
                      {{-- <span class="profile-username">
                        <span class="op-7">Hi,</span>
                        <span class="fw-bold">Admin</span>
                      </span> --}}
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                      <div class="dropdown-user-scroll scrollbar-outer">
                        <li>
                          <div class="user-box">
                            <div class="avatar-lg">
                              <img
                                {{-- src="{{asset('storage/foto/'.$user->fotouser)}}" --}}
                                alt="image profile"
                                class="avatar-img rounded"
                              />
                            </div>
                            <div class="u-text">
                              <h4>Admin</h4>
                              <p class="text-muted"></p>
                              <a
                                href="profile.html"
                                class="btn btn-xs btn-secondary btn-sm"
                                >View Profile</a
                              >
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">My Profile</a>
                          <a class="dropdown-item" href="#">Inbox</a>

                          <a class="dropdown-item" href="#">Account Setting</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="/logout">Logout</a>
                        </li>
                      </div>
                    </ul>
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

    <script src={{asset('/assets/js/core/jquery-3.7.1.min.js')}}></script>
	<script src={{asset('/assets/js/core/popper.min.js')}}></script>
	<script src={{asset('/assets/js/core/bootstrap.min.js')}}></script>

      <!-- jQuery Scrollbar -->
      <script src={{asset('/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}></script>
      <!-- Moment JS -->
      <script src={{asset('/assets/js/plugin/moment/moment.min.js')}}></script>
      <!-- Bootstrap Notify -->
      <script src={{asset('/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}></script>
	    <script src={{asset('/assets/js/kaiadmin.min.js')}}></script>

