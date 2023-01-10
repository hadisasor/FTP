@include('includes/header')

<section id="hero" class="d-flex align-items-center">


<div class="container mt-5">


  
      @if(Session::get('login'))
      <div class="alert alert-danger"> {{Session::get('login')}}</div>
      @endif

      <!-- carousel atart -->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/FTLPmain.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/FLogo.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/team/team-1.jpg" class="d-block w-100" alt="...">
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
      </div>
      <!-- carousel end -->

  </div>

</div>

</section><!-- End Hero -->

<!-- Start About Us Section -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>About Us</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p>
          Fatoni Travel Limited Partnership
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> We have services for Hajj</li>
          <li><i class="ri-check-double-line"></i> We have services for Umrah</li>
          <li><i class="ri-check-double-line"></i> We have services for turest travels in around Thailand </li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p>
          Fatoni Travel Limited Partnership, provides several services to help you attempt your Hajj & Umrah, and for who want to visit Thailand we also can take in an amazing trip in Thailand.
        </p>
        
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->


<!-- p refer to Photo and name of the class
Gallery start
-->
<div class="pcontainer">
  <div class="pheading">
    <h3>Photo <span>Gallery</span></h3>
  </div>
  <div class="pbox">
    <div class="dream">
      <img src="img/FTLPmain.png" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
    <div class="dream">
      <img src="img/FLogo.png" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
    <div class="dream">
      <img src="img/team/team-1.jpg" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
  </div>
  <div class="pbtn">
    <a href="#">More</a>
  </div>
</div>
<!--
Gallery end
-->



@include ('includes/footer')