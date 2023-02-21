<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fatoni Travel Limited Partnership</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  {{-- js --}}
  <script defer src="activePage.js"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Favicons -->
  <link href="{{ asset('../../img/FLogo.png') }}" rel="icon">
  <link href="{{ asset('../../img/FLogo.png') }}" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- owl carousel SLIDER -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <!-- end awesome icons -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- lightbox -->
  <link href="css/prettyPhoto.css" rel="stylesheet">
  
  <!-- Animation Effect CSS -->
  <link rel="stylesheet" href="css/animation.css">

  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
@livewireStyles


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

</head>

<body>
                @php  
                //Turn date into Month & day only
                function dayMonth($date){
                  $date = strtotime($date);
                  return date('d M', $date);
                } 


                //Put colon between numbers
                function priceColon($price){

                  $price = (string)$price;
                  $colon = ',';

                  if (strlen($price) == 6)
                  {
                    return $price = substr_replace($price, $colon ,3 , 0 );
                  }
                  else if (strlen($price) == 5)
                  {
                    return  $price = substr_replace($price, $colon,2 ,0 );
                  }

                 else if (strlen($price) < 5)
                {
                  return $price;
                }
              }
               
                @endphp

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top border-bottom ">
    <div class="topheader">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 col-sm-8 mt-2 email d-flex">
            <p>Email:</p>
            <a href="https://mail.google.com">fatoni.travel@gmail.com</a>
          </div>
          <div class="col-12 col-sm-4">
            <div class="top-social-area">
              <a href="https://www.facebook.com/fatoni.travel" data-toggle="tooltip" data-placement="bottom" title data-original-title="Facebook"><i class="bx bxl-facebook">
              </i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title data-original-title="Line"><i class="bi bi-line"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="container d-flex align-items-center">
      <a href="{{route('Home')}}"><img src="{{asset('../../img/Flogo.png')}}" alt="" class="img-fluid"></a>
      <div class="logo-container">
      <h4> <a href="{{route('Home')}}">ห้างหุ้นส่วนจำกัด ฟาตอนี แทรเวิล<br> <p >convenience website for serving Thai pilgrims</p></a></h4>
    </div> 
   
      <!-- Uncomment below if you prefer to use an \ logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      @php 

      $route= URL::current();
      $route = explode('/',$route);
    
      // return dd($route[4])

      
      // return dd($route)
      @endphp
      <nav id="navbar" class="navbar">
        <ul>
          @if($route == 'Home')
          {{-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="/hajjpackages">Hajj</a></li>
          <li><a class="nav-link   scrollto" href="/umrahpackages">Umrah</a></li>
          <li><a class="nav-link scrollto" href="/travelpackages">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Services</span><i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="transortation">Transportation</a></li>
                  <li class="dropdown"><a href="hotels"><span>Hotels</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Madinah</a></li>
                      <li><a href="#">Makkah</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Attraction</a></li>
                </ul>
              </li> --}}
            @else
            <li><a class="nav-link scrollto @if($route[3] == "home") active @endif" href="/">Home</a></li>
            {{-- <li><a class="nav-link scrollto" href="#about">About Us</a></li> --}}
            <li><a class="nav-link scrollto @if($route[3] == 'packages' )active  @endif" href="/packages">Packages</a></li>
            <!-- <li><a class="nav-link scrollto  @if($route[3] == 'umrahpackages' ) active @endif" href="/umrahpackages">Umrah</a></li> -->
            <!-- <li><a class="nav-link scrollto  @if($route[3] == 'travelpackages' ) active @endif" href="/travelpackages">Travel</a></li> -->
            <!-- <li><a class="nav-link scrollto @if($route[3] == 'knowledge' ) active @endif" href="/knowledge">knowledge</a></li> -->
{{-- 
            @if ($route1 == 'travelpackages' || $route1 == 'travelpackage') active @endif" --}}

            <li class="headerdropdown dropdown"><a class="headerdropdown @if($route[3] == 'services') active @endif"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
              {{-- <li><a href="services/buypackage" >Buy Packages</a></li>
                <li><a href="services/transportation">Transportation</a></li>
                <li class=" dropdown"><a href="/hotels"><span>Hotels</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="/hotels #mhotel">Madinah</a></li>
                    <li><a href="/hotels">Makkah</a></li>
                  </ul>
                </li> --}}
                {{-- <li><a href="#">Attraction</a></li> --}}
                <li><a href="/Visa">Visa</a></li>
                
            </ul>
          </li>
          @endif
        {{-- User profile navagator --}}
          @if (auth()->check())
   
          <li class="headerdropdown dropdown "><a href="/my_profile" class="headerdropdown @if($route[3] == 'my_profile' ) active @endif "><span>{{auth()->user()->fstname}}</span> <i class="bi bi-chevron-down"></i><img src="{{asset('../../img/user.jpg')}}"></a>
            <ul>
              {{-- <li class="profilecontainer"><a href="#" ><img src="{{asset('../../img/user.jpg')}}"></a>
                <span>{{auth()->user()->userType}}</span>
                <h5>{{auth()->user()->fstname}} {{auth()->user()->lstname}}</h5>
              </li> --}}
              <li><a href="{{route('my_profile')}}">profile</a></li>
              @if (auth()->user()->userType == "Admin" || auth()->user()->userType == "Tokseh" )
              <li><a href="{{route('dash')}}">packages management</a></li>
              @else <li><a href="#">My packages</a></li>
              @endif

              <li> <a class="nav-link" href="/logout"> Logout</a></li>
            </ul>
            
            
        @else
        <li><a class="getstarted scrollto" href="{{route('login')}}">Login</a></li>
        <a class="" href="/signup">create new account?</a>
      </ul>
      
      @endif
      
      </nav><!-- .navbar -->
      <i class="bi bi-list mobile-nav-toggle"></i>
    </div>
  </header><!-- End Header -->


  /* JavaScript to toggle the 'hide' class when the user scrolls */
  window.addEventListener("scroll", function() {
    if (window.scrollY > 0) {
      document.querySelector("#header").classList.add("hide");
    } else {
      document.querySelector("#header").classList.remove("hide");
    }