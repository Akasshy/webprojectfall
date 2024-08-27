<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset('assets/bootstrap/css/bootstrap.min.css')}}>
</head>
<body>
    <div class="container-fluid bg-dark" style="width: 100%; height: 641px;">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9 col-lg-6 ">
                <img src= {{asset('gambar/vibeketwhite.png')}}
                class="img-fluid mt-5" style="padding-left: 10%;" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 mt-5 ">
                
                <div class="card bg-light" style="width: 75%; height: 100%; background-color: #252222;  ">
                    <p class=" fw-bold ms-4 mt-2 " style="padding-left: 35%; font-size: 35px; "> Login</p>




                    <form action="/auth" method="post">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 ms-5 fw-bold">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" style="width: 400px;"
                            placeholder="Enter Email" />
                        </div>
                        
                        <div class="form-outline mb-4 ms-5 fw-bold">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" id="passsword" class="form-control" style="width: 400px;"
                            placeholder="Enter Password" />
                        </div>
                        
                        {{-- <div class="radio ms-5 mb-3 d-flex">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Admin
                                <label class="form-check-label" for="radio1"></label>
                            </div>
                            <div class="form-check ms-3">
                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">User
                                <label class="form-check-label" for="radio2"></label>
                            </div>
                        </div>
                         --}}
                        
                        <div class="form-outline mb-4 ms-5 " >
                            <input type="submit"  style="width: 400px; ;" class="btn btn-dark fw-bold text-light" value="Login" ></input>
                            
                            <p class="small fw-bold mt-2 pt-1 mb-0" style="padding-left: 1%;">Don't have an account? <a href=""
                                class="link-danger">Register</a></p>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
    </div>
</body>
</html>