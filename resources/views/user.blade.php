@extends('/template/navadmin')
@section('contents')
    
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Data Produk</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="card-title d-flex">User Table      
                        <p class="pt-1" style="margin-left: 650px; ">Total User : {{$total_user}}</p>

                      </div>
               
                    </div>
                    <div class="card-body">
                      <div class="card-sub d-flex">
                       
                        <div class="">
                            <form action="/user" method="post">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text-secondary" name="cari" style="width: 600px;" class="form-control" placeholder="Search">
                                    <button class="btn btn-dark " type="submit">Go</button>
                                </div>
                            </form>
                        </div>
                        <div class="search" style="margin-left: 85px">

                            <a href="/user/create" class="btn btn-primary ms-5" style=" height: 80%;">Tambah User</a><br>
                        </div>
                      </div>
                      <table class="table mt-3" >
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>                         
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $key => $item)
                            <tr>
                              <td>{{$key+1}}</td>
                              <td>{{$item->name}}</td>
                              <td>{{$item->email}}</td>
                              <td>{{$item->role}}</td>
                              <td><img class="rounded" src="{{asset('fotouser/'.$item->fotouser)}}" alt="" srcset="" style="width: 100px; height: 100px;"></td>                             
                              <td>
                                <a href="/user/delete/{{$item->id}}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger" >Hapus</a>
                                <a href="/user/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                              </td>
                            </tr>                                                       
                             @endforeach                       
                        </tbody>
                      </table>
                    </div>
                  </div>
            </div>										
        </div>
    </div>
</div>
@endsection
