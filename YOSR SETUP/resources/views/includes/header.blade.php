<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yosr for Hajj and Umrah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('../../img/Yosr-02.png') }}" rel="icon">
  <link href="{{ asset('../../img/Yosr-02.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;700&display=swap" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="{{ asset('../../vendors/aos/aos.css') }}" rel="stylesheet">
 <link href="{{ asset('../../vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('../../vendors/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
 <link href="{{ asset('../../vendors/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
 <link href="{{ asset('../../vendors/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
 <link href="{{ asset('../../vendors/remixicon/remixicon.css') }}" rel="stylesheet">
 <link href="{{ asset('../../vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="{{ asset('../../css/style.css') }}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Arsha - v4.7.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <a href="{{route('Home')}}"><img src="{{asset('../../img/Yosr-02.png')}}" alt="" class="img-fluid"></a>
      <div class="logo-container">
      <h4> <a href="{{route('Home')}}" style=" font-family: 'Cairo', sans-serif; font-weight: 700;">Yosr for Hajj and Umrah<br> <p >convenience website for serving Thai pilgrims</p></a></h4>
    </div> 
   
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="/hajjpackages">Hajj</a></li>
          <li><a class="nav-link scrollto" href="/umrahpackages">Umrah</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Transportation</a></li>
              <li class="dropdown"><a href="#"><span>Hotels</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Madinah</a></li>
                  <li><a href="#">Makkah</a></li>
                </ul>
              </li>
              <li><a href="#">Attraction</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        {{-- User profile navagator --}}
          @if (auth()->check())
   
          <li class="dropdown"><a href="#"><span>{{auth()->user()->fstname}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="profilecontainer"><a href="#" ><img src="{{asset('../../img/Yosr-02.png')}}"></a>
                <h5>{{auth()->user()->fstname}} {{auth()->user()->lstname}}</h5>
              </li>
              <li><a href="#">profile</a></li>
              <li><a href="#">package management</a></li>
              <li> <a class="nav-link" href="/logout"> Logout</a></li>
            </ul>
 
            <i class="bi bi-list mobile-nav-toggle"></i>
        @else
        <li><a class="getstarted scrollto" href="{{route('login')}}">Register</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
      @endif
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->