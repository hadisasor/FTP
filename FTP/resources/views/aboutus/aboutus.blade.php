@include('includes/header')


@include('includes.slide')


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
    <img src="img/FTimage/p02.jpg" alt=""  data-bs-toggle="modal" data-bs-target="#exampleModal_1">
      <img src="img/FTimage/p04.jpg" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal_2">
      <img src="img/FTimage/p05.jpg" alt="" data-bs-toggle="modal" data-bs-target="#exampleModal_3">
      <img src="" alt="">
      <img src="" alt="">
    </div>
    <div class="dream">
      <img src="img/FTimage/p01.jpg"  data-bs-toggle="modal" data-bs-target="#exampleModal_4"alt="">
      <img src="img/FTimage/p06.jpg"  data-bs-toggle="modal" data-bs-target="#exampleModal_4"alt="">
      <img src="img/FTimage/p07.jpg"  data-bs-toggle="modal" data-bs-target="#exampleModal_4"alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
    <div class="dream">
      <img src="img/FTimage/p03.jpg" alt="">
      <img src="img/FTimage/p08.jpg" alt="">
      <img src="img/FTimage/p01.jpg" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
  </div>
  @include('includes.modals')
  <div class="pbtn">
    <a href="#">More</a>
  </div>
</div>

{{-- company board start --}}
<div class="pcontainer">
  <div class="pheading">
    <h3>Faotoni travel <span>โครงสร้างคณะผู้นำกลุ่ม</span></h3>
  </div>
  <div class="bbox">
    <div class="dream">
      <img src="img/FTimage/B-FTLP.png" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
</div>
{{-- company board end --}}

{{-- company seh start --}}
<div class="pcontainer">
  <div class="pheading">
    <h3>Faotoni travel <span>โครงสร้างคณะผู้นำกลุ่ม (แซะห์)</span></h3>
  </div>
  <div class="sbox">
    <div class="dream">
      <img src="img/FTimage/S-FTLP.jpg" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
</div>
{{-- company seh end --}}
<!--
Gallery end
-->


@include ('includes/footer')