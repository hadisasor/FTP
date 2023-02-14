@include('includes.header')


<!-- ======= Cta Section ======= -->
<section id="cta" class="cta1">
  <div class="container" data-aos="zoom-in">

    <div class="row">
      <div class="col-lg-9 text-center centering">
          <h3 style="font-size: 290%; font-family: 'Noto Sans Thai', sans-serif;">Booking<br>Hajj Package</h3>
      </div>
    </div>

  </div>
</section><!-- End Cta Section -->

  <main id="main">


    <!-- ======= Hajj Section ======= -->
    <section id="package" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

    <div class="row">

      @include('packages.includes.navbar')

          <div class="package col-xl-9">
            <section class="section-title"><h2>Package information</h2>

              
              <div class="info-table row"><!--beginning of info table-->

                @include('packages.includes.first_row')
                  



         
        <!--beginning of transportation details-->  

            <div class="table-details row">
              <div class="col-xl-3">
               <h5>Transportation details</h5>
              </div>
              <div class="specfic col-xl-9">
                {{$hajjpackage['transportDetails']}}
              </div>
            </div>
           <!--Ending of transportation details-->
              
            <!--Beginning of booking-->

              <!-- <div class="table-details row">
                <div class="specfic row">
                  <div class="col"> 
                    <P>Note:<br>asasaas </P>
                  </div>
                </div>
                <div class="book-container2 row"> 
                    <a href="HajjPackagePage.html" id="upgradePackage" class="book btn-get-started scrollto">Book Now</a>
                    {{-- <button href="HajjPackagePage.html" class="book btn-get-started" data-bs-toggle="modal" data-bs-target="#exampleModal">Book now</button></div>     --}}
                </div> -->
                <!-- Ending of booking -->


              <h2 style="margin-top: 50px;">Hotels Details</h2>
              <div class="hotel-details row"><!--Beginning of hotel details-->

                <div class="portfolio-hotels row">

                  <div class="onepic col"><!--Hotel one-->    
                    <div class="hotelsname col">
                      <img src="{{asset('img/Icons/FTLPM-01.png')}}"> <h2><p>Makkah hotel</p></h2>
                    </div>
                    @foreach ($hajjpackage->hotels as $hotel)
                      @if($hotel['location'] == 'Makkah')
                        @include('packages.includes.hotels')
                      @endif
                    @endforeach
                  </div><!--Ending Hotel one-->

                  <div class="onepic col"><!--Hotel 2--> 
                    <div class="hotelsname col"> 
                      <img src="{{asset('img/Icons/FTLPT-02.png')}}"><h2><p>Madinah hotel</p></h2>
                    </div>
                      @foreach ($hajjpackage->hotels as $hotel)
                        @if($hotel['location'] == 'Madinah')
                        @include('packages.includes.hotels')
                        @endif
                      @endforeach
                  </div><!--Ending Hotel 2-->

                </div> 

              </div><!-- end of hotel details-->

              @include('packages.includes.group_details')

          </div><!--end of info table-->

           @include ('packages.includes.last_row')

        </div>
      </div>
    </div>
  </section><!-- End Hajj Section -->
</main><!-- End #main -->

@include ('includes/footer')




   <!-- {{-- <div class="table-details row"><!--beginning of Mina details
              <div class="col-xl-3">
              <img src="{{asset('img/Icons/minasign.png')}}">  <h5>Mina Tent Details</h5>
              </div>
              
              <div class="row specfic col-xl-9">
                @foreach($hajjpackage->minas as $mina)
                @php $package = 'mina'; @endphp 
                  @include('packages.includes.icons')
                @endforeach
              </div>
            </div>Ending of Mina details--> --}} -->

            <!-- {{-- <div class="table-details row"><!--beginning of Arafat details
              <div class="col-xl-3">
                <img src="{{asset('/img/Icons/Arafatsign.png')}}"> <h5>Arafat Tent Details</h5>
              </div>
              
              <div class="row specfic col-xl-9">
                @foreach($hajjpackage->arafats as $arafat)
                @php $package = 'arafat'; @endphp 
                  @include('packages.includes.icons')
                @endforeach
              </div>
            </div>beginning of Arafat details--> --}} -->