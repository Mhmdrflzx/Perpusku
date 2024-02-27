
@extends('layout.navbar')
@extends('layout.sidebar')

@section('content')
    
  <main id="main" class="main">


    <div id="page-wrapper">
        <div class="main-page">
            <a>　　　　　　　　　　　　　　　　　　　　　　　　</a>
            <div class="card-header" style="background-color: rgb(245, 254, 255);">
                    <div class="d-flex justify-content-between">
    <div class="pagetitle">
      <h1>Buku Perpustakaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
          <li class="breadcrumb-item active">Buku perpusidn</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <a href="/createbuku">
      <button type="button" class="btn btn-dark mt-3">Add +</button>
    </a>
              </div>
            </div>
        </div>
       
    </div>

    <div class="card-body">
        <table class="table table-hover text-center">
            <br>

            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Foto</th>
                <th>Deskripsi</th>
                <th></th>
                

            </tr>

            @foreach ($bukus as $buku)
                <tr>
                    <td class="text-center">
                      {{ $loop->iteration }}
                    </td>
                    <td class="text-center">
                      {{ $buku->buku }}
                    </td>
                    <td class="text-center">
                      {{ $buku->penulis }}
                    </td>
                    <td class="text-center">
                      {{ $buku->penerbit }}
                    </td>
                    <td class="text-center">
                      {{ $buku->tahun }}
                    </td>
                    <td class="text-center">
                       <img src="/Photo/{{ $buku->foto }}" alt=""  width="90">
                    </td>

                    <td>
                      <center><a href='' id="detail" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $buku->id }}">
                        <i class="bi bi-eye-fill"></i></a></center>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                      <div class="modal fade" id="exampleModal{{ $buku->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Deskripsi</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body mt-2 mb-3">
                            <a><b> {{ $buku->deskripsi }}</b></a>
                            <br>

                          
                        </div>
                      </div>
                      </div>
                    </td>

                    <!-- //DELETE -->
                    <td>
                      <center>
                        <a class="btn btn-danger" onclick="event.preventDefault(); confirmLogout({{$buku->id}});" href="">
                          <i class="bi bi-trash-fill"></i>
                        </a>
                        <form action="{{route('buku.destroy', $buku->id)}}" id="hapus{{ $buku->id }}" method="post">
                          @csrf
                          @method('delete')
                        </form>
                        </center>
                        <center>
                        <a class="btn btn-warning" href="{{ route('buku.edit', $buku->id) }}">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </center>
                    
            </td>

            @endforeach
                </tr>

</table>
</div>




  </main><!-- End #main -->
  
  <script>
    const confirmLogout = (id) => {
        Swal.fire({
            title: "Yakin Mau Di Hapus?",
            showDenyButton: true,
            confirmButtonText: "Iya",
            denyButtonText: "Tidak"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('hapus' + id).submit();
            }
        });
    }
</script>

@endsection
    
