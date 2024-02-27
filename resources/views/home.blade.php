@extends('layout.master')

@section('content')
    <section>
       
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('frontend/assets/images/foto3.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('frontend/assets/images/foto1.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

            <div class="carousel-text">
                <b>
                    <h1>SELAMAT DATANG</h1>
                    <p>LibraryKu JavaNese</p>
                </b>
            </div>

          </div>
          
        {{-- <div class="video-container" style="background-color: #ffffff;">
            <video width="100%" muted="muted" autoplay loop>
                <source src="{{ '/frontend/./assets/video/perpusidn.mp4' }}" type="video/mp4">
                <source src="{{ '/frontend/./assets/video/perpusidn.ogg' }}" type="video/ogg">
                <!-- Provide alternative video formats here for cross-browser compatibility -->
                Your browser does not support the video tag.
            </video>
            <div class="video-text">
                <b>
                    <h1>SELAMAT DATANG</h1>
                    <p>PERPUSTAKAAN INDONESIA</p>
                </b>
            </div>
        </div> --}}
    </section>

    <br>
    <div class="container fluid">
        <p> </p>
    </div>

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">


               
                    
               
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>BUKU PERPUSTAKAAN</h3>
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">

                                @foreach ($bukus as $buku)
                            
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="/Photo/{{ $buku->foto }}" width="200" class="book-image" onclick="location.href='/pinjam/{{$buku->id}}' ">
                                        <br>
                                        <h4>{{ $buku->buku }}</h4>
                                        <div class="container d-flex justify-content-between align-items-center mt-3">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                



                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>

            {{-- <div class="container">
                <h2>Daftar Postingan</h2>
        
                <ul>
                    @foreach ($posts as $post)
                        <li>{{ $post->title }}</li>
                    @endforeach
                </ul>
        
                {{ $posts->links() }}
            </div>
             --}}
        </section><!-- End Why Us Section -->
    @endsection
