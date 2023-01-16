@include('includes/header')
@php 
//for counting packages separatly 
$countDeluxe = 0;
$countGolden = 0; 
$countSilver = 0;
$countSaver  = 0;
@endphp
<!-- ======= Hero Section ======= -->
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
            <img src="img/FTimage/p03.jpg" class="d-block w-100" alt="...">
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

  {{-- <main id="main">
    @include('includes.clients') --}}

    <!-- ======= Hajj Section ======= -->
    <section id="hajj" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

        <div class="row">

          @include('packages.includes.navbar')

          <div class="topichajj col-xl-9">

            <div class="row">
            <section class="section-title"><h2>What is hajj?</h2></section>
                
                        {{-- <div class="hajjpackages">
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Deluxe')
                            @php $countDeluxe++ @endphp
                            @include('packages.includes.packages_info')
                          @endif
                          @endforeach             
                        </div> --}}
                          
                          {{-- @if ($countDeluxe == 0) --}}
                          <div class="col-12 border border-3 p-4">
                            
                            <section id="why-us" class="why-us section-bg">
                              <div class="container-fluid" data-aos="fade-up">
                        
                                <div class="row">
                        
                                  <!-- <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"> -->
                        
                                    <div class="accordion-list">
                                      <ul>
                                        <li>
                                          <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Hajj <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                          <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                            <p>
                                              การประกอบพิธีฮัจญ์ คือ การเดินทางไปปฏิบัติศาสนกิจที่นครมักกะฮฺ ประเทศซาอุดิอารเบีย ในเดือนซุลฮิจญะฮฺของทุกปี ซึ่งศาสนกิจข้อนี้เป็นหน้าที่สำหรับมุสลิมทั้งชายและหญิงทุกคนที่มีความสามารถทางด้านร่างกาย ทรัพย์สิน โดยก่อนที่จะเดินทางสู่นครมักกะฮฺ จำเป็นจะต้องมีการเนียตอิหฺรอม พร้อมสวมชุดอิหฺรอม (ผ้าขาวสองผืน) ที่มีกอต (จุดที่ถูกกำหนดไว้แล้ว)
                                            </p>
                                        </li>
                        
                                      </ul>
                                    </div>
                        
                                  </div>
                        
                                  <!-- <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("../../img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div> -->
                                </div>
                        
                              </div>
                            </section>
                          </div>
                          {{-- hajj package start --}}
                        <div class="row">
                        <section class="section-title pkg"><h2>packages</h2></section>

                          <div class="hajjpackages"> 
                            @foreach ($hajjpackages as $hajjpackage)
                            @if ($hajjpackage['packageName'] == 'Silver')
                              @php $countSilver++ @endphp
                              @include('packages.includes.packages_info')
                            @endif                
                            @endforeach        
                          </div><!--Silver end-->
                             
                        </section><!-- End Hajj Section -->

</main><!-- End #main -->
  @include ('includes/footer')