@extends('layout.master')

@section('content')



        <div class="container-fluid mt-5">


        </div>
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

                              
                            
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="" width="200" class="book-image" onclick="location.href='/koleksi/' ">
                                        <br>
                                        <h4></h4>
                                        <div class="container d-flex justify-content-between align-items-center mt-3">
                                        </div>
                                    </div>
                                </div>
                               
                                



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
