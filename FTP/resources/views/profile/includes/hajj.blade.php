
<div calss="hajjpackages " >
  <div class="content col-xl-6 centering1">
      <div class="row" data-aos="zoom-in" data-aos-delay="50">
        <div class="col-xl-6"><h3>
          
         
          {{$hajjpackage['stayingDays']}}
         
          
          {{-- {{$umrahpackage['stayingDays']}} --}}
          
          
          day of stay</h3>
        </div>
          <div class="image-container col-5"> <img src="{{asset('img/Ka3bah.jpg')}}"> </div> 
          <div class="hajjpricing col">
            <h4>
              
              
              {{$hajjpackage['stayingDays']}}
              
              
              {{-- {{$umrahpackage['stayingDays']}} --}}
              
              
              
              DAY<br> 
  
              
              
               {{priceColon($hajjpackage['packagePrice'])}}฿ 
              
              
                {{-- {{priceColon($umrahpackage['packagePrice'])}}฿  --}}
              
             
          </h4>
        </div>
      </div>
      <div class="row">
         <h3 class="pt-3">
          
          {{$hajjpackage['groupLeader']}}
          
          {{-- {{$umrahpackage['groupLeader']}}  --}}
          
        </h3>
        <div class="details"  data-aos="zoom-in" data-aos-delay="50">
          <div class="icontainer"><img class="icon" src="{{asset('img/Icons/FTLPM-01.png')}}"> <img class="icon2" src="{{asset('img/Icons/FTLPT-02.png')}}"> 
          <img class="icon3" src="{{asset('img/Icons/FTLPG-03.png')}}"></div>
          
          
              @foreach($hajjpackage->hotels as $hotel)
              @if($hotel['location'] == 'Makkah')
              <div class="hot-location pt-4">
                <p>Makkah hotel: {{$hotel['hotel_name']}}
              @else
                <br>Madinah hotel: {{$hotel['hotel_name']}}
              @endif
              @endforeach
         
          
              {{-- @foreach($umrahpackage->hotels as $hotel)
              @if($hotel['location'] == 'Makkah')
              <div class="hot-location pt-4">
                <p>Makkah hotel: {{$hotel['hotel_name']}}
              @else
                <br>Madinah hotel: {{$hotel['hotel_name']}}
              @endif
              @endforeach  --}}
          
  
          <br>Group: 
          
          
          {{$hajjpackage['groupNumber']}}
         
         
          {{-- {{$umrahpackage['groupNumber']}} --}}
         
          </p></div>
            {{-- <div class="hot-name"><p>Al-Janadiryah<br>Al-Tayibah<br> 3 </p></div> --}}
        </div>
        <div class="book-container">
          <a 
            
            
            href="hajjpackage/{{$hajjpackage['id']}}"
            
            
            {{-- href="umrahpackage/{{$umrahpackage['id']}}" --}}
            
            class="book btn-get-started scrollto">Book now
          </a>
      </div>
      </div>    
        
    </div>
   
  </div>