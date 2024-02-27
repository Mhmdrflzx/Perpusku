
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
      <h1>Data Peminjaman</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
          <li class="breadcrumb-item active">Peminjaman</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
                    </div>
            </div>
        </div>
       
    </div>

    <div class="card-body">
        <table class="table table-hover text-center">
            <br>

            <tr>
                <th>No</th>
                <th>Buku</th>
                <th>Tangggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Petugas</th>
                <th>Status</th>
                <th>Peminjam</th>
                <th></th>
                

            </tr>
            @foreach ($pinjams as $pinjam)
                <tr>
                    <td class="text-center">
                      {{ $loop->iteration }}
                    </td>
                    <td class="text-center">
                      {{ $pinjam->Buku }}
                    </td>
                    <td class="text-center">
                      {{ $pinjam->pinjam }}
                    </td>
                    <td class="text-center">
                      {{ $pinjam->kembali }}
                    </td>
                    <td class="text-center">
                      {{ $pinjam->petugas }}
                    </td>
                    <td class="text-center text-danger">
                      {{ $pinjam->status }}
                    </td>
                    <td>
                      <center><a href='' id="detail" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $pinjam->id }}">
                        <i class="bi bi-eye-fill"></i></a></center>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                      <div class="modal fade" id="exampleModal{{ $pinjam->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peminjam</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <a>Nama  :  <span><b>{{ $pinjam->name }}</b></a>
                            <br>
                            <a>Alamat  :  <span><b>{{ $pinjam->alamat }}</b></a>
                            <br>
                            <a>Nomor Handphone  :  <span><b>{{ $pinjam->nomor }}</b></a>
                          </div>

                          <div class="modal-footer">
                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button> --}}
                          </div>
                        </div>
                      </div>
                      </div>
                    </td>
                    <td>
                      <center>
                        <a class="btn btn-danger" onclick="event.preventDefault(); confirmLogout({{ $pinjam->id }});" href="">
                          <i class="bi bi-trash-fill"></i>
                        </a>
                        <form action="{{route('pinjam.destroy', $pinjam->id)}}" id="hapus{{ $pinjam->id }}" type="submit" method="post">
                          @csrf
                          @method('delete')
                        </form>
                      </center>

                      <center><a href='' id="detail" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="bi bi-pencil"></i></a></center>
                        <!-- Button trigger modal -->
                        <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Validasi Petugas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="/pinjam/{{ $pinjam->id }}" method="POST">
                              @method('put')
                              @csrf
                              <div class="mb-3">
                                <label for="status" class="label-left">Status:</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Belum" @if($pinjam->status == 'belum') selected @endif>Belum</option>
                                    <option value="Sudah" @if($pinjam->status == 'sudah') selected @endif>Sudah</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                              <label for="petugas" class="label-left">Petugas  :</label>
                              <input type="text" class="form-control" id="petugas" name="petugas" value="{{ auth()->user()->name }}">
                            <!-- Tambahkan elemen form lainnya sesuai kebutuhan -->
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                      </div>
                    </td>
                    @endforeach

                    <!-- //DELETE -->
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