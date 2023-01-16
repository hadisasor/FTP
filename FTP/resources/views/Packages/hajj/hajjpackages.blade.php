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
      
      {{-- image slides start --}}
      <div class="slider">
        <div class="slides">
          {{-- radio button start --}}
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          {{-- radio btton end --}}
          {{-- image start --}}
          <div class="side first">
            <img src="img/FTimage/1.png" alt="">
            <img src="img/FTimage/2.png" alt="">
            <img src="img/FTimage/1.png" alt="">
            <img src="img/FTimage/2.png" alt="">
          </div>
          {{-- image end --}}
          {{-- auto navigation start --}}
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
          </div>
          {{-- auto navigation end --}}
        </div>
        {{-- manual navigation start --}}
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
          <label for="radio4" class="manual-btn"></label>
        </div>
        {{-- manual navigation end --}}
      </div>
      {{-- image slides end --}}
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