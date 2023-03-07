@include('includes/header')

<!-- ======= Hero Section ======= -->


    <div class="container text-center" style="margin-top: 10%;">
      {{-- @include('includes.slide') --}}
      <div class="row text-center">
          <h1 style="font-size: 270%;">Information of <br>Hotels</h1> 
      </div>
        
    </div>
                
  




  <main id="main">

    <!-- ======= Hajj Section ======= -->
    <section id="hajj" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

        <div class="row">

          <div class="navbarhajj col-xl-3 mt-xl-8">
            <div>
            <h4> Help?</h4><br>
            <h5>Help Line Number</h5>
            <p>+66 99-313-1166</p><br>
            <h5>Email</h5>
            <p>fatoni.travel@gmail.com</p><br>
            <h5>Head Office</h5>
            <p>1332 petchkasem Rd, Hatyai Sd, <br>
              Hatyai, Songkhla, Thailand 90110</p><br>
              
              1332 ถ.เพชรเกษม ถ.หาดใหญ่ <br>
              หาดใหญ่, สงขลา <br>
              ประเทศไทย 90110<br><br>
            </p>
          </div>

          </div>
        
          <div class="hotels col-xl-9">
            
            <div class="row"> <!-- start of makkah hotel row -->
            <div class="section-title">
                <h2 id="mhotel">Makkah Hotels</h2>
              </div>

            <div class="scrollable-x">
              @foreach ($hotels as $hotel)
              @if($hotel['location'] == 'Makkah')
              <div class=" content col-xl-4 d-flex align-items-stretch mx-2" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <h4 class="text-center border-bottom-thick">{{$hotel['hotel_name']}}</h4>
                <!--<div class="icon"><i class="bx bxl-dribbble"></i></div>-->
                <div class="image-container"> <img src="{{asset($hotel['img'])}}"> </div> 
                  
                  <div class="row">
                    <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                      <div class="hot-location">
                        
                        <div class="row">
                          <h5 class="col-md-3">Rate:</h5>
                          @for ($i = 1; $i <= $hotel['stars']; $i++)
                          <i class="col-1 bi bi-star-fill"></i>
                          @endfor 
                            
                          @php $remain = 5 - $hotel['stars']; @endphp
      
                          @for($i = 1; $i <= $remain; $i++)
                          <i class="col-1 bi bi-star"></i>
                          @endfor
                        </div>
                        <div class="row">
                          <i class="col-md-3 bi bi-geo-alt-fill"></i><p class="col-9">Makkah - Haram</p>
                        </div>

                       </div>
                    </div>
                  </div>
                      <div class="book-container">
                        <a href="packages/{{...['id']}}" class="book btn-get-started scrollto">view details</a>
                      </div>
                </div>
            </div>
            @endif
            @endforeach
          </div>
          </div>  <!-- end of makkah hotel row -->
        

          <div class="row pt-5"> <!-- start of madinah hotel row -->
          <div class="section-title">
            <h2>Madinah Hotels</h2>
          </div>


          <div class="scrollable-x">
          @foreach ($hotels as $hotel)
          @if($hotel['location'] == 'Madinah')
          <div class="content col-xl-4 d-flex align-items-stretch mx-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <h4 class="text-center border-bottom-thick">{{($hotel['hotel_name'])}}</h4>
            <!--<div class="icon"><i class="bx bxl-dribbble"></i></div>-->
            <div class="image-container"> <img src="{{asset($hotel['img'])}}"> </div> 
              <h4><a></a></h4>
              <div class="row">
                <div class="detail"  data-aos="zoom-in" data-aos-delay="50">
                  <div class="hot-location">
                  
                    <div class="row">
                      <h5 class="col-md-3">Rate:</h5>
                      @for ($i = 1; $i <= $hotel['stars']; $i++)
                      <i class="col-1 bi bi-star-fill"></i>
                      @endfor 
                        
                      @php $remain = 5 - $hotel['stars']; @endphp
  
                      @for($i = 1; $i <= $remain; $i++)
                      <i class="col-1 bi bi-star"></i>
                      @endfor
                    </div>
                    <div class="row">
                      <i class="col-md-3 bi bi-geo-alt-fill"></i><p class="col-9">Madinah - Haram</p>
                    </div>

                   </div>
                </div>
              </div>
                  <div class="book-container">
                    <a href="packages/{{...['id']}}" class="book btn-get-started scrollto">view details</a>
                  </div>
            </div>
        </div>
        @endif
        @endforeach
        </div>
        </div>  <!-- end of madinah hotel row -->
    </div>
    </div>

        </section>
     
    </section><!-- End Hajj Section -->



@include ('includes/footer')