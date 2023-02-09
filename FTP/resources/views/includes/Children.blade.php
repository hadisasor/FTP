@extends('Home')
@php
//for counting the packages 
$umrahCount  = 0;
$hajjCount   = 0; 
@endphp
  
@section('hajj')
<section id="services" class="services section-bg">
    <div class="row px-5" data-aos="fade-up" data-aos-delay="10">
      
      <div class="section-title mt-3">
     <h2> <a href="hajjpackages">Hajj Packages</a></h2>
      </div>

      <div class="row centering">
        @foreach ($hajjpackages as $hajjpackage)
          @php $hajjCount++ @endphp
          <div class="col-xl-3 content">
            <h4 class="text-center border-bottom-thick">{{$hajjpackage['stayingDays']}} day of stay</h4>
            <div class="image-container"> <img src="{{asset('../../img/Ka3bah.jpg')}}"> </div> 
            <h4><a>{{$hajjpackage['packageName']}} package ({{$hajjpackage['packagePrice']}}฿)</a></h4>
            <div class="row">
              <div class="details"  data-aos="zoom-in" data-aos-delay="10">
                {{-- <div class="icontainer"><img class="icon" src="{{asset('img/Icons/kabah2.png')}}"> <img class="icon2" src="{{asset('img/Icons/madinah2.png')}}"> 
                <img class="icon3" src="{{asset('img/Icons/Group.png')}}"></div> --}}
                
                <div class="row" >
                @foreach($hajjpackage->hotels as $hotel)
                @if($hotel['location'] == 'Makkah')
                <div class="row">
                  <div class="col-2 px-4">
                    <img class="icon" src="{{asset('img/Icons/FTLPM-01.png')}}">
                  </div> <p class="col-3"> Makkah hotel: </p> <p class="col"> {{$hotel['hotel_name']}} </p>
                </div>
                @endif

                @if($hotel['location'] == 'Madinah')
                <div class="row">
                  <div class="col-2 px-4" >
                    <img class="icon" src="{{asset('img/Icons/FTLPT-02.png')}}">
                  </div> <p class="col-3"> Madinah hotel: </p> <p class="col"> {{$hotel['hotel_name']}} </p>
                </div>
                @endif
                
                @endforeach
                <div class="row">
                  <div class="col-2 px-4">
                    <img class="icon" src="{{asset('img/Icons/FTLPG-03.png')}}">
                  </div>
                <p class="col-4"> Group: </p> <p class="col">{{$hajjpackage['groupNumber']}}</p>
                </div>
                </div>

                
                  {{-- <div class="hot-name"><p>Al-Janadiryah<br>Al-Tayibah<br> 3 </p></div> --}}
              </div>
            </div>
            <div class="book-container">
              <a href="hajjpackage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">Book Now</a>
            </div>
          </div></center>
        @break ($hajjCount == 4)
        @endforeach
        @if ($hajjCount == 0)
          <div class="col-12 null">
         <h4 class="text-center">Currently there's no Economy package available</h4>
          </div>
          @endif
      </div>

    </div>
  </section>

 
  @endsection

  

@section('umrah')
<section id="portfolio" class="services section-bg">
    <div class="row px-5" data-aos="fade-up" data-aos-delay="10">

      <div class="section-title mt-3">
        <h2><a href=" ">Umrah Packages</a></h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

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
 
  @endsection


  <!-- ======= Hotel Section ======= -->

  @section('hotels')

    
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="10">
  
          <div class="section-title">
            <a href="hotels"><h2>Hotels</h2></a>
          </div>
  
  
          <div class="row"> <!-- start of hotels row -->
  
            <div class="col-xl px-4 pb-5">
            <div class="section-title pb-2 pt-2">
                <h3 class="bottom_border">
                  <div class="airline-icon">
                    <img src="{{asset('img/Icons/FTLPM-01.png')}}"> 
                    </div> 
                  Makkah Hotels</h3>
              </div>
  
              <div class="scrollable-x">
              @foreach ($hotels as $hotel)
              @if($hotel['location'] == 'Makkah')
              <div class="content col-xl-5"> 
                <h4 class="text-center border-bottom-thick">{{$hotel['hotel_name']}}</h4>
                <!--<div class="icon"><i class="bx bxl-dribbble"></i></div>-->
                <div class="image-container"> <img class="image-crop" src="{{asset($hotel['img'])}}"> </div> 
                  <h4><a></a></h4>
                  <div class="row">
                    <div class="details"  data-aos="zoom-in" data-aos-delay="10">
                      
                      <div class="row">
                        <h5 class="col-md-3">Rate:</h5>
                        @for ($i = 1; $i <= $hotel['stars']; $i++)
                        <i class="col-1 bi-star-fill "></i>
                        @endfor 
                          
                        @php $remain = 5 - $hotel['stars']; @endphp
    
                        @for($i = 1; $i <= $remain; $i++)
                        <i class="col-1 bi-star"></i>
                        @endfor
                      </div>
                      <div class="row">
                        <i class="col-md-3 bi-geo-alt-fill"></i><p class="col-9">Makkah - Haram</p>
                      </div>
                       
                    </div>
                  </div>
                      <div class="book-container">
                        <a href="#" class="book btn-get-started scrollto">Details</a>
                        {{-- <a href="hajjpackage/{{...['id']}}" class="book btn-get-started scrollto">Details</a> --}}
                      </div>
                </div>
            @endif
            @endforeach
            
          </div>
  
          </div>  <!-- end of makkah colmn  -->
   
  
  
  
          
  
      <div class="col-xl px-4"><!-- start of madinah colmn  -->

        <div class="section-title pb-2 pt-2">
          <h3 class="bottom_border">
            <div class="airline-icon">
              <img src="{{asset('img/Icons/FTLPT-02.png')}}" style="float:right; "> 
              </div> 
            Madinah Hotels
          </h3>      
         
          </div>
  
          <div class="scrollable-x">
          @foreach ($hotels as $hotel)
          @if($hotel['location'] == 'Madinah')
          <div class="content col-xl-5" > 
            <h4 class="text-center border-bottom-thick">{{$hotel['hotel_name']}}</h4>
            <!--<div class="icon"><i class="bx bxl-dribbble"></i></div>-->
            <div class="image-container"> <img class="image-crop" src="{{asset($hotel['img'])}}"> </div> 
              <h4><a></a></h4>
              <div class="row">
                <div class="details"  data-aos="zoom-in" data-aos-delay="10">
                  
                  <div class="row">
                    <h5 class="col-md-3">Rate:</h5>
                    @for ($i = 1; $i <= $hotel['stars']; $i++)
                    <i class="col-1 bi-star-fill"></i>
                    @endfor 
                      
                    @php $remain = 5 - $hotel['stars']; @endphp

                    @for($i = 1; $i <= $remain; $i++)
                    <i class="col-1 bi-star"></i>
                    @endfor
                  </div>
                  <div class="row">
                    <i class="col-md-3 bi-geo-alt-fill"></i><p class="col-9">Madinah - Haram</p>
                  </div>
                  
                </div>
              </div>
                  <div class="book-container">
                    <a href="#" class="book btn-get-started scrollto">Details</a>
                  </div>
            </div>
        @endif
        @endforeach
        </div> 
      </div> <!-- end of madinah colmn  -->
  
    </div><!-- end of hotels row -->
  
    </div>
  
  
        </div>
      </section><!-- End hotels Section -->

    @endsection


    <!-- Begin of Travel Section -->
    @section('Travel')

    <section id="portfolio" class="services section-bg">
    <div class="row px-5" data-aos="fade-up" data-aos-delay="10">

      <div class="section-title mt-3">
        <h2><a href="">Travel Packages</a></h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

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
      </div>

    </div>
  </section>
 

<!-- End of Travel Section -->

    @endsection

<!-- @section('slide')
<section id="slideshow" class="d-flex align-items-center">
  <div class="container text-center" style="">
    
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/FTimage/1.png" class="d-block w-100 " alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/FTimage/2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/FTimage/3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
  </div>
</section>  


@endsection -->

    