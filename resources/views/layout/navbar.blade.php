<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LibraryKu - Backend</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('/backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('/backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
  <link href="{{asset('/backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="{{asset('/backend/assets/css/admin.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>

.logo-img2 {
    width: 100px; /* Sesuaikan dengan lebar yang Anda inginkan */
    height: auto; /* Sesuaikan dengan tinggi yang sesuai proporsi */
}


</style>
<body style="background-color: rgb(245, 254, 255);">

  <!-- ======= Header ======= -->
  @include('components.alert')
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-color: rgb(215, 250, 255);>

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo2 d-flex align-items-center">
          <img src="{{asset('backend/assets/img/libraryku.png')}}" alt="" style="height: 90px;">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->
  

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->



        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            {{-- <img src="{{asset('backend/assets/img/perpusidn.jpg')}}" alt="Profile" class="rounded-circle"> --}}
            @auth
            <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
             
              <h6>{{auth()->user()->email }}</h6>
              <span>{{auth()->user()->role }}</span>
              @endauth
             
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/home">
                <i class="bi bi-box-arrow-right"></i>
                <span>Home</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  @yield('content')


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/backend/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('/backend/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('/backend/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('/backend/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('/backend/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('/backend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/backend/assets/js/main.js')}}"></script>

</body>

</html>