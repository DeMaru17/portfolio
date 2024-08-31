<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Personal Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('porto/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('porto/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('porto/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('porto/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('porto/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('porto/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('porto/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('porto/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('portolio.index')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Portfolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li><a href="{{route('portolio.index')}}" class="{{ Route::currentRouteName() == 'portolio.index' ? 'active' : '' }}">Home</a></li>
            <li><a href="{{route('portolio.about')}}" class="{{ Route::currentRouteName() == 'portolio.about' ? 'active' : '' }}">About</a></li>
            <li><a href="{{route('portolio.resume')}}" class="{{ Route::currentRouteName() == 'portfolio.resume' ? 'active' : '' }}">Resume</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    @yield('content')

  </main>

  {{-- footer --}}
  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Portfolio</h3>
      <p>If you have any questions or require further information, please do not hesitate to contact me. I am available and ready to assist you at your convenience.</p>
      <div class="social-links d-flex justify-content-center">
        <a href="{{$profile->facebook}}"><i class="bi bi-facebook"></i></a>
        <a href="{{$profile->instagram}}"><i class="bi bi-instagram"></i></a>
        <a href="{{$profile->linkedin}}"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('porto/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('porto/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('porto/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('porto/assets/vendor/typed.js/typed.umd.js')}}"></script>
  <script src="{{asset('porto/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('porto/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('porto/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('porto/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('porto/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('porto/')}}assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{asset('porto/assets/js/main.js')}}"></script>

</body>

</html>