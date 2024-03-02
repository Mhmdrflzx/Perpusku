

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>LibraryKu</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/" rel="">
    <link href="assets/img/" rel="">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Template Main CSS File -->
    <link href="{{ asset('/frontend/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- =======================================================
  * Template Name: Mentor
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>

    /* CSS untuk memperbesar ukuran form modal */
.modal-body {
    width: 100%; /* Menyesuaikan lebar form control dengan lebar modal */
    padding: 15px; /* Menambahkan padding agar form control lebih besar */
    font-size: 14px; /* Menyesuaikan ukuran font */
}


    /* CSS untuk mengatur posisi label agar berada di pojok paling kiri */
.label-left {
    display: inline-block; /* Membuat label menjadi inline-block agar dapat diatur posisinya */
    width: auto; /* Menyesuaikan lebar sesuai dengan panjang teks */
    text-align: left; /* Mengatur alignment teks ke kiri */
    margin-right: 500px; /* Memberikan margin kanan agar terpisah dari input */
}


    body {
        font-family: 'Arial', sans-serif;
        text-align: center;
    }

    .icon-box img {
    width: 200px; /* Sesuaikan lebar gambar sesuai kebutuhan */
}

    /* Mengatur style untuk elemen input dan textarea */
    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box; /* agar padding tidak menambah lebar elemen */
        margin-bottom: 15px;
    }

    /* Mengatur style untuk tombol */
    button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Mengatur style untuk judul */
    h4 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    #icon {
    font-size: 24px; /* Ubah ukuran ikon sesuai kebutuhan Anda */
    margin-left: 20px; /* Atur jarak ke kanan sesuai kebutuhan Anda */
}


</style>

<body>
    @include('components.alert')
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/home">Library<span class="text-warning">Ku</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                
                    <li><a href="/home">Home</a></li>
                    <li><a href="/koleksi">koleksi</a></li>

                    <li><a href="/ulasan" >ulasan</a></li>
                </ul>
              
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            

            @guest
                <a href="{{ route('login') }}" class="get-started-btn">Login</a>
            @endguest

            @auth
            <a class="get-started-btn" href="{{ route('logout') }}"
            onclick="event.preventDefault(); confirmLogout();">
             {{ __('Logout') }}
         </a>

                <form onclick="logout" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endauth

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
                    <!-- Brand/logo -->
            
            
                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            @auth <!-- Periksa apakah pengguna sudah login -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="background-color: #d8d8d8" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i id="icon" class="bi bi-person-fill"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-header">
                                        <h6>{{ auth()->user()->name }}</h6>
                                        <hr class="dropdown-divider">
                                        <span>{{ auth()->user()->role }}</span>
                                    </li>
                                    @if(Auth::user()->role==='admin' || Auth::user()->role === 'petugas')
                                    <li>
                                        <a class="dropdown-item" href="/admin"> Halaman Admin <i class="bi bi-arrow-right-square-fill"></i></a>
                                    </li>
                                    @endif
                                </ul>
                            </li>
                            @endauth <!-- Akhir dari pengecekan status autentikasi -->
                        </ul>
                    </div>
                    
            </nav>
            
           

        </div>
    </header><!-- End Header -->


        <div class="container-fluid mt-5">


        </div>
        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Koleksi Buku</h3>
                            <div class="text-center">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                @foreach ($koleksi as $item)
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <img src="/Photo/{{ $item->buku->foto }}" width="200" class="book-image" onclick="location.href='/pinjam/{{ $item->buku->id }}' ">
                                        <br>
                                        <h4>{{ $item->buku->buku }}</h4>
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

           <!-- Vendor JS Files -->
    <script src="{{ asset('/frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/frontend/assets/js/main.js') }}"></script>

    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#delete', async function(e) {
                e.preventDefault();
                var link = $(this).attr("href");
    
                const swalResult = await Swal.fire({
                    title: 'Apakah kamu Mau Keluar?',
                    text: "Yakin??",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, keluar!'
                });
    
                if (swalResult.isConfirmed) {
                    await Swal.fire(
                        'Logout!',
                        'Anda Telah Keluar!',
                        'success'
                    );
                    window.location.href = link;
                }
            });
        });
    </script>
    <script>
        const confirmLogout = () => {
            Swal.fire({
                title: "Yakin Mau keluar Bang?",
                showDenyButton: true,
                confirmButtonText: "Iya",
                denyButtonText: "Tidak"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        }
    </script>

    {{-- <script>
        let liked1 = false;
        let likeCount1 = 0;

        let liked2 = false;
        let likeCount2 = 0;

        function toggleLike(counterId) {
            if (counterId === 'count1') {
                liked1 = !liked1;
                likeCount1 = liked1 ? likeCount1 + 1 : likeCount1 - 1;
                updateLikeStatus('count1');
            } else if (counterId === 'count2') {
                liked2 = !liked2;
                likeCount2 = liked2 ? likeCount2 + 1 : likeCount2 - 1;
                updateLikeStatus('count2');
            }
        }

        function updateLikeStatus(counterId) {
            const likeCountElement = document.querySelector(`.${counterId} .count${counterId}`);
            const currentLikeCount = counterId === 'count1' ? likeCount1 : likeCount2;
            likeCountElement.textContent = currentLikeCount;
        }
    </script> --}}
    @include('sweetalert::alert')
</body>

</html>
