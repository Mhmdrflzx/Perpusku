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
                    <h1>Edit Buku</h1>
                  </div><!-- End Page Title -->

                  <form action="/buku/{{ $buku->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="buku" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="buku" name="buku" value="{{ $buku->buku }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun Terbit</label>
                        <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $buku->tahun }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"  value="deskripsi" required>{{ $buku->deskripsi }}</textarea>
                    </div>
                    <br>
                    <div class="container d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection