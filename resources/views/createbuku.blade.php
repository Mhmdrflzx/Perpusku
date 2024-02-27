@extends('layout.navbar')
@extends('layout.sidebar')

@section('content')

<main id="main" class="main">

    <div id="page-wrapper">
        <div class="main-page">
            <a>　　　　　　　　　　　　　　　　　　　　　　　　</a>
            <div class="card-header" style="background-color: rgb(245, 254, 255);">
                    <div class="d-flex justify-content-between">
              </div>
            </div>
        </div>
       
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="pagetitle text-center">
                    <h1>Tambah Buku</h1>
                  </div><!-- End Page Title -->

                  <form action="/createbuku" method="POST" enctype="multipart/form-data">

                    @csrf <!-- Token CSRF untuk keamanan -->
                    <div class="mb-3">
                        <label for="buku" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="buku" name="buku" required>
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" required>
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun Terbit</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                    <div class="mb-3 ">
                        <label for="foto" class="form-label">Foto Buku</label>
                        <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
                    </div>
                    <br>
                    <div class="container d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection