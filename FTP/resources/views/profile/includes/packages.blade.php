  
@php 
$url = URL::current();
$url = strstr($url,'my_profile');
$url =preg_replace('/[^a-zA-Z\']/', "", $url );

function chRemover($str){
 $str = str_replace( array( 'payment' ), '', $str);
 $str = strtolower($str);
 $str = preg_replace('/[^a-z A-Z\-]/', '', $str);
  return $str;
}
@endphp

@if($url == 'myprofile')
<section id="hajj" class="about section-bg">
                <div class="Hajj-container" data-aos="fade-up">
                <div class="topichajj">

                    @if(Session::get('success'))
                    <div class="alert alert-success">
                      {{Session::get('success')}}
                    </div>
                    @endif

                <section class="section-title">
                    @if (auth()->user()->userType == 'Admin' || auth()->user()->userType == 'Tokseh')
                    <h2> {{auth()->user()->fstname}}'s own Umrah packages </h2>
                    @else
                    <h2> {{auth()->user()->fstname}}'s reserved Umrah packages </h2>
                    @endif
                </section>

                <div class="hajjpackages">
                    @php
                    $cu = 0;
                    @endphp

                        <div class="row centering">   
                        @foreach($umrahpackages as $i=>$umrahpackage)
                        @if (auth()->user()->id == $umrahpackage['user_id'])
                        @php $cu++ @endphp

                        <div class="content col-xl-6">
                          <div class="row" data-aos="zoom-in" data-aos-delay="50">
                              <div class="col-xl-12"><h3>{{$umrahpackage['stayingDays']}} day of stay</h3>
                              </div>
                              
                              <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                              <div class="hajjpricing col"><h4>{{$umrahpackage['stayingDays']}} DAY<br> {{priceColon($umrahpackage['packagePrice'])}}฿ </h4></div>
                          </div>
                          <div class="row">
                              <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                              <div class="icontainer"><img class="icon" src="{{asset('img/Icons/FTLPM-01.png')}}"> <img class="icon2" src="{{asset('img/Icons/FTLPT-02.png')}}"> 
                              <img class="icon3" src="{{asset('img/Icons/FTLPG-03.png')}}"></div>
                              @foreach($umrahpackage->hotels as $hotel)
                              @if($hotel['location'] == 'Makkah')
                               <div class="hot-location pt-4"><p>Makkah hotel: {{$hotel['hotel_name']}}
                              @else
                                <br>Madinah hotel: {{$hotel['hotel_name']}}
                              @endif
                              @endforeach
                              <br> Group: {{$umrahpackage['groupNumber']}}
                              </div>
                          </div>    
                              <div class="book-container">
                              <a href="../umrahpackage/{{$umrahpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                              </div>
                          </div>
                        </div>
                            @endif
                        @endforeach
                        </div>
                    
                    <div class="row centering">
                    @foreach ($bookings as $booking) 
                    @if(auth()->user()->id == $booking['booker_id'])
                    @if($booking['umrah_package_id'] == $umrahpackage['id'])
                    @php $cu++ @endphp 
                    <div class="content col-xl-6">
                      <div class="row" data-aos="zoom-in" data-aos-delay="50">
                          <div class="col-xl-12"><h3>{{$umrahpackage['stayingDays']}} day of stay</h3>
                          </div>
                          <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                          <div class="hajjpricing col">
                            <h4> {{priceColon($booking['total'])}}฿
                              
                            @if(auth()->user()->id == $booking['booker_id'] )
                            <p> You paid {{chRemover($booking['payment_status'])}}: {{priceColon($booking['paid_amount'])}}฿
                            <br> Amount left &nbsp;&nbsp;: @if($booking['left_amount'] == 0) None @else {{priceColon($booking['left_amount'])}}฿ @endif</p>
                            @endif
                            
                            </h4>  
                          </div>
                      </div>
                      <div class="row mt-2">
                          <h3><a href="/profile/{{$umrahpackage['user_id']}}">{{$umrahpackage['groupLeader']}}</a></h3>
                          <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                              <div class="icontainer"><img class="icon" src="{{asset('img/Icons/FTLPM-01.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                                <img class="icon3" src="{{asset('img/Icons/Group.png')}}">
                              </div>
                              @foreach($umrahpackage->hotels as $hotel)
                              @if($hotel['location'] == 'Makkah')
                              <div class="hot-location pt-4">
                                <p>Makkah hotel: {{$hotel['hotel_name']}}
                              @else
                                <br>Madinah hotel: {{$hotel['hotel_name']}}
                              @endif
                              @endforeach
                                <br> Group: {{$umrahpackage['groupNumber']}}</p>
                              </div>
                          </div>    
                          <div class="book-container">
                              <a href="../umrahpackage/{{$umrahpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                          </div>
                      </div>
                    </div>
                    @endif
                    @endif
                  @endforeach
                  </div>
              </div>

                @if($cu == 0)
                    @if(auth()->user()->userType == 'Pilgrim')
                      <div class="null col-xl-12"> <h2>There's no reserved packages</h2></div>
                    @else
                    <div class="null col-xl-12"> <h2>There's no created packages</h2></div>
                    @endif
                @endif


              <section class="section-title mt-3">
                @if (auth()->user()->userType == 'Admin' || auth()->user()->userType == 'Tokseh')
                @php $cu++ @endphp
                <h2> {{auth()->user()->fstname}}'s own Hajj packages </h2>
                @else
                <h2> {{auth()->user()->fstname}}'s Reserved Hajj packages </h2>
                @endif
                </section>

                <div class="hajjpackages">
                        @php $ch = 0; 
                        @endphp
                        <div class="row centering">
                        @foreach($hajjpackages as $i=>$hajjpackage)
                        @if (auth()->user()->id == $hajjpackage['user_id'])
                        @php $ch++ @endphp
                        <div class="content col-xl-6">
                          <div class="row" data-aos="zoom-in" data-aos-delay="50">
                              <div class="col-xl-12"><h3>{{$hajjpackage['stayingDays']}} day of stay</h3>
                              </div>
                              
                              <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                              <div class="hajjpricing col"><h4>{{$hajjpackage['stayingDays']}} DAY<br> {{priceColon($hajjpackage['packagePrice'])}}฿ </h4></div>
                          </div>
                          <div class="row">
                              <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                                  <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                                      <img class="icon3" src="{{asset('img/Icons/Group.png')}}">
                                  </div>
                                  @foreach($hajjpackage->hotels as $hotel)
                                  @if($hotel['location'] == 'Makkah')
                                  <div class="hot-location pt-4">
                                    <p>Makkah hotel: {{$hotel['hotel_name']}}
                                  @else
                                    <br>Madinah hotel: {{$hotel['hotel_name']}}
                                  @endif
                                  @endforeach
                                    <br> Group: {{$hajjpackage['groupNumber']}}</p>
                                  </div>
                              </div>    
                              <div class="book-container">
                              <a href="../hajjpackage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                              </div>
                          </div>
                        </div>
                        @endif
                    @endforeach
                    </div>

                    <div class="row centering">
                    @foreach ($bookings as $booking)
                    @if(auth()->user()->id == $booking['booker_id'])
                    @if($booking['hajj_package_id'] == $hajjpackage['id'])
                    @php $ch++ @endphp  
                    <div class="content col-xl-6">
                      <div class="row" data-aos="zoom-in" data-aos-delay="50">
                          <div class="col-xl-12"><h3>{{$hajjpackage['stayingDays']}} day of stay</h3>
                          </div>
                          
                          <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                          <div class="hajjpricing col">
                            <h4> {{priceColon($booking['total'])}}฿
                              
                            @if(auth()->user()->id == $booking['booker_id'] )
                            <p> You paid {{chRemover($booking['payment_status'])}}: {{priceColon($booking['paid_amount'])}}฿
                            <br> Amount left &nbsp;&nbsp;: @if($booking['left_amount'] == 0) None @else {{priceColon($booking['left_amount'])}}฿ @endif</p>
                            @endif
                            
                            </h4>  
                          </div>
                      </div>
                      <div class="row">
                          <h3><a href="/profile/{{$umrahpackage['user_id']}}">{{$hajjpackage['groupLeader']}}</a></h3>
                          <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                              <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                                <img class="icon3" src="{{asset('img/Icons/Group.png')}}">
                              </div>
                              @foreach($hajjpackage->hotels as $hotel)
                              @if($hotel['location'] == 'Makkah')
                              <div class="hot-location pt-4">
                                  <p>Makkah hotel: {{$hotel['hotel_name']}}
                                  @else
                                    <br>Madinah hotel: {{$hotel['hotel_name']}}
                                  @endif
                                  @endforeach
                                  <br> Group: {{$hajjpackage['groupNumber']}}</p>
                              </div>
                          </div>    
                          <div class="book-container">
                              <a href="../hajjpackage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                          </div>
                      </div>
                    </div>

                    @endif
                    @endif
                  @endforeach
                  </div>
              </div>

                @if ($ch == 0)
                    @if(auth()->user()->userType == 'Pilgrim')
                    <div class="null col-xl-12"> <h2>There's no reserved packages</h2></div>
                    @else
                    <div class="null col-xl-12"> <h2>There's no created packages</h2></div>
                    @endif
                @endif

                </div>
                </div>
</section>

@else <!-- --------------------------------------------------------ANOTHER PAGE-------------------------------------------------------------- -->

<section id="hajj" class="about section-bg">
    <div class="Hajj-container" data-aos="fade-up">
    <div class="topichajj">

      @if(Session::get('success'))
      <div class="alert alert-success">
        {{Session::get('success')}}
      </div>
      @endif
    <section class="section-title">
      @if ($user->userType == 'Admin' || $user->userType == 'Tokseh')
      <h2> {{$user['fstname']}}'s own Umrah packages </h2>
      @else
      <h2> {{$user['fstname']}}'s reserved Umrah packages 
      </h2>
      @endif
    </section>
    <div class="hajjpackages">
      @php
      $cu = 0;
      @endphp
          <div class="row centering">
          @foreach($umrahpackages as $i=>$umrahpackage)
          @if ($user->id == $umrahpackage['user_id'])
          @php $cu++ @endphp
            <div class="content col-xl-6">
                  <div class="row" data-aos="zoom-in" data-aos-delay="50">
                      <div class="col-xl-12"><h3>{{$umrahpackage['stayingDays']}} day of stay</h3>
                      </div>
                      
                      <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                      <div class="hajjpricing col"><h4>{{$umrahpackage['stayingDays']}} DAY<br> {{priceColon($umrahpackage['packagePrice'])}}฿ </h4></div>
                  </div>
                  <div class="row">
                      <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                          <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                          <img class="icon3" src="{{asset('img/Icons/Group.png')}}"></div>
                          @foreach($umrahpackage->hotels as $hotel)
                          @if($hotel['location'] == 'Makkah')
                          <div class="hot-location pt-4">
                            <p>Makkah hotel: {{$hotel['hotel_name']}}
                          @else
                              <br>Madinah hotel: {{$hotel['hotel_name']}}
                          @endif
                          @endforeach
                              <br> Group: {{$umrahpackage['groupNumber']}}</p>
                          </div>
                      </div>    
                      <div class="book-container">
                          <a href="../umrahpackage/{{$umrahpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                      </div>
                  </div>
            </div>
            @endif
            @endforeach

            <div class="row centering">
              @foreach ($bookings as $booking) 
              @foreach($bookedumrah as $umrahpackage)
              @if($umrahpackage['id'] == $booking['umrah_package_id'] )
              @if($user->id == $booking['booker_id'])
              @php $cu++ @endphp 
              <div class="content col-xl-6">
                <div class="row" data-aos="zoom-in" data-aos-delay="50">
                    <div class="col-xl-12"><h3>{{$umrahpackage['stayingDays']}} day of stay</h3>
                    </div>
                    <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                    <div class="hajjpricing col">
                      <h4> {{priceColon($booking['total'])}}฿
                        
                        <p> {{$user->fstname}} booked this package</p>
                      
                      </h4>  
                    </div>
                </div>
                <div class="row mt-2">
                    <h3><a href="/profile/{{$umrahpackage['user_id']}}">{{$umrahpackage['groupLeader']}}(Tokseh)</a></h3>
                    <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                        <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                          <img class="icon3" src="{{asset('img/Icons/Group.png')}}">
                        </div>
                        @foreach($umrahpackage->hotels as $hotel)
                        @if($hotel['location'] == 'Makkah')
                        <div class="hot-location pt-4">
                          <p>Makkah hotel: {{$hotel['hotel_name']}}
                        @else
                          <br>Madinah hotel: {{$hotel['hotel_name']}}
                        @endif
                        @endforeach
                          <br> Group: {{$umrahpackage['groupNumber']}}</p>
                        </div>
                    </div>    
                    <div class="book-container">
                        <a href="../umrahpackage/{{$umrahpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                    </div>
                </div>
              </div>
              @endif
              @endif
            @endforeach
            @endforeach
            </div>
          </div>
    </div>

    @if($cu == 0)
      @if($user->userType == 'Pilgrim')
        <div class="null col-xl-12"> <h2>There's no reserved packages</h2></div>
      @else
      <div class="null col-xl-12"> <h2>There's no created packages</h2></div>
      @endif
    @endif


    <section class="section-title">
    @if ($user->userType == 'Admin' || $user->userType == 'Tokseh')
    @php $cu++ @endphp
    <h2> {{$user['fstname']}}'s own Hajj packages </h2>
    @else
    <h2> {{$user['fstname']}}'s reserved Hajj packages </h2>
    @endif
    </section>

    <div class="hajjpackages">
          @php $ch = 0; 
          @endphp
          <div class="row centering">
          @foreach($hajjpackages as $i=>$hajjpackage)
          @if ($user->id == $hajjpackage['user_id'])
          @php $ch++ @endphp
     
              <div class="content col-xl-6">
                  <div class="row" data-aos="zoom-in" data-aos-delay="50">
                      <div class="col-xl-12"><h3>{{$hajjpackage['stayingDays']}} day of stay</h3>
                      </div>
                      
                      <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                      <div class="hajjpricing col"><h4>{{$hajjpackage['stayingDays']}} DAY<br> {{priceColon($hajjpackage['packagePrice'])}}฿ </h4></div>
                  </div>
                  <div class="row">
                      <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                          <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                              <img class="icon3" src="{{asset('img/Icons/Group.png')}}">
                          </div>
                          @foreach($hajjpackage->hotels as $hotel)
                          @if($hotel['location'] == 'Makkah')
                          <div class="hot-location pt-4">
                            <p>Makkah hotel: {{$hotel['hotel_name']}}
                          @else
                            <br>Madinah hotel: {{$hotel['hotel_name']}}
                          @endif
                          @endforeach
                            <br> Group: {{$hajjpackage['groupNumber']}}</p>
                          </div>
                      </div>    

                      <div class="book-container">
                          <a href="../hajjpackage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                      </div>
                  </div>
              </div>

            @endif
            @endforeach
            </div>


            <div class="row centering">
              @foreach($bookedhajj as $hajjpackage)
              @foreach ($bookings as $booking)
              @if($booking['hajj_package_id'] == $hajjpackage['id'])
              @if($user->id == $booking['booker_id'])
              @php $ch++ @endphp  
              <div class="content col-xl-6">
                <div class="row" data-aos="zoom-in" data-aos-delay="50">
                    <div class="col-xl-12"><h3>{{$hajjpackage['stayingDays']}} day of stay</h3>
                    </div>
                    
                    <div class="image-container col-xl-6"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
                    <div class="hajjpricing col">
                      <h4> {{priceColon($booking['total'])}}฿
                        
                      <p> {{$user->fstname}} booked this package</p>
                      
                      </h4>  
                    </div>
                </div>
                <div class="row">
                    <h3><a href="/profile/{{$umrahpackage['user_id']}}">{{$hajjpackage['groupLeader']}}(Tokseh)</a></h3>
                    <div class="details"  data-aos="zoom-in" data-aos-delay="50">
                        <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                          <img class="icon3" src="{{asset('img/Icons/Group.png')}}">
                        </div>
                        @foreach($hajjpackage->hotels as $hotel)
                        @if($hotel['location'] == 'Makkah')
                        <div class="hot-location pt-4">
                            <p>Makkah hotel: {{$hotel['hotel_name']}}
                            @else
                              <br>Madinah hotel: {{$hotel['hotel_name']}}
                            @endif
                            @endforeach
                            <br> Group: {{$hajjpackage['groupNumber']}}</p>
                        </div>
                    </div>    
                    <div class="book-container">
                        <a href="../hajjpackage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                    </div>
                </div>
              </div>

              @endif
              @endif
            @endforeach
            @endforeach
    </div>

    @if ($ch == 0)
      @if($user->userType == 'Pilgrim')
      <div class="null col-xl-12"> <h2>There's no reserved packages</h2></div>
      @else
      <div class="null col-xl-12"> <h2>There's no created packages</h2></div>
      @endif
    @endif


    </div>
    </div>
    </section>

    @endif