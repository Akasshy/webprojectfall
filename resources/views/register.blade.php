<link rel="stylesheet" href={{asset('assets/css/bootstrap.min.css')}}>

<div class="container-fluid bg-dark  " style="width: 100%; height: 100%; padding-bottom: 6.8% ">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 col-lg-6 ">
            <img src= {{asset('gambar/vibeketwhite.png')}}
            class="img-fluid mt-5" style="padding-left: 10%;" alt="Sample image">
        </div>
        <div class="col-md-4 col-lg-6 mt-5" style="margin-left: -50px">
            <div class="card bg-light" style="width: 100%; height: 100%; background-color: #252222;  ">
                <p class=" fw-bold ms-4 mt-2 " style="padding-left: 35%; font-size: 35px; "> Register</p>
                <form class="ps-5" action="/register" method="post">
                    @csrf
                    <!-- Email input -->
                    <div class="form-group row">
                        <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>

                        <div class="col-md-6">
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="address" class="col-md-4 col-form-label text-md-right">Alamat</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label for="nomortelepon" class="col-md-4 col-form-label text-md-right">Nomor Telepon</label>

                        <div class="col-md-6">
                            <input id="nomortelepon" type="text" class="form-control @error('nomortelepon') is-invalid @enderror" name="nomortelepon" value="{{ old('nomortelepon') }}" required autocomplete="nomortelepon">

                            @error('nomortelepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-2 mt-3">
                        <div class="col-md-10" >
                            <button type="submit" class="btn btn-dark" style="width: 100%">
                                Register
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

