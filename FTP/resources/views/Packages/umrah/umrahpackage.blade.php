@include('includes/header')



<!-- ======= Hero Section ======= -->
  <section id="hero" class=" align-items-center">
    <div class="container text-center" style="margin-top: 50px;">

      <div class="row text-center centering">
        <h1 style="font-size: 270%;">Booking <br>Umrah package</h1> 
        </div>

        @if(Session::get('message'))
        <div class="alert alert-danger">
          {{Session::get('message')}}
          <button href="UmrahPackagePage.html" class="book btn-get-started" data-bs-toggle="modal" data-bs-target="#exampleModal">Try Again</button>
        </div>
        @endif

        @if(Session::get('success'))
        <div class="alert alert-success">
          {{Session::get('success')}}
          <button href="UmrahPackagePage.html" class="book btn-get-started" data-bs-toggle="modal" data-bs-target="#exampleModal">Book now</button>
        </div>
        @endif
  </div>
    <!-- Modal -->
    {{-- @include('includes/Modal') --}}
  </section><!-- End Hero -->

  <main id="main">

    @include('includes.clients')

    <!-- ======= Hajj Section ======= -->
    <section id="package" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

    <div class="row">

        @include('packages.includes.navbar')

          <div class="package col-xl-9">
            <section class="section-title"><h2>Package information</h2>

              
              <div class="info-table row"><!--beginning of info table-->
                

              @include('packages.includes.first_row')
                  

              {{-- @include('includes.leader_review') --}}


            <div class="table-details row"><!--beginning of transportation review-->

              <div class="col-xl-3">
               <h5>Transportation details</h5>
              </div>
              
              <div class="specfic col-xl-9">
                <p>{{$umrahpackage['transportDetails']}}</p>
              </div>

            </div>{{-- ending of transportation details --}}

              

              <div class="table-details row"><!--Beginning of booking-->
                <div class="specfic row">
                  <div class="col"> 
                    <P>Note:<br>asasaas </P>
                  </div>
                </div>

                <div class="book-container2 row"> 
                  <button type="button" class="book btn-get-started" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Child policy
                  </button>
                    {{-- <button type="button" class="book btn-get-started" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     Book now
                    </button> --}}
                  </div>
              </div><!--Ending of booking-->



              <h2 style="margin-top: 50px;">Hotels Details</h2>
              <div class="hotel-details row"><!--Beginning of hotel details-->

                <div class="portfolio-hotels row">         

                  <div class="onepic col"><!--One image--> 
                    <div class="hotelsname col">
                      <img src="{{asset('img/Icons/kabah2.png')}}"> <h2><p>Makkah hotel</p></h2>
                    </div>
                    @foreach($umrahpackage->hotels as $hotel)
                    @if($hotel['location'] == 'Makkah')
                    @include('packages.includes.hotels')
                    @endif
                    @endforeach
                  </div><!--One image--> 

                  <div class="onepic col">
                    <div class="hotelsname col"> 
                      <img src="{{asset('img/Icons/madinah2.png')}}"><h2><p>Madinah hotel</p></h2>
                    </div>
                    @foreach($umrahpackage->hotels as $hotel)
                    @if($hotel['location'] == 'Madinah')      
                    @include('packages.includes.hotels')
                    @endif
                    @endforeach
                  </div>
                </div>
              </div><!-- end of hotel details-->

              @include('packages.includes.group_details')

          </div><!--end of info table-->
          </div>

          @include ('packages.includes.last_row')

        </div>
      </div>
    </div>
  </section><!-- End Hajj Section -->
</main><!-- End #main -->

@include ('includes/footer')