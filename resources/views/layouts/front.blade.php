
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Skales Solutions</title>
  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png')}}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.css') }}">
  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('css/roshan.css')}}" rel="stylesheet">
<script src="{{ asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/sweetalert.min.js') }}" ></script>

  <!-- =======================================================
  * Template Name: FlexStart - v1.1.1
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  @yield('head')
  <style type="text/css">
  header.fixed-top{
    padding: 15px 0;
    box-shadow: 0 5px 3px rgb(218 235 255 / 51%);
}
</style>

@include('layouts.front_header')

    @yield('content')
@yield('footer')
    @include('layouts.front_footer')

  

  

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

        <script src=
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
                integrity=
"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
                crossorigin="anonymous"></script>
        <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
                integrity=
"sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" 
                crossorigin="anonymous"></script>
<!--   <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
 -->  <script src="{{ asset('vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>