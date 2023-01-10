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
<h2 style="margin-top: 50px;">Group Details</h2>
<div class="group-details row" style="background-color: rgba(255, 255, 255, 0); border:none;"><!--Beginning of Group details-->
  <div class="flight-container row">

    <div class="icon-flight col"> 
      <img src="{{asset('img/Icons/FTLPicon-07.png')}}">
      <h5>Days</h5>
     <p>
      @switch($url)
      @case('hajjpackage')
      {{$hajjpackage['stayingDays']}}
      @break
      @case('umrahpackage')
      {{$umrahpackage['stayingDays']}}
      @break
      @default
      @endswitch Days
    </p>
    </div>

    <div class="icon-flight col"> 
      <img src="{{asset('img/Icons/departure.png')}}">
      <h5>Departure</h5>
      <p>
        @switch($url)
        @case('hajjpackage')
        {{dayMonth($hajjpackage['Th_departmentDate'])}}
        @break
        @case('umrahpackage')
        {{dayMonth($umrahpackage['Th_departmentDate'])}}
        @break
        @default
        @endswitch
      </p>
    </div>

    <div class="icon-flight col"> 
      <img src="{{asset('img/Icons/arrival.png')}}">
      <h5>Arrival</h5>
      <p>
        @switch($url)
        @case('hajjpackage')
        {{dayMonth($hajjpackage['S_arrivalDate'])}}
        @break
        @case('umrahpackage')
        {{dayMonth($umrahpackage['S_arrivalDate'])}}
        @break
        @default
        @endswitch
      </p>
    </div>

     <div class="icon-flight2 col pb-3"> 
      <img src="{{asset('img/Icons/airline.png')}}">
      <h5>Airlines</h5>
      <p>
        @switch($url)
        @case('hajjpackage')
        {{$hajjpackage['S_airline']}}
        @break
        @case('umrahpackage')
        {{$umrahpackage['S_airline']}}
        @break
        @default
        @endswitch
      </p>
     </div>
  </div>
  <div class="groupspecfic specfic border row">
    @switch($url)
    @case('hajjpackage')
    @foreach($hajjpackage->details as $detail)
      <div class="row bottom_border"> 
        {{$detail['information']}}
      </div>
     @endforeach
    @break
    @case('umrahpackage')
    @foreach($umrahpackage->details as $detail)
      <div class="row bottom_border"> 
        {{$detail['information']}}
      </div>
     @endforeach
    @break
    @default
    @endswitch
  </div>    
</div><!--Ending of group details-->