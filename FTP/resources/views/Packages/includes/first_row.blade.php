
@php 
$url = URL::current();
$url = strstr($url,'hajj');
$url = preg_replace("/[^A-Za-z]/", '',$url);
if($url == ''){
  $url = URL::current();
  $url = strstr($url,'umrah');
  $url = preg_replace("/[^A-Za-z]/", '',$url);
}
@endphp
<div class="col-xl-4">
    <div class="date-container"> 
        <h3 style="padding-top: 10px ;">
          @switch($url)
          @case('hajjpackage')
          {{$hajjpackage['packageName']}} Package
          @break
          @case('umrahpackage')
          {{$umrahpackage['packageName']}} Package
          @break
          @default
          @endswitch
        </h3>
      <img class="thumbnail" src="{{asset('img/FTLPM-01.jpg')}}">   
      <div><img class="icon" src="{{asset('img/Icons/Icons-12.png')}}">
        <h4>
          @switch($url)
          @case('hajjpackage')
          {{$hajjpackage['stayingDays']}} days
          @break
          @case('umrahpackage')
          {{$umrahpackage['stayingDays']}} days
          @break
          @default
          @endswitch
        </h4>
      </div>
      <div class="date">
        <h5>Starts at</h5>
          <h4>
            @switch($url)
            @case('hajjpackage')
            {{priceColon($hajjpackage['packagePrice'])}} bht
            @break
            @case('umrahpackage')
            {{priceColon($umrahpackage['packagePrice'])}} bht
            @break
            @default
            @endswitch  
          </h4>
        <span>thul hijjah 1</span>
      </div>
    </div>    
</div>
<div class="col-xl-8 pb-4">
      <div class="flight-container row" >
          <div class="icon-flight col">
            <img src="{{asset('img/Icons/departure.png')}}"> <h5>Departure</h5>
              <h4>
                @switch($url)
                @case('hajjpackage')
                {{dayMonth($hajjpackage['Th_departmentDate'])}}
                @break
                @case('umrahpackage')
                {{dayMonth($umrahpackage['Th_departmentDate'])}}
                @break
                @default
                @endswitch 
              </h4>
          </div>
          <div class="icon-flight col">
              <img src="{{asset('img/Icons/arrival.png')}}"> <h5>Arrivals</h5>
              <h4>
                @switch($url)
                @case('hajjpackage')
                {{dayMonth($hajjpackage['S_arrivalDate'])}}
                @break
                @case('umrahpackage')
                {{dayMonth($umrahpackage['S_arrivalDate'])}}
                @break
                @default
                @endswitch 
              </h4>
          </div>
          <div class="row" style="background-color: rgb(249, 249, 249);">
            <div class="airline-icon col">
              <img src="{{asset('img/Icons/airline.png')}}">
              <h5><br> Airlines</h5>
              <h4><br>
                @switch($url)
                @case('hajjpackage')
                {{$hajjpackage['Th_airline']}}
                @break
                @case('umrahpackage')
                {{$umrahpackage['Th_airline']}}
                @break
                @default
                @endswitch 
              </h4>
            </div>
          </div>
        </div>
        
    <div class="hotel-container row" style="background-color: rgb(244, 244, 244);">
          @switch($url)
              @case('hajjpackage')
              <div class="col">
                <img src="{{asset('img/Icons/kabahicon.png')}}">
                <h5>Makkah Hotel</h5>
                @foreach($hajjpackage->hotels as $hotel)
                @if($hotel['location'] == "Makkah")
                <p>{{$hotel['hotel_name']}}</p>
                @endif
                @endforeach
              </div>
              <div class="col">
                <img src="{{asset('/img/Icons/madinahicon.png')}}
                "><h5>Madinah Hotel</h5>
                @foreach($hajjpackage->hotels as $hotel)
                @if($hotel['location'] == "Madinah")
                <p>{{$hotel['hotel_name']}}</p>
                @endif
                @endforeach
              </div>
          @break
          @case('umrahpackage')
              <div class="col">
                <img src="{{asset('img/Icons/kabahicon.png')}}">
                <h5>Makkah Hotel</h5>
                @foreach($umrahpackage->hotels as $hotel)
                @if($hotel['location'] == "Makkah")
                <p>{{$hotel['hotel_name']}}</p>
                @endif
                @endforeach
              </div>
              <div class="col">
                <img src="{{asset('/img/Icons/madinahicon.png')}}
                "><h5>Madinah Hotel</h5>
                @foreach($umrahpackage->hotels as $hotel)
                @if($hotel['location'] == "Madinah")
                <p>{{$hotel['hotel_name']}}</p>
                @endif
                @endforeach
              </div>
          @break
          @default
          @endswitch 
      </div>
</div>