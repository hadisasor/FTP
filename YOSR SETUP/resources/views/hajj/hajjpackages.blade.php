@include('includes/header')
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container text-center" style="margin-top: 50px;">
      
 
      <div class="row ">
       
      
            
       


          <h1 style="font-size: 270%;">Booking <br>Hajj packages</h1> 
         <div class="d-flex justify-content-center text-center">
          <div class="form-container py3 text-center " data-aos="fade-up">

                    <div class="inner-form " >
                        <form class="form-inline " role="form" action="#">
                    
                          <div class="form-group mb-3">
                            <input type="name" class="form-control" name="name" id="name"
                            placeholder="Full Name" required> </div>
                          
                          <div class="form-group mb-3">
                            <input type="email" class="form-control" name="mail" id="mail"
                            placeholder="Email" required> </div>
                            
                          <div class="form-group mb-3">
                            <input type="phone" class="form-control" name="phone" id="phone"
                            placeholder="Phone Number" required> </div>
                        
                            <br>
                          <div class="form-group mb-3">
                            <a href="#about" class="btn-get-started scrollto">submit</a>
                          </div>
                        </form>
                    </div>
                
              </div>

              
          </div>
          
            
          <!--  <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          --></div>
        
        <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/Makkah.png" class="img-fluid animated" alt="">
        </div> -->
      </div>
      
    </div>
    


    
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-1.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-2.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-4.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-5.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-6.png')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Hajj Section ======= -->
    <section id="hajj" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

        <div class="row">

          <div class="navbarhajj col-xl-3 mt-xl-8">
            <div>
            <h4> Help?</h4><br>
            <h5>Help Line Number</h5>
            <p>+91 9920974825</p><br>
            <h5>Email</h5>
            <p>Yadoofatani@gmail.com</p><br>
            <h5>Head Office</h5>
            <p>Shop No.05, Sapphire Apt,
            Behind Markaz View C.H.S.,
            Off S.V. Road, Jogeshwari (W),
            Mumbai - 400 102.</p><br>
            <h5>Eyad</h5>
            <p>+91 98212 04865<br>
            +91 98211 72525</p>
          </div>

          </div>

          <div class="topichajj col-xl-9">

            <div class="row">
            <section class="section-title"><h2>Deluxe packages</h2></section>
                
                        <div class="hajjpackages">
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Deluxe')
                          
                            <div class="content">
                              <div class="row" data-aos="zoom-in" data-aos-delay="50">
                                  <h3>{{$hajjpackage['stayingDays']}} day of stay</h3>
                                  <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                                  <div class="hajjpricing col"><h4>{{$hajjpackage['stayingDays']}} DAY<br> 125,000bht </h4></div>
                              </div>
                              <div class="row">
                                <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                                  <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                                  <img class="icon3" src="{{asset('img/Icons/Group.png')}}"></div>
                                  <div class="hot-location"><p>Makkah hotel:{{$hajjpackage['makkaHotel']}}
                                    <br>Madinah hotel: {{$hajjpackage['madinaHotel']}}
                                    <br>Group: {{$hajjpackage['groupNumber']}} </p></div>
                                    {{-- <div class="hot-name"><p>Al-Janadiryah<br>Al-Tayibah<br> 3 </p></div> --}}
                                </div>
                              </div>    
                                <div class="book-container">
                                  <a href="hajjpackage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                                </div>
                            </div>
               {{-- @else <h2>No package exist</h2>    --}}               
               
               
              @endif
               @endforeach             
                        </div>

                  </div><!--Deluxe end-->



                  <div class="row">      
                  <section class="section-title"><h2>Golden packages</h2></section>
                        <div class="hajjpackages">
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Golden')

                            <div class="content">
                              <div class="row" data-aos="zoom-in" data-aos-delay="50">
                                  <h3>{{$hajjpackage['stayingDays']}} day of stay</h3>
                                  <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                                  <div class="hajjpricing col"><h4>{{$hajjpackage['stayingDays']}} DAY<br> 125,000bht </h4></div>
                              </div>
                              <div class="row">
                                <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                                  <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                                  <img class="icon3" src="{{asset('img/Icons/Group.png')}}"></div>
                                  <div class="hot-location"><p>Makkah hotel:{{$hajjpackage['makkaHotel']}}
                                    <br>Madinah hotel: {{$hajjpackage['madinaHotel']}}
                                    <br>Group: {{$hajjpackage['groupNumber']}} </p></div>
                                    {{-- <div class="hot-name"><p>Al-Janadiryah<br>Al-Tayibah<br> 3 </p></div> --}}
                                </div>
                              </div>    
                                <div class="book-container">
                                  <a href="hajjpackage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                                </div>
                            </div>
                            {{-- @else <h2>No package exist</h2> --}}
                          @endif  
                          @endforeach   
                      </div><!--Golden end-->
                        
                        <div class="row">
          <section class="section-title"><h2>Silver packages</h2></section>

                        <div class="hajjpackages"> 
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Silver')
                          <div class="content">
                            <div class="row" data-aos="zoom-in" data-aos-delay="50">
                                <h3>{{$hajjpackage['stayingDays']}} day of stay</h3>
                                <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                                <div class="hajjpricing col"><h4>{{$hajjpackage['stayingDays']}} DAY<br> 125,000bht </h4></div>
                            </div>
                            <div class="row">
                              <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                                <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                                <img class="icon3" src="{{asset('img/Icons/Group.png')}}"></div>
                                <div class="hot-location"><p>Makkah hotel:{{$hajjpackage['makkaHotel']}}
                                  <br>Madinah hotel: {{$hajjpackage['madinaHotel']}}
                                  <br>Group: {{$hajjpackage['groupNumber']}} </p></div>
                                  {{-- <div class="hot-name"><p>Al-Janadiryah<br>Al-Tayibah<br> 3 </p></div> --}}
                              </div>
                            </div>    
                              <div class="book-container">
                                <a href="hajjpackage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                              </div>
                          </div>
             {{-- @else <div class="row"><h2>No package exist</h2></div>  --}}
             @endif                
             @endforeach             
                      </div><!--Silver end-->

                      <div class="row">
          <section class="section-title"><h2>Saver packages</h2></section>

                        <div class="hajjpackages">

                          @foreach ($hajjpackages as $hajjpackage)
                           @if ($hajjpackage['packageName'] == 'Saver')
                          <div class="content">
                            <div class="row" data-aos="zoom-in" data-aos-delay="50">
                                <h3>{{$hajjpackage['stayingDays']}} day of stay</h3>
                                <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                                <div class="hajjpricing col"><h4>33 DAY<br> 125,000bht </h4></div>
                            </div>
                            <div class="row">
                              <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                                <div class="icontainer"> <img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                                <img class="icon3" src="{{asset('img/Icons/Group.png')}}"></div>
                                   <div class="hot-location"><p>Makkah hotel:{{$hajjpackage['makkaHotel']}}
                                    <br>Madinah hotel: {{$hajjpackage['madinaHotel']}}
                                    <br>Group: {{$hajjpackage['groupNumber']}} </p></div>
                                  {{-- <div class="hot-name"><p>Al-Janadiryah<br>Al-Tayibah<br> 3 </p></div> --}}
                              </div>
                            </div>    
                              <div class="book-container">
                                <a href="hajjpackage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                              </div>
                          </div>
             
             {{-- @else
             <div class="row"><h2>No package exist</h2></div>    --}}

             @endif              
             @endforeach             
                      </div><!--Saver end-->
        </div>
      </div>

    
      </div>



        </section>
     
    </section><!-- End Hajj Section -->

  

  </main><!-- End #main -->
  @include ('includes/footer')