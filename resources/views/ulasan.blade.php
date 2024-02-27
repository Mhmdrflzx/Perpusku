@extends('layout.master')

@section('content')

<div class="container mt-4 mb-4">
    <h1>haha</h1>
</div>


<div class="container mt-4">
    <form method="POST">
        @csrf

        <h3>Ulasan Perpustakaan</h3>
        <div class="mb-3 text-start">
            <label for="buku" class="form-label">Judul Buku:</label>
            <input type="text" class="form-control" id="buku" name="buku">
        </div>
        <div class="mb-3 text-start">
            <label for="ulasan" class="form-label">Ulasan:</label>
            <textarea class="form-control" id="ulasan" name="ulasan" rows="3"></textarea>
        </div>
        <div class="container d-flex justify-content-end">
        <button type="submit" class="btn btn-secondary mt-2">Kirim</button>
        </div>
    </form>
</div>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <div class="card">
                @foreach ($ulasans as $ulasan)

                    <div class="card-body">
                        <div class="user-review" style="text-align: justify;">
                            <h6 class="card-title"> <i class="fas fa-user-circle"></i> {{ $ulasan->owner }} <span> | {{ $ulasan->buku }}</h6>
                            <p class="card-text" style="font-size: 15px">{{ $ulasan->ulasan }}</p>
                        </div>
                        <hr>
                    </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
<br>


@endsection