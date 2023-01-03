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

    <div class="container text-center" style="margin-top: 50px;">
      
 
      <div class="row text-center centering">
        <h1 style="font-size: 270%;">Booking <br>Travel package</h1> 
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
            <section class="section-title"><h2>Deluxe packages</h2></section>
                
                        <div class="hajjpackages">
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Deluxe')
                            @php $countDeluxe++ @endphp
                            @include('packages.includes.packages_info')
                          @endif
                          @endforeach             
                        </div>
                          
                          @if ($countDeluxe == 0)
                          <div class="col-12 null">
                            <h4 class="text-center">Currently there's no Deluxe package available</h4>
                          </div>
                          @endif
                          
                  <section class="section-title"><h2>Golden packages</h2></section>
                     
                      <div class="row">
                        <div class="hajjpackages">
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Golden')
                            @php $countGolden++ @endphp
                            @include('packages.includes.packages_info')
                          @endif  
                          @endforeach   
                        </div>
                          
                          @if ($countGolden == 0)
                          <div class="col-12 null">
                            <h4 class="text-center">Currently there's no Golden package available</h4>
                          </div>
                          @endif
                      </div>

                        <div class="row">
                        <section class="section-title"><h2>Silver packages</h2></section>

                        <div class="hajjpackages"> 
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Silver')
                            @php $countSilver++ @endphp
                            @include('packages.includes.packages_info')
                          @endif                
                          @endforeach        
                        </div><!--Silver end-->
             
                          @if ($countSilver == 0)
                          <div class="col-12 null">
                            <h4 class="text-center">Currently there's no Silver package available</h4>
                          </div>
                          @endif
                        </div>

                    <div class="row">
                      <section class="section-title"><h2>Saver packages</h2></section>

                        <div class="hajjpackages">

                        @foreach ($hajjpackages as $hajjpackage)
                        @if ($hajjpackage['packageName'] == 'Saver')
                           @php $countSaver++ @endphp
                         
                           @include('packages.includes.packages_info')

                        @endif              
                        @endforeach         
                      </div><!--Saver end-->
             
                        @if ($countSaver == 0)
                        <div class="col-12 null">
                        <h4 class="text-center">Currently there's no Saver package available</h4>
                      </div>
                        @endif
                      </div>


      </div>
      </div>
      </div>
    </div>
  </section><!-- End Hajj Section -->

</main><!-- End #main -->
  @include ('includes/footer')