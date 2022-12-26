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
            <img src="{{asset('../../img/clients/client-1.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('../../img/clients/client-2.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('../../img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('../../img/clients/client-4.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('../../img/clients/client-5.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('../../img/clients/client-6.png')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= Hajj Section ======= -->
    <section id="package" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

    <div class="row">

          <div class="navbarhajj col-xl-3 mt-xl-9">
            <div>
            <h4> Help?</h4><br>
            <h5>Help Line Number</h5>
            <p>+91 9920974825</p><br>
            <h5>Email</h5>
            <p>example@gmail.com</p><br>
            <h5>Head Office</h5>
            <p>1332 Petchkasem Rd, ตำบล หาดใหญ่ Hat Yai District, Songkhla 90110</p><br>
            <h5>Fatoni Travel Limited Partnership</h5>
            <p>+91 98212 04865<br>
            +91 98211 72525</p>
          </div>

          </div>

          <div class="package col-xl-9">
            <section class="section-title"><h2>Package information</h2>

              
              <div class="info-table row"><!--beginning of info table-->

                <div class="col-xl-4">
                    <div class="date-container"> 
                      <h3 style="padding-top: 10px ;">{{$hajjpackage['stayingDays']}} Day Package</h3>
                      <img class="thumbnail" src="{{asset('img/Ka3bah.jpg')}}">   
                      <div><img class="icon" src="{{asset('img/Icons/Icons-12.png')}}">
                        <h4>{{$hajjpackage['stayingDays']}} days</h4></div>
                      <div class="date">
                        <h5>Stars at</h5>
                        <h4>{{$hajjpackage['packagePrice']}}bht</h4>
                        <span>thul hijjah 1</span>
                      </div>
                    </div>    
                </div>

                  <div class="col-xl-8">
                      <div class="flight-container row" >
                        
                          <div class="icon-flight col">
                           <img src="{{asset('img/Icons/departure.png')}}"> <h5>Departure</h5>
                            <p>{{$hajjpackage['Th_departmentDate']}}</p>
                          </div>
                          
                          <div class="icon-flight col">
                            <img src="{{asset('img/Icons/arrival.png')}}"> <h5>Arrivals</h5>
                            <p>{{$hajjpackage['S_arrivalDate']}}</p>
                          </div>
                        
                          <div class="row" style="background-color: rgb(249, 249, 249);">
                          <div class="airline-icon col">
                            <img src="{{asset('img/Icons/airline.png')}}">
                            <h5><br> Airlines</h5>
                            <p><br>{{$hajjpackage['Th_airline']}}</p>
                          </div>
                          </div>
                        </div>
                        

                      <div class="hotel-container row" style="background-color: rgb(244, 244, 244);">
                          <div class="col">
                            <img src="{{asset('img/Icons/kabahicon.png')}}
                            "><h5>Makkah Hotel</h5><p>{{$hajjpackage['makkaHotel']}}</p>
                          </div>
                          <div class="col">
                            <img src="{{asset('/img/Icons/madinahicon.png')}}
                            "><h5>Madinah Hotel</h5><p>{{$hajjpackage['madinaHotel']}}</p>
                          </div>
                      </div>
                  </div>
                  
                  
              <div class="beds-details row"><!--beginning of bed details-->

                <div class="col-xl-3">
                  <img src="{{asset('img/Icons/bed.png')}}
                  "><h5>Total beds with price</h5>
                </div>


                <div class="bed-num col">
                  <img src="{{asset('img/Icons/bed.png')}}
                  "> <p>5 beds <br> 2500 bht</p>
                </div>

                <div class="bed-num col"> 
                  <img src="{{asset('img/Icons/bed.png')}}
                  "> <p>4 beds <br> 2500 bht</p>
                </div>

                <div class="bed-num col">
                  <img src="{{asset('img/Icons/bed.png')}}
                  "> <p>3 beds <br> 2500 bht</p>
                </div>

                <div class="bed-num col">
                  <img src="{{asset('img/Icons/bed.png')}}"> <p>2 beds <br> 2500 bht</p>
                </div>

              
              </div><!--end of bed details-->


                <div class="table-details row"><!--beginning of mina details-->

                  <div class="col-xl-3">
                  <img src="{{asset('img/Icons/minasign.png')}}">  <h5>Mina Tent Details</h5>
                  </div>
                  
                  <div class="specfic col-xl-9">
                      <div class="1st row"> 1st row</div>
                      <div class="2nd row">2nd row</div>
                      <div class="3rd row">3rd row</div>
                      <div class="4th row">4th row</div>
                  </div>

              </div>
              
              
              <div class="table-details row"><!--beginning of mina details-->

                <div class="col-xl-3">
                  <img src="{{asset('/img/Icons/Arafatsign.png')}}"> <h5>Arafat Tent Details</h5>
                </div>
                
                <div class="specfic col-xl-9">
                    <div class="1st row"> 1st row</div>
                    <div class="2nd row">2nd row</div>
                    <div class="3rd row">3rd row</div>
                    <div class="4th row">4th row</div>
                </div>

            </div>

            <div class="table-details row"><!--beginning of mina details-->

              <div class="col-xl-3">
               <h5>Transportation details</h5>
              </div>
              
              <div class="specfic col-xl-9">
                  <div class="1st row"> 1st row</div>
                  <div class="2nd row">2nd row</div>
                  <div class="3rd row">3rd row</div>
                  <div class="4th row">4th row</div>
              </div>

          </div>
           
              

              <div class="table-details row"><!--Beginning of booking-->

                <div class="specfic row">
                  <div class="col"> 
                    <P>Note:<br>asasaas </P>
                  </div>
                </div>

                <div class="book-container2 row"> 
                    <a href="HajjPackagePage.html" id="childPolicy" class="book btn-get-started scrollto">Child policy</a>
                    <a href="HajjPackagePage.html" id="upgradePackage" class="book btn-get-started scrollto">Upgrade package</a>
                    <a href="HajjPackagePage.html" id="bookNow" class="book btn-get-started scrollto">Book now</a></div>    
                </div>

              
              </div><!--Ending of booking-->



              <h2 style="margin-top: 50px;">Hotels Details</h2>
              <div class="hotel-details row"><!--Beginning of hotel details-->
                
              
                

                
                <div class="portfolio-hotels row">
                    
                  <div class="onepic col">

                    <div class="hotelsname col">
                      <img src="{{asset('img/Icons/kabah2.png')}}"> <h2><p>Makkah hotels</p></h2>
                    </div>

                    <div class="row">
                      <img src="{{asset('img/Ka3bah.jpg')}}">
                    

                    <div class="multipliepic">
                      
                        <img  src="{{asset('img/Ka3bah.jpg')}}">

                        <img  src="{{asset('img/Ka3bah.jpg')}} ">
                   
                        <img   src="{{asset('img/Ka3bah.jpg')}}"> 
                    
                     </div>

                    </div>

                  </div>

                  <div class="onepic col">

                    <div class="hotelsname col"> 
                      <img src="{{asset('img/Icons/madinah2.png')}}"><h2><p>Madinah hotels</p></h2>
                    </div>

                    <div class="row">
                      <img src="{{asset('img/Ka3bah.jpg')}}">
                  
                    <div class="multipliepic">

                        <img src="{{asset('img/Ka3bah.jpg')}}">

                        <img src="{{asset('img/Ka3bah.jpg')}}">
                   
                        <img src="{{asset('img/Ka3bah.jpg')}}"> 
                    
                     </div>

                    </div>

                  </div>

                </div>



              </div><!-- end of hotel details-->




            


           
              <h2 style="margin-top: 50px;">Group Details</h2>
            <div class="group-details row" style="background-color: rgba(255, 255, 255, 0); border:none;"><!--Beginning of Group details-->
              <div class="flight-container row" style="width:97.7%;">
                <div class="icon-flight col"> 
                  <img src="{{asset('img/Icons/Icons-12.png')}}">
                  <h5>Days</h5>
                 <p>{{$hajjpackage['stayingDays']}} Days</p>
                </div>

                <div class="icon-flight col"> 
                  <img src="{{asset('img/Icons/departure.png')}}">
                  <h5>Departure</h5>
                  <p>{{$hajjpackage['Th_departmentDate']}}</p>
                 </div>

                 <div class="icon-flight col"> 
                  <img src="{{asset('img/Icons/arrival.png')}}">
                  <h5>Arrival</h5>
                  <p>{{$hajjpackage['S_arrivalDate']}}</p>
                 </div>

                 <div class="icon-flight2 col"> 
                  <img src="{{asset('img/Icons/airline.png')}}">
                  <h5>Airlines</h5>
                  <p>{{$hajjpackage['S_airline']}}</p>
                 </div>

              </div>

              <div class="groupspecfic row">
                  <div class="specfic row"> 
                    ww
                  </div>
                  
                  <div class="specfic row"> 
                    ww
                  </div>

                  <div class="specfic row"> 
                    ww
                  </div>

                  <div class="specfic row"> 
                    ww
                  </div>

                  <div class="specfic row"> 
                    ww
                  </div>
                  
                  <div class="specfic row"> 
                    ww
                  </div>

                  <div class="specfic row"> 
                    ww
                  </div>
                  
                  <div class="specfic row"> 
                    ww
                  </div>


              </div>

            
            </div><!--Ending of group details-->

          </div><!--end of info table-->



            <div class="tabsinfos"><!--tabs of info beginning-->
              <ul class="tabs nav nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-include-tab" data-bs-toggle="pill" data-bs-target="#pills-include" type="button" role="tab" aria-controls="pills-include" aria-selected="true">Price includes</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-exclude-tab" data-bs-toggle="pill" data-bs-target="#pills-exclude" type="button" role="tab" aria-controls="pills-exclude" aria-selected="false">Price excludes</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-child-tab" data-bs-toggle="pill" data-bs-target="#pills-child" type="button" role="tab" aria-controls="pills-child" aria-selected="false">Child pricing</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-cancel-tab" data-bs-toggle="pill" data-bs-target="#pills-cancel" type="button" role="tab" aria-controls="pills-cancel" aria-selected="false">Cancellation</button>
                </li>

                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-note-tab" data-bs-toggle="pill" data-bs-target="#pills-note" type="button" role="tab" aria-controls="pills-note" aria-selected="false">Special notes</button>
                </li>

              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-include" role="tabpanel" aria-labelledby="pills-include-tab">
                  <ul style="text-align:left;">  
                  <li>Provision of Ticket, Hajj Visa & Dras.</li>
                  <li>Full board accommodation as mentioned or similar.</li>
                  <li>VVIP Tents for Non Shifting Package.</li>
                  <li>Mina Tents & Arfaat Tent applicable as per package chosen.</li>
                  <li>Sofa Beds in Mina.</li>
                  <li>All daily meals : Breakfast, Lunch & Dinner.</li>
                  <li>Daily Laundry Service.</li>
                  <li>Internal transportaion by Muallim coaches.</ul>
                  </div>

                <div class="tab-pane fade" id="pills-exclude" role="tabpanel" aria-labelledby="pills-exclude-tab">
                  <ul style="text-align:left;">  
                    <li>GST @ 5 % to be borne by passengers.</li>
                    <li>Qurbani, however this can be arranged for you upon request></li>
                    <li>Transportaon form Mina and Makkah and back on 10 & 11 Zill - Hajj.</li>
                    <li>Transportaon form Muzadalifa to Mina on 10 Zill - Hajj.</li>
                    <li>Room Service.</li>
                   </ul>
                    </div>

                <div class="tab-pane fade" id="pills-child" role="tabpanel" aria-labelledby="pills-child-tab">
                  <ul style="text-align:left;">  
                  <li>Child Between 2 and 12 years - Rs 30,000/- less on any Package chosen.</li>
                  </ul>
                  </div>

                <div class="tab-pane fade" id="pills-cancel" role="tabpanel" aria-labelledby="pills-cancel-tab">
                  <ul style="text-align:left;">  
                    <li>On Booking - Rs 100,000/-.</li>
                    <li>Before Ramzaan 50% of the total tour amount.</li>
                    <li>14 days prior to departure or no show full amount will be charged.</li>
                    <li>Once Hajj Visa is issued, Zero Package refund policy applies.</li>
                   </ul>
                    </div>

                <div class="tab-pane fade" id="pills-note" role="tabpanel" aria-labelledby="pills-note-tab">
                  <ul style="text-align:left;">  
                    <li>All booking are on tentave basis, subject to Allocaon of Hajj Quota. Final Confirmaon to be given aer allocaon of Haj Quota by Government of india.</li>
                    <li>Prices are fixed and non - negoable. All prices quoted are per person based on USD @ Rs 70/- and cket average Calculated @ Rs 65,000/- Any increase in the same shall be borne by the pilgrim. The USD component and the INR component in the package shall be advised at the me of booking.</li>
                    <li>Service in Mina and Arafat are governed by the Saudi government and subject to change without prior noce.</li>
                    <li>Services like, locaon of Tents, Aached Bathroom Tents, Sofa Beds, etc. can be recalled anyme, even on the day of stay in Mina.</li>
                    <li>For Booking, a Inial deposit of Rs 200,000 per person is required out of which Rs 100,000 will be non refundable except for Non Shiing Package where Rs 200,000 is non refundable. Balance shall be payable as per terms agreed.</li>
                    <li>Addional service can be obtained on demand like VIP Tents, Haram View rooms, junior Suites, Senior Suite, Qurbani, Wheel Chair escorts, priority handling at jeddah airport etc. prices for Addional service shall be advised upon request.</li>
                    <li>All stated dates and ineraries are provisional and subject to confirmaon at the me of booking, dates may vary plus/ minus a day or two on account of factors like, the Hijri Calendar dates, flight allotments etc. in the event of change in Hijri Calendar dates, accommodaon may be provided at any available Hotel and not necessarily those listed on your contract, thus accommodaon may be given in hotel menoned or similar category may be given.</li>
                    <li>Reporng me for Haj flight, Indian airport is 5 hour before the flight departure and for Saudi airport in 8-10 hours before departure.</li>
                    <li>Standard free baggage allowance in economy class is 2 pieces of luggage of maximum 23 kg. each excess baggage will aract addional charges by the airline</li>

                    </ul>
                    </div>

              </div>

              </div><!--tabs of info Ending-->


          </div>

    </div>
  </div>

  </section>
        </section>
     
    </section><!-- End Hajj Section -->

  

  </main><!-- End #main -->

@include ('includes/footer')