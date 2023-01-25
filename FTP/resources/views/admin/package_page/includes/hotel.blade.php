@php 
$url = URL::current();
$url = strstr($url,'hajj');
$url =preg_replace('/[^a-zA-Z\']/', "", $url );
//  return dd($url);

$url1 = URL::current();
$url1 = strstr($url1,'umrah');
$url1 =preg_replace('/[^a-zA-Z\']/', "", $url1 );


$url2 = URL::current();
$url2 = strstr($url2,'packages');
$url2 =preg_replace('/[^a-zA-Z\']/', "", $url2 );
// return dd($url2)


@endphp 




<section class="border p-3 mb-3 mt-3 px-4">


{{------------------------------------------- if page is edit package -------------------------------------------}}

@if($url2 == 'packages')

<div class="row">

        
        <div class="col-2">
            <input type="radio" class="form-check-input" id="existed" name="hotels" checked>
            <label for="existed">Existed</label>
        </div>

</div>


 @if ( $url == 'hajjpackages')
<div id="existed-inputs">
    <div class="row pb-3" >
        <div class="col-6">
            <div class="form-floating mb-3">
                <select type="text" class="form-select" id="makkaHotel"
                name="makkaHotel" value="{{old('makkaHotel')}}">
                <option>select hotel</option>
                @foreach ($hajjpackage->hotels as $hotel)
                @if($hotel['location'] == 'Makkah')
                    <option value="{{$hotel['id']}}" selected>{{$hotel['hotel_name']}}</option>

                    @foreach($hotels as $hotel1)
                    @if($hotel1['location'] == 'Makkah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                    <option value="{{$hotel1['id']}}"selected>{{$hotel1['hotel_name']}}</option>
                    @endif
                    @endforeach


                @endif
                @endforeach
                </select>
                <label for="makkaHotel">Makkah hotel @error('makkaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           
            </div>
            
            <div class="row">
                <center>
                @foreach($hajjpackage->hotels as $hotel)
                @if($hotel['location'] == 'Makkah')
                <img class="col-9 centering"  src="{{asset($hotel['img'])}}">
                </center>
            </div>
            
              <div class="centering">
                <center>
                    <img class="col-3 img"  id="img1-{{$hotel['id']}}"  src="{{asset($hotel['img1'])}}">
                    <img class="col-3 img"  id="img2-{{$hotel['id']}}"  src="{{asset($hotel['img2'])}} ">
                    <img class="col-3 img"  id="img3-{{$hotel['id']}}"  src="{{asset($hotel['img3'])}}"> 
                @endif
                @endforeach
                </center>
            </div>
          
              
    
        </div>
       
        <div class="col-6">
            <div class="form-floating mb-3">
                <select type="text" class="form-select" id="madinaHotel"
                name="madinaHotel"value="{{old('madinaHotel')}}">
                <option value="">select hotel</option>
                @foreach ($hajjpackage->hotels as $hotel)
                @if($hotel['location'] == 'Madinah')
                    <option value="{{$hotel['id']}}"selected>{{$hotel['hotel_name']}}</option>

                    @foreach($hotels as $hotel1)
                        @if($hotel1['location'] == 'Madinah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                        <option value="{{$hotel1['id']}}"selected>{{$hotel1['hotel_name']}}</option>
                        @endif
                    @endforeach

                @endif
                @endforeach

                

                </select>
                <label for="madinaHotel">Madinah hotel @error('madinaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           
    
           
            </div>
            
            <div class="row">
                <center>
                    @foreach($hajjpackage->hotels as $hotel)

                    @if($hotel['location'] == 'Madinah')
                    <img class="col-9 centering"  src="{{asset($hotel['img'])}}">
                    </center>
                </div>
                
                  <div class="centering">
                    <center>
                        <img class="col-3 img"  id="img1-{{$hotel['id']}}"  src="{{asset($hotel['img1'])}}">
                        <img class="col-3 img"  id="img2-{{$hotel['id']}}"  src="{{asset($hotel['img2'])}} ">
                        <img class="col-3 img"  id="img3-{{$hotel['id']}}"  src="{{asset($hotel['img3'])}}"> 
                    @endif
                    @endforeach
                </center>
            </div>
    
    
        </div>
        
    </div>
 </div>
@endif

@if($url1 == 'umrahpackages' ) 
<div id="existed-inputs">
    <div class="row pb-3" >
        <div class="col-6">
            <div class="form-floating mb-3">

                  
                <select type="text" class="form-select" id="makkaHotel"
                name="makkaHotel" value="">

                <option value="">select hotel</option>
                @foreach ($umrahpackage->hotels as $hotel)
                @if($hotel['location'] == 'Makkah')
                    <option value="{{$hotel['id']}}"selected>{{$hotel['hotel_name']}}</option>

                    @foreach($hotels as $hotel1)
                        @if($hotel1['location'] == 'Makkah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                        <option value="{{$hotel1['id']}}"selected>{{$hotel1['hotel_name']}}</option>
                        @endif
                    @endforeach

                @endif
                @endforeach

                </select>
                <label for="makkaHotel">Makkah hotel @error('makkaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           
            </div>
            
            <div class="row">
                <center>
                @foreach($umrahpackage->hotels as $hotel)
                @if($hotel['location'] == 'Makkah')
                <img class="col-9 centering"  src="{{asset($hotel['img'])}}">
                </center>
            </div>
            
              <div class="centering">
                <center>
                  <img class="col-3 img"  id="img1-{{$hotel['id']}}"  src="{{asset($hotel['img1'])}}">
                  <img class="col-3 img"  id="img2-{{$hotel['id']}}"  src="{{asset($hotel['img2'])}} ">
                  <img class="col-3 img"  id="img3-{{$hotel['id']}}"  src="{{asset($hotel['img3'])}}"> 
                @endif
                @endforeach
                </center>
            </div>
          
              
    
        </div>
       
        <div class="col-6">
            <div class="form-floating mb-3">

                  
                <select type="text" class="form-select" id="madinaHotel"
                name="madinaHotel" value="">
                

                <option value="">select hotel</option>
                @foreach ($umrahpackage->hotels as $hotel)
                @if($hotel['location'] == 'Madinah')
                    <option value="{{$hotel['id']}}"selected>{{$hotel['hotel_name']}}</option>

                    @foreach($hotels as $hotel1)
                        @if($hotel1['location'] == 'Madinah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                        <option value="{{$hotel1['id']}}"selected>{{$hotel1['hotel_name']}}</option>
                        @endif
                    @endforeach

                @endif
                @endforeach
                </select>
                <label for="madinaHotel">Madinah hotel @error('madinaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           
    
           
            </div>
            
            <div class="row">
                <center>
                    @foreach($umrahpackage->hotels as $hotel)
                    @if($hotel['location'] == 'Madinah')
                    <img class="col-9 centering"  src="{{asset($hotel['img'])}}">
                    </center>
                </div>
                
                  <div class="centering">
                    <center>
                      <img class="col-3 img"  id="img1-{{$hotel['id']}}" src="{{asset($hotel['img1'])}}">
                      <img class="col-3 img"  id="img2-{{$hotel['id']}}" src="{{asset($hotel['img2'])}} ">
                      <img class="col-3 img"  id="img3-{{$hotel['id']}}" src="{{asset($hotel['img3'])}}"> 
                    @endif
                    @endforeach
                </center>
            </div>
    
    
        </div>
        
    </div>
    </div>
@endif 


{{-- ------------------------ if page is create package ------------------------- --}}

@elseif ($url == 'hajj' || $url1 == 'umrah')


<div class="row">

        <div class="col-2">
            <input type="radio" class="form-check-input" id="existed" name="hotels" checked>
            <label for="existed">Existed</label>
        </div>

</div>






<div id="existed-inputs">
<div class="row pb-3" >
    <div class="col-6">
        <div class="form-floating mb-3">
            <select type="text" class="form-select" id="makkaHotel"
            name="makkaHotel" value="{{old('makkaHotel')}}">
            <option value="">select hotel</option>
            @foreach ($hotels as $hotel)
            @if($hotel['location'] == 'Makkah')
                <option value="{{$hotel['id']}}">{{$hotel['hotel_name']}}</option>
            @endif
            @endforeach
            </select>
            <label for="makkaHotel">Makkah hotel @error('makkaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           
        </div>

    <div id="imgShowCase">
        <div class="row">
            <center>
            @foreach($hotels as $hotel)
            @if($hotel['location'] == 'Makkah')
            <img class="col-9 centering img" id="{{$hotel['id']}}"  src="{{asset($hotel['img'])}}" style="display: none">
            </center>
        </div>
        
          <div class="centering">
            <center>
              <img class="col-3 img"  id="img1-{{$hotel['id']}}" src="{{asset($hotel['img1'])}}" style="display: none">
              <img class="col-3 img"  id="img2-{{$hotel['id']}}" src="{{asset($hotel['img2'])}} " style="display: none">
              <img class="col-3 img"  id="img3-{{$hotel['id']}}" src="{{asset($hotel['img3'])}}" style="display: none"> 
            @endif
            @endforeach
            </center>
        </div>
    </div>
      
          

    </div>
   
    <div class="col-6">
        <div class="form-floating mb-3">
            <select type="text" class="form-select" id="madinaHotel"
            name="madinaHotel"value="{{old('madinaHotel')}}">
            <option value="">select hotel</option>
            @foreach ($hotels as $hotel)
            @if($hotel['location'] == 'Madinah')
                <option value="{{$hotel['id']}}">{{$hotel['hotel_name']}}</option>
            @endif
            @endforeach
            </select>
            <label for="madinaHotel">Madinah hotel @error('madinaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           

       
        </div>
        
        <div class="row">
            <center>
                @foreach($hotels as $hotel)
                @if($hotel['location'] == 'Madinah')
                <img class="col-9 centering img"  id="{{$hotel['id']}}" src="{{asset($hotel['img'])}}" style="display: none">
                </center>
            </div>
            
              <div class="centering">
                <center>
                  <img class="col-3 img"  id="img1-{{$hotel['id']}}" src="{{asset($hotel['img1'])}}" style="display: none">
                  <img class="col-3 img"  id="img2-{{$hotel['id']}}" src="{{asset($hotel['img2'])}} " style="display: none">
                  <img class="col-3 img"  id="img3-{{$hotel['id']}}" src="{{asset($hotel['img3'])}}" style="display: none"> 
                @endif
                @endforeach
            </center>
        </div>


    </div>
    
</div>
</div>
@endif


</section>