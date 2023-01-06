@include('includes/header')

<section id="hero" class="d-flex align-items-center">


<div class="container">


  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-6 pt-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
      
      @if(Session::get('login'))
      <div class="alert alert-danger"> {{Session::get('login')}}</div>
      @endif

      <h1 style="font-size: 220%;">ห้างหุ้นส่วนจํากัด ฟาตอนี แทรเวิล <br>กิจการฮัจญ์ อัศศิดดีก</h1> 
      <p>"FATONI...SERAMBI MAKKAH <br>
          ฟาตอนี...ระเบียงบนครมักกะฮฺ"</p>
      <p>แพ็คเกจฮัจญ์...กับฟาตอนี แทรเวิล <br>
        คิดจะทําฮัจญ์...มอบความไว้วางใจไปกับเรา</p>
      <div class="d-flex justify-content-center justify-content-lg-start">
       
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      <!--  <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      --></div>



      <!-- change the photo in background -->
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="{{asset('img/FTLPmain.png')}}" class="img-fluid animated" alt="">
    </div>
    <!-- change the photo -->



  </div>
</div>

</section><!-- End Hero -->






@include ('includes/footer')