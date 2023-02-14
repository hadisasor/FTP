@php

$umrahCount = 0;
@endphp
<section id="services" class="services section-bg">
    <div class="row px-5" data-aos="fade-up" data-aos-delay="10">
      

      <div class="row centering">
        @foreach ($umrahpackages as $umrahpackage)
        @php $umrahCount++ @endphp
        
          <div class="col-xl-3 content">
            <h4 class="text-center border-bottom-thick">{{$umrahpackage['stayingDays']}} day of stay</h4>
            <div class="image-container"> <img src="{{asset('../../img/Ka3bah.jpg')}}"> </div> 
            <h4><a>{{$umrahpackage['packageName']}} package ({{$umrahpackage['packagePrice']}}฿)</a></h4>
            <div class="row">
              <div class="details"  data-aos="zoom-in" data-aos-delay="10">
                {{-- <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                <img class="icon3" src="{{asset('img/Icons/Group.png')}}"></div> --}}
                
                <div class="row" >
                @foreach($umrahpackage->hotels as $hotel)
                @if($hotel['location'] == 'Makkah')
                <div class="row">
                  <div class="col-2 pt-2 px-4">
                    <img class="icon" src="{{asset('img/Icons/FTLPM-01.png')}}">
                  </div> <p class="col-3"> Makkah hotel: </p> <p class="col"> {{$hotel['hotel_name']}} </p>
                </div>
                @endif

                @if($hotel['location'] == 'Madinah')
                <div class="row">
                  <div class="col-2 pt-2 px-4" >
                    <img class="icon" src="{{asset('img/Icons/FTLPT-02.png')}}">
                  </div> <p class="col-3"> Madinah hotel: </p> <p class="col"> {{$hotel['hotel_name']}} </p>
                </div>
                @endif
                
                @endforeach
                <div class="row">
                  <div class="col-2 pt-2 px-4">
                    <img class="icon" src="{{asset('img/Icons/FTLPG-03.png')}}">
                  </div>
                <p class="col-3"> Group: </p> <p class="col">{{$umrahpackage['groupNumber']}}</p>
                </div>
                </div>

                
                  {{-- <div class="hot-name"><p>Al-Janadiryah<br>Al-Tayibah<br> 3 </p></div> --}}
              </div>
            </div>
            <div class="book-container">
              <a href="umrahpackage/{{$umrahpackage['id']}}" class="book btn-get-started scrollto">Book Now</a>
            </div>
          </div>
        @break ($umrahCount == 4)
        @endforeach

        
        @if ($umrahCount == 0)
          <div class="col-12 null">
         <h4 class="text-center">Currently there's no Economy package available</h4>
          </div>
          @endif
      </div>

    </div>
  </section>