@include('includes/header')


<section id="hero" class="d-flex align-items-center">

<div class="container text-center" style="margin-top: 100px;">
  
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
  
</div>
       
</section><!-- End Hero -->

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
</div>
<!--
Gallery end
-->



@include ('includes/footer')