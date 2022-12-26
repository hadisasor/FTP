<div>


    <section class="border p-3 mb-3 mt-3 px-4">
        {{------------------------------------------- if page is edit package -------------------------------------------}}
        
        <div class="row">
        
            <div class="row pb-2">
                <div class="col-2">
                    <input type="radio" class="form-check-input" id="custom" name="hotels">
                    <label for="custom">Custom</label>
                </div>
                <div class="col-2">
                    <input type="radio" class="form-check-input" id="existed" name="hotels" checked>
                    <label for="existed">Existed</label>
                </div>
            </div>
        
        </div>
        
        <div id="custom-inputs" style="display: none">
        <div class="row pb-3">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput"
                    name="makkaHotel" value="{{old('makkaHotel')}}">
                    <label for="floatingInput">Makkah hotel @error('makkaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           
                </div>
        
                <div class="row">
                    <center>
                    <img class="col-9 centering" src="{{asset('img/Ka3bah.jpg')}}">
                    </center>
                </div>
                
                  <div class="centering">
                    <center>
                      <img class="col-3" src="{{asset('img/Ka3bah.jpg')}}">
                      <img class="col-3"  src="{{asset('img/Ka3bah.jpg')}} ">
                      <img class="col-3"  src="{{asset('img/Ka3bah.jpg')}}"> 
                    </center>
                </div>
        
            </div>
        
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput"
                    name="madinaHotel"value="{{old('madinaHotel')}}">
                    <label for="floatingInput">Madinah hotel @error('madinaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           
                </div>
        
                <div class="row">
                    <center>
                    <img class="col-9 centering" src="{{asset('img/Ka3bah.jpg')}}">
                    </center>
                </div>
                
                  <div class="centering">
                    <center>
                      <img class="col-3" src="{{asset('img/Ka3bah.jpg')}}">
                      <img class="col-3"  src="{{asset('img/Ka3bah.jpg')}} ">
                      <img class="col-3"  src="{{asset('img/Ka3bah.jpg')}}"> 
                    </center>
                </div>
        
            </div>
        
        </div>
        </div>
        
        
        
    {{--  --}}
        <div id="existed-inputs">
            <div class="row pb-3" >
                <div class="col-6">
                    <div class="form-floating mb-3">
        
                          
                        <select type="text" class="form-select" wirel:model="makkaHotel" id="makkaHotel"
                        name="makkaHotel" >
        
                        <option value="0">select hotel</option>
                        @switch($webPath)
                        @case('umrahpackages')
                                @foreach ($umrahpackage->hotels as $hotel)
                                @if($hotel['location'] == 'Makkah')
                                    <option value="{{$hotel['id']}}"selected>{{$hotel['hotel_name']}}</option>
                                    @foreach($hotels as $hotel1)
                                        @if($hotel1['location'] == 'Makkah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                                        <option value="{{$hotel1['id']}}">{{$hotel1['hotel_name']}}</option>
                                        @endif
                                    @endforeach
                                @endif
                                @endforeach
                        @break
                        @case('hajjpackages')
                                @foreach ($hajjpackage->hotels as $hotel)
                                @if($hotel['location'] == 'Makkah')
                                    <option value="{{$hotel['id']}}" selected>{{$hotel['hotel_name']}}</option>
                                    @foreach($hotels as $hotel1)
                                    @if($hotel1['location'] == 'Makkah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                                    <option value="{{$hotel1['id']}}">{{$hotel1['hotel_name']}}</option>
                                    @endif
                                    @endforeach
                                @endif
                                @endforeach
                        @break
                        @case('hajj'||'umrah')
                            @foreach ($hotels as $hotel)
                            @if($hotel['location'] == 'Makkah')
                                <option value="{{$hotel['id']}}">{{$hotel['hotel_name']}}</option>
                            @endif
                            @endforeach
                        @break
                        @default
                        @endswitch
                        </select>
                        <label for="makkaHotel">Makkah hotel @error('makkaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           
                    </div>
                    
                    <div class="row">
                    @switch($webPath)
                        @case('umrahpackages')
                        @foreach($umrahpackage->hotels as $hotel)
                        @if($hotel['location'] == 'Makkah')
                        <img class="col-9 centering image-crop"  id="{{$hotel['id']}}" src="{{asset($hotel['img'])}}">
                        </center>
                    </div>
                    
                      <div class="centering">
                        <center>
                          <img class="col-3 img"  id="img1-{{$hotel['id']}}"  src="{{asset($hotel['img1'])}}">
                          <img class="col-3 img"  id="img2-{{$hotel['id']}}"  src="{{asset($hotel['img2'])}} ">
                          <img class="col-3 img"  id="img3-{{$hotel['id']}}"  src="{{asset($hotel['img3'])}}"> 
                          @endif
                          @endforeach
                        @break

                        @case('hajjpackages')
                        @foreach($hajjpackage->hotels as $hotel)
                        @if($hotel['location'] == 'Makkah')
                        <img class="col-9 centering image-crop"  id="{{$hotel['id']}}" src="{{asset($hotel['img'])}}">
                        </center>
                    </div>
                    
                      <div class="centering">
                        <center>
                          <img class="col-3 img"  id="img1-{{$hotel['id']}}"  src="{{asset($hotel['img1'])}}">
                          <img class="col-3 img"  id="img2-{{$hotel['id']}}"  src="{{asset($hotel['img2'])}} ">
                          <img class="col-3 img"  id="img3-{{$hotel['id']}}"  src="{{asset($hotel['img3'])}}"> 
                          @endif
                          @endforeach
                        @break

                        @case('hajj'||'umrah')
                                @foreach($hotels as $hotel)
                                @if($hotel['location'] == 'Makkah')
                                <img class="col-9 centering img image-crop"  id="{{$hotel['id']}}" src="{{asset($hotel['img'])}}" style="display: none">
                                </center>
                            </div>
                            
                            <div class="centering">
                                <center>
                                <img class="col-3 img"  id="img1-{{$hotel['id']}}" src="{{asset($hotel['img1'])}}" style="display: none">
                                <img class="col-3 img"  id="img2-{{$hotel['id']}}" src="{{asset($hotel['img2'])}} " style="display: none">
                                <img class="col-3 img"  id="img3-{{$hotel['id']}}" src="{{asset($hotel['img3'])}}" style="display: none"> 
                                @endif
                                @endforeach
                        @break
                    @default
                    @endswitch
                        <center>
                        
                    @switch($webPath)
                    @case('umrahpackages'||'hajjpackage')
                    
                        @foreach($hotels as $hotel)
                            @foreach($hotels as $hotel1)
                                @if($hotel1['location'] == 'Makkah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                                <img class="col-9 centering image-crop"  id="{{$hotel1['id']}}" src="{{asset($hotel1['img'])}}" style="display: none">
                                <img class="col-3 img"  id="img1-{{$hotel1['id']}}"  src="{{asset($hotel1['img1'])}}" style="display: none">
                                <img class="col-3 img"  id="img2-{{$hotel1['id']}}"  src="{{asset($hotel1['img2'])}} " style="display: none">
                                <img class="col-3 img"  id="img3-{{$hotel1['id']}}"  src="{{asset($hotel1['img3'])}}" style="display: none"> 
                                @endif
                            @endforeach
                        @endforeach
                    
                    @break
                    @default
                    @endswitch
                        
      
                        </center>
                    </div>
                  
                      
            
                </div>
               
                <div class="col-6">
                    <div class="form-floating mb-3">
        
                          
                        <select type="text" class="form-select" wirel:model="madinaHotel" id="madinaHotel"
                        name="madinaHotel" >
                        
                        <option value="0">select hotel</option>
                        @switch($webPath)
                        @case('umrahpackages')
                                @foreach ($umrahpackage->hotels as $hotel)
                                @if($hotel['location'] == 'Madinah')
                                    <option value="{{$hotel['id']}}"selected>{{$hotel['hotel_name']}}</option>
                                    @foreach($hotels as $hotel1)
                                        @if($hotel1['location'] == 'Madinah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                                        <option value="{{$hotel1['id']}}">{{$hotel1['hotel_name']}}</option>
                                        @endif
                                    @endforeach
                                @endif
                                @endforeach
                        @break
                        @case('hajjpackages')
                                @foreach ($hajjpackage->hotels as $hotel)
                                @if($hotel['location'] == 'Madinah')
                                    <option value="{{$hotel['id']}}" selected>{{$hotel['hotel_name']}}</option>
                
                                    @foreach($hotels as $hotel1)
                                    @if($hotel1['location'] == 'Madinah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                                    <option value="{{$hotel1['id']}}">{{$hotel1['hotel_name']}}</option>
                                    @endif
                                    @endforeach
                                @endif
                                @endforeach
                        @break
                        @case('hajj'||'umrah')
                            @foreach ($hotels as $hotel)
                            @if($hotel['location'] == 'Madinah')
                                <option value="{{$hotel['id']}}">{{$hotel['hotel_name']}}</option>
                            @endif
                            @endforeach
                            @break
                        @default
                        @endswitch
                        </select>
                        <label for="madinaHotel">Madinah hotel @error('madinaHotel') <span style="color:red">{{'required'}}@enderror</span></label>           
            
                   
                    </div>
                    
                    <div class="row">
                        <center>
                            @switch($webPath)
                            @case('umrahpackages')
                            @foreach($umrahpackage->hotels as $hotel)
                            @if($hotel['location'] == 'Madinah')
                            <img class="col-9 centering image-crop"  id="{{$hotel['id']}}" src="{{asset($hotel['img'])}}">
                            </center>
                        </div>
                        
                          <div class="centering">
                            <center>
                              <img class="col-3 img"  id="img1-{{$hotel['id']}}"  src="{{asset($hotel['img1'])}}">
                              <img class="col-3 img"  id="img2-{{$hotel['id']}}"  src="{{asset($hotel['img2'])}} ">
                              <img class="col-3 img"  id="img3-{{$hotel['id']}}"  src="{{asset($hotel['img3'])}}"> 
                              @endif
                              @endforeach
                            @break
    
                            @case('hajjpackages')
                            @foreach($hajjpackage->hotels as $hotel)
                            @if($hotel['location'] == 'Madinah')
                            <img class="col-9 centering image-crop"  id="{{$hotel['id']}}" src="{{asset($hotel['img'])}}">
                            </center>
                        </div>
                        
                          <div class="centering">
                            <center>
                              <img class="col-3 img"  id="img1-{{$hotel['id']}}"  src="{{asset($hotel['img1'])}}">
                              <img class="col-3 img"  id="img2-{{$hotel['id']}}"  src="{{asset($hotel['img2'])}} ">
                              <img class="col-3 img"  id="img3-{{$hotel['id']}}"  src="{{asset($hotel['img3'])}}"> 
                              @endif
                              @endforeach
                            @break
    
                            @case('hajj'||'umrah')
                                    @foreach($hotels as $hotel)
                                    @if($hotel['location'] == 'Madinah')
                                    <img class="col-9 centering img image-crop"  id="{{$hotel['id']}}" src="{{asset($hotel['img'])}}" style="display: none">
                                    </center>
                                </div>
                                
                                <div class="centering">
                                    <center>
                                    <img class="col-3 img"  id="img1-{{$hotel['id']}}" src="{{asset($hotel['img1'])}}" style="display: none">
                                    <img class="col-3 img"  id="img2-{{$hotel['id']}}" src="{{asset($hotel['img2'])}} " style="display: none">
                                    <img class="col-3 img"  id="img3-{{$hotel['id']}}" src="{{asset($hotel['img3'])}}" style="display: none"> 
                                    @endif
                                    @endforeach
                            @break
                        @default
                        @endswitch

                        @switch($webPath)
                        @case('umrahpackages'||'hajjpackage')
                        
                            @foreach($hotels as $hotel)
                                @foreach($hotels as $hotel1)
                                    @if($hotel1['location'] == 'Madinah' && $hotel1['hotel_name'] != $hotel['hotel_name'])
                                    <img class="col-9 centering image-crop"  id="{{$hotel1['id']}}" src="{{asset($hotel1['img'])}}" style="display: none">
                                    <img class="col-3 img"  id="img1-{{$hotel1['id']}}"  src="{{asset($hotel1['img1'])}}" style="display: none">
                                    <img class="col-3 img"  id="img2-{{$hotel1['id']}}"  src="{{asset($hotel1['img2'])}} " style="display: none">
                                    <img class="col-3 img"  id="img3-{{$hotel1['id']}}"  src="{{asset($hotel1['img3'])}}" style="display: none"> 
                                    @endif
                                @endforeach
                            @endforeach
                        
                        @break
                        @default
                        @endswitch

                        </center>
                    </div>
            
            
                </div>
                
            </div>
        </div>

    </div>
