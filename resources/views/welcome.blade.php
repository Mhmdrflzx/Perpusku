@extends('layout.master')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/assets/images/foto1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/assets/images/foto2.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <div class="carousel-text text-dark">
                <b>
                    <h1>SELAMAT DATANG</h1>
                    <p>LibraryKu Indonesia</p>
                </b>
            </div>

        </div>
    </section>

    <br>

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="chakra-stack css-ujz8lb"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                    viewBox="0 0 24 24" height="46" width="46" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z">
                    </path>
                </svg>
                <p class="chakra-text css-1auctgd">  Mau pinjam dan baca buku? Login dulu bosquu!</p>
                    <a href="{{ route('login') }}" class="get-started-btn">Daftar Dan Login</a>
                        <br>
            </div>
        </section><!-- End Why Us Section -->
    @endsection
