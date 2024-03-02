
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
      <h1>Data User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
          <li class="breadcrumb-item active">User</li>
        </ol>
      </nav>
              </div><!-- End Page Title -->
              <a href="/createuser">
               <button type="button" class="btn btn-dark mt-3">Add +</button></a>
              </div>
            </div>
        </div>
       
    </div>

    <div class="card-body">
        <table class="table table-hover text-center">
            <br>

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Password</th>
                <th></th>
                

            </tr>
            @foreach ($users as $user)
                <tr>
                    <td class="text-center">
                      {{ $loop->iteration }}
                    </td>
                    <td class="text-center">
                      {{ $user->name }}
                    </td>
                    <td class="text-center">
                      {{ $user->email }}
                    </td>
                    <td class="text-center">
                      {{ $user->role }}
                    </td>
                    <td class="text-center">
                      {{ $user->nomor }}
                    </td>

                    <!-- //DELETE -->
                    <td>
                        <center><a href='' id="detail" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $user->id }}">
                            <i class="bi bi-eye-fill"></i></a></center>
                            <!-- Button trigger modal -->
                            <!-- Modal -->
                          <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Alamat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body mt-2 mb-3">
                                <a><b> {{ $user->alamat }}</b></a>
                                <br>
    
                              
                            </div>
                          </div>
                          </div>
                    </td>
                    <td>
                      <center>
                        <a class="btn btn-danger" onclick="event.preventDefault(); confirmLogout({{$user->id}});" href="">
                          <i class="bi bi-trash-fill"></i>
                        </a>
                        <form action="{{route('user.destroy', $user->id)}}" id="hapus{{ $user->id }}" method="post">
                          @csrf
                          @method('delete')
                        </form>
                        </center>
                        <br>
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
    
