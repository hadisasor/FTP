@php 
$url = URL::current();
$url = strstr($url,'hajj');
$url = preg_replace("/[^A-Za-z]/", '',$url);
  if($url == ''){
    $url = URL::current();
    $url = strstr($url,'umrah');
    $url = preg_replace("/[^A-Za-z]/", '',$url);
  }
$url1 = URL::current();
$url1 = strstr($url1,'profile');
$url1 = preg_replace("/[^A-Za-z]/", '',$url1);
@endphp
<div class="content col-5">
    <div class="row" data-aos="zoom-in" data-aos-delay="50">
      <div class="col-5"><h3>
        @switch($url)
        @case('hajjpackages')
        {{$hajjpackage['stayingDays']}}
        @break
        @case('umrahpackages')
        {{$umrahpackage['stayingDays']}}
        @break
        @default
        @endswitch day of stay</h3>
      </div>
        <div class="image-container col-5"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
        <div class="hajjpricing col">
          <h4>
            @switch($url)
            @case('hajjpackages')
            {{$hajjpackage['stayingDays']}}
            @break
            @case('umrahpackages')
            {{$umrahpackage['stayingDays']}}
            @break
            @default
            @endswitch 
            DAY<br> 

            @switch($url)
            @case('hajjpackages')
             {{priceColon($hajjpackage['packagePrice'])}}฿ 
            @break
            @case('umrahpackages')
              {{priceColon($umrahpackage['packagePrice'])}}฿ 
            @break
            @default
            @endswitch
        </h4>
      </div>
    </div>
    <div class="row">
       <h3 class="pt-3">
        @switch($url)
        @case('hajjpackages')
        {{$hajjpackage['groupLeader']}}
        @break
        @case('umrahpackages')
        {{$umrahpackage['groupLeader']}} 
        @break
        @default
        @endswitch
      </h3>
      <div class="details"  data-aos="zoom-in" data-aos-delay="50">
        <div class="icontainer"><img class="icon" src="{{asset('img/Icons/FTLPM-01.png')}}"> <img class="icon2" src="{{asset('img/Icons/FTLPT-02.png')}}"> 
        <img class="icon3" src="{{asset('img/Icons/FTLPG-03.png')}}"></div>
        @switch($url)
        @case('hajjpackages')
            @foreach($hajjpackage->hotels as $hotel)
            @if($hotel['location'] == 'Makkah')
            <div class="hot-location pt-4">
              <p>Makkah hotel: {{$hotel['hotel_name']}}
            @else
              <br>Madinah hotel: {{$hotel['hotel_name']}}
            @endif
            @endforeach
        @break
        @case('umrahpackages')
            @foreach($umrahpackage->hotels as $hotel)
            @if($hotel['location'] == 'Makkah')
            <div class="hot-location pt-4">
              <p>Makkah hotel: {{$hotel['hotel_name']}}
            @else
              <br>Madinah hotel: {{$hotel['hotel_name']}}
            @endif
            @endforeach 
        @break
        @default
        @endswitch

        <br>Group: 
        @switch($url)
        @case('hajjpackages')
        {{$hajjpackage['groupNumber']}}
        @break
        @case('umrahpackages')
        {{$umrahpackage['groupNumber']}}
        @break
        @default
        @endswitch</p></div>
          {{-- <div class="hot-name"><p>Al-Janadiryah<br>Al-Tayibah<br> 3 </p></div> --}}
      </div>
      <div class="book-container">
        <a 
          @switch($url)
          @case('hajjpackages')
          href="hajjpackage/{{$hajjpackage['id']}}"
          @break
          @case('umrahpackages')
          href="umrahpackage/{{$umrahpackage['id']}}"
          @break
          @default
          @endswitch
          class="book btn-get-started scrollto">Book now
        </a>
    </div>
    </div>    
      
  </div>
</div>