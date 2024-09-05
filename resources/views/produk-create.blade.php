@extends('/template/navadmin')
@section('contents')


    <div class="container pt-5">
        <h3>Tambah Produk</h3>

        <div class="card">
            <div class="card-body">
                <form action="/produk/create" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group pt-2">
                        <label for="Foto">Foto</label>
                        <input type="file" class="form-control mt-2" name="foto" id="image">
                    </div>

                    <div class="form-group pt-2">
                        <label class="pt-2" for="productName">Nama Produk</label>
                        <input type="text" class="form-control mt-2" id="productName" name="nama_produk" placeholder="Masukkan nama produk">
                    </div>

                    <div class="form-group pt-2">
                        <label class="pt-2" for="productName">Kategori</label>
                        <input type="text" class="form-control mt-2" id="productName" name="kategori" placeholder="Masukkan Kategori">
                    </div>

                    <div class="form-group pt-2">
                        <label class="pt-2" for="productName">Stok</label>
                        <input type="text" class="form-control mt-2" id="productName" name="stok" placeholder="Masukkan Stok">
                    </div>

                    <div class="form-group pt-2">
                        <label class="pt-2" for="productName">Harga</label>
                        <input type="text" class="form-control mt-2" id="productName" name="harga" placeholder="Masukkan Harga">
                    </div>

                    <div class="form-group pt-2">
                        <label class="pt-2" for="comment">Deskripsi Produk</label>
                        <textarea name="deskripsi" class="form-control" rows="5" id="comment" name="text"></textarea>
                    </div>

                    {{-- <div class="d-flex mt-2">
                        <button type="submit" name="simpan" class="mt-2  w-100 btn btn-dark btn-block" > Kembali</button> --}}

                        <button type="submit" name="simpan" class="mt-2  w-100 btn btn-dark btn-block" >Simpan</button>

                    {{-- </div> --}}
                </form>
            </div>
        </div>
    </div>



    <@endsection
