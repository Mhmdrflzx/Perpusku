@extends('layout.master')

@section('content')


<div class="container-fluid ">
    <p> </p>
</div>

<br>
<hr>
    <div class="container" style="margin-top: 100px">
    <div class="content">
        <div class="row d-flex justify-content-between">
          
          <div class="col-md-4">
              <div class="left-side">
                  <div class="photo a aos-init aos-animate">
                      <img src="/Photo/{{ $buku->foto }}" width="250px" alt="Book Cover">
                  </div>
              </div>
          </div>

            <div class="col-md-8">
                {{-- <div class="right-side"> --}}
                    <div class="d-flex flex-column align-items-start" style="font-size: 15px;">
                        <h5>{{$buku->buku}}</h5>
                       
                       <p class="text-gray">By {{$buku->penulis}}</p>
                    
                        <p style="text-align: justify;">{{$buku->deskripsi}}</p>

                        <div class="container">

                            <div class="row ">
                                <div class="col-2 text-start" style="font-size: 15px">
                                    <p>Penulis</p></div>
                                <div class="col text-start" style="font-size: 15px"><p></i>{{$buku->penulis}}</p></div>
                            </div>
                           
                            <div class="row ">
                                <div class="col-2 text-start" style="font-size: 15px">
                                    <p>Penerbit</p></div>
                                <div class="col text-start" style="font-size: 15px"><p>{{$buku->penerbit}}</p></div>
                            </div>

                            <div class="row ">
                                <div class="col-2 text-start" style="font-size: 15px">
                                    <p>Tahun Terbit</p></div>
                                <div class="col text-start" style="font-size: 15px"><p>{{$buku->tahun}}</p></div>
                            </div>

                            <br>

         <!-- Button untuk memicu modal -->

               <div class="row">
               <div class="col text-start" style="font-size: 15px">
              <button class="btn btn-danger float-end mr-4" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#exampleModal">Pinjam</button>
            </div>
             </div>

         <!-- Modal -->

           <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="false">
            <div class="modal-dialog">
           <div class="modal-content">
             <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Peminjaman</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            <div class="modal-body">

        <!-- Isi modal, termasuk form -->
        <form action="/pinjam" method="POST">
            @csrf
          <div class="mb-3">
            <label for="name" class="label-left">Nama:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="mb-3">
            <label for="buku" class="label-left">Buku:</label>
            <input type="text" class="form-control" id="buku" name="buku" value="{{$buku->buku}}">
          </div>
          <div class="mb-3">
            <label for="alamat" class="label-left">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
          <div class="mb-3">
            <label for="nomor" class="label-left">Nomor Telepon:</label>
            <input type="text" class="form-control" id="nomor" name="nomor">
          </div>
          <div class="mb-3">
            <label for="pinjam" class="label-left"> Tanggal Pinjam:</label>
            <input type="date" class="form-control" id="pinjam" name="pinjam">
          </div>
          <div class="mb-3">
            <label for="kembali" class="label-left">Tanggal Kembali:</label>
            <input type="date" class="form-control" id="kembali" name="kembali">
          </div>
          <!-- Tambahkan elemen form lainnya sesuai kebutuhan -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Kirim</button>
          </div>
        </form>
       </div>
     </div>
    </div>
   </div>
  </div>

                </div> 
            </div>
        </div>

    </div>
</div>
<br>

<br>

<div class="container-fluid">
    <p> </p>
</div>
<br>
<hr>

@endsection