@extends('/template/navadmin')
@section('contents')


    <div class="container pt-5">
        <h3>Ubah Produk</h3>

        <div class="card">
            <div class="card-body">
                <form action="/user/update/{{$user->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pt-2">
                        <label class="pt-2" for="productName">Nama</label>
                        <input type="text" class="form-control mt-2" id="Name" name="name" placeholder="Masukkan nama" value="{{$user->name}}">
                    </div>


                    <div class="form-group pt-2">
                        <label class="pt-2" for="productName">Email</label>
                        <input type="text" class="form-control mt-2" id="Email" name="email" placeholder="Masukkan Email"  value={{$user->name}}>
                    </div>

                    <div class="form-group pt-2">
                        <label class="pt-2" for="productName">Password</label>
                        <input type="text" class="form-control mt-2" id="Password" name="password" placeholder="Masukkan Password" >
                    </div>

                    <div class="form-group pt-2">
                        <label class="pt-2" for="productName">Role</label>
                        <input type="text" class="form-control mt-2" id="role" name="role" placeholder="Masukkan Role"  value={{$user->role}}>
                    </div>

                    <div class="form-group pt-2">
                        <label for="Foto">Foto</label>
                        <input type="file" class="form-control mt-2" name="fotouser" id="image">
                    </div>
                  
                        <button type="submit" name="ubah" class="mt-2  w-100 btn btn-dark btn-block" >Simpan</button>

                    {{-- </div> --}}
                </form>
            </div>
        </div>
    </div>

@endsection
