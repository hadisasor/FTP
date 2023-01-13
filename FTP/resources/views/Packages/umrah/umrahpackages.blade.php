@include('includes/header')
@php 
//for counting packages separatly 
$countDeluxe = 0;
$countGolden = 0; 
$countSilver = 0;
$countSaver  = 0;
@endphp
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

  <main id="main">


    <!-- ======= Hajj Section ======= -->
    <section id="hajj" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

        <div class="row">

          @include('packages.includes.navbar')
        
          <div class="topichajj col-xl-9">

            <div class="row">


                <div class="row">      
                  <section class="section-title"><h2>Umrah </h2></section>
                        <div class="hajjpackages">
                          @foreach ($umrahpackages as $umrahpackage)
                          @if ($umrahpackage['packageName'] == 'Golden')
                            @php $countGolden++; @endphp
                            @include('packages.includes.packages_info')
                          @endif  
                          @endforeach   
                        </div>
                                    
                          @if ($countGolden == 0)
                          <div class="col-12 border border-3 p-4">
                            <h4 class="">
                              สำหรับอุมเราะห์ในกฎหมายอิสลาม: เป็นการเยี่ยมเยียนบ้านอันศักดิ์สิทธิ์ของพระเจ้าเพื่อนมัสการพระเจ้าผู้ทรงฤทธานุภาพ 
                              และเป็นไปตามสถานะของอิห์ราม
                              ทำได้โดยการเวียนรอบกะบะห์ และเดินไปมาระหว่างซอฟาและมัรวะห์
                              ปฏิบัติตามเงื่อนไขที่กำหนดก่อนทำอุมเราะห์ เช่น การโกนผมหรือตัดผมให้สั้นลง</h4>
                          </div>
                          @endif
                          
                </div><!--Golden end-->
                        
        <div class="row mt-4">
          <section class="section-title"><h2>packages details</h2></section>

                        <div class="hajjpackages"> 
                          @foreach ($umrahpackages as $umrahpackage)
                          @if ($umrahpackage['packageName'] == 'Silver')
                            @php $countSilver++; @endphp
                            @include('packages.includes.packages_info')
                          @endif                
                          @endforeach     
                        </div>
             
             @if ($countSilver == 0)
             <div class="col-12 border border-3 p-4">
               <h4 class="">
                สำหรับอุมเราะห์ในกฎหมายอิสลาม: เป็นการเยี่ยมเยียนบ้านอันศักดิ์สิทธิ์ของพระเจ้าเพื่อนมัสการพระเจ้าผู้ทรงฤทธานุภาพ 
                และเป็นไปตามสถานะของอิห์ราม
                ทำได้โดยการเวียนรอบกะบะห์ และเดินไปมาระหว่างซอฟาและมัรวะห์
                ปฏิบัติตามเงื่อนไขที่กำหนดก่อนทำอุมเราะห์ เช่น การโกนผมหรือตัดผมให้สั้นลง</h4>
             </div>
             @endif
      </div><!--Silver end-->

            <div class="row mt-4">
              <section class="section-title"><h2>Silver packages</h2></section>

                            <div class="hajjpackages">
                              @foreach ($umrahpackages as $umrahpackage)
                              @if ($umrahpackage['packageName'] == 'Saver')
                                @php $countSaver++; @endphp
                                  @include('packages.includes.packages_info')
                              @endif              
                              @endforeach             
                            </div><!--Saver end-->

                {{-- @if ($countSaver == 0)
                <div class="col-12 null">
                  <h4 class="text-center">Currently there's no Saver package available</h4>
                </div>
                @endif --}}
            </div>

        </div>
      </div>
      </div>
    </div>
  </section><!-- End Hajj Section -->

</main><!-- End #main -->
  @include ('includes/footer')



  {{-- <section class="section-title"><h2>Deluxe packages</h2></section>
                
                <div class="hajjpackages">
                  @foreach ($umrahpackages as $umrahpackage)
                  @if ($umrahpackage['packageName'] == 'Deluxe')
                    @php $countDeluxe++; @endphp                          
                    @include('packages.includes.packages_info')
                  @endif
                  @endforeach    
                </div>

          @if ($countDeluxe == 0)
          <div class="col-12 null">
         <h4 class="text-center">Currently there's no Deluxe package available</h4>
          </div>
          @endif --}}