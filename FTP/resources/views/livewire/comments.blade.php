<div>
    @php 
        use App\Models\HajjPackage;
        use App\Models\UmrahPackage;
    
    $cr = 0; 
   @endphp



    @if(Session::get('commented'))
    <div class="row alert alert-success" wire:poll.1500ms>
      {{Session::get('commented')}}


      <div id="spinner" class="show centering">
        <div class="spinner-border text-success"  role="status">
            <span class="sr-only"></span>
        </div>
      </div>
    </div>

    @endif

    @if(Session::get('deleted'))
    <div class="row alert alert-danger" wire:poll.1500ms>
      {{Session::get('deleted')}}

      <div id="spinner" class="show centering">
        <div class="spinner-border text-danger"  role="status">
            <span class="sr-only"></span>
        </div>
      </div>
    </div>
    @endif

    @if($myprofile == 'true')<!-- if page was my_profile not profile because users exist in profile{id}-->
   
    @foreach($reviews as $index=>$review)<!-- Here -->
    @if(auth()->user()->id == $review['user_id'])
      <div class="row mb-1 mx-3 bg-white">
        <i class="col-md-2 bi bi-person-circle centering mt-3" style="font-size: 40px"></i>
          <div class="col-md-10"> 
              <div class="row mt-2"> 
                  @php $cr++; @endphp
                  
                  
                    @foreach($review->users as $i=>$user)
                      @if($review['user_id'] == auth()->user()->id)
                          <a href="/profile/{{$user['id']}}"class="col"><h5 class="profileLink">{{$user['fstname']}} {{$user['lstname']}}</h5></a>
                      @endif
                    @endforeach

             

                  <div class="col-md-6 pt-2">
                      @for($i = 1 ; $review['rating'] >= $i; $i++)
                        <i class="col-md-1 bi bi-star-fill px-1"></i>
                      @endfor

                      @php $remain = 5 - $review['rating'] @endphp
                      @for($i = 1 ; $remain >= $i; $i++)
                        <i class="col-md-1 bi bi-star px-1"></i>
                      @endfor
                  </div>

                 @include('packages.includes.editIcon')   
              </div>  

              <div class="row pt-1 pb-3"> 
                <p>{{$review['comment']}}</p>
              </div> 
          </div>
        </div>
    @endif
    @endforeach<!-- Here -->
        
    @if($cr == 0)
    <h4 class="col-md-4 centering" style=" color: #6d6d6d;">There's no review currently</h4> 
    @endif
        


  @elseif($hajjPage == 'true' || $umrahPage == 'true')

      @php

        $userUmrah = strstr(URL::current(), 'umrah');
        $userUmrah = preg_replace('/[^0-9]/', '', $userUmrah);
        $userUmrah = UmrahPackage::find($userUmrah);

        $userHajj = strstr(URL::current(), 'hajj');
        $userHajj = preg_replace('/[^0-9]/', '', $userHajj);
        $userHajj = HajjPackage::find($userHajj);

      @endphp


  @if($url == 'hajjpackage')
  
  @foreach($reviews as $review)
      @if($userHajj['user_id'] == $review['user_id'])

    <div class="row mb-1 mx-3 bg-white">
      <i class="col-md-2 bi bi-person-circle centering mt-3" style="font-size: 40px"></i>
        <div class="col-md-10"> 
            <div class="row mt-2"> 
              
                @php $cr++; @endphp
                
                
                  @foreach($review->users as $i=>$user1)
                    @if($review['user_id'] == $userHajj['user_id'])
                    <a href="/profile{{$user1['id']}}"class="col"><h5 class="profileLink">{{$user1['fstname']}} {{$user1['lstname']}}</h5></a>
                    @endif
                  @endforeach

         

                <div class="col-md-6">
                    @for($i = 1 ; $review['rating'] >= $i; $i++)
                      <i class="col-md-1 bi bi-star-fill px-1"></i>
                    @endfor

                    @php $remain = 5 - $review['rating'] @endphp
                    @for($i = 1 ; $remain >= $i; $i++)
                      <i class="col-md-1 bi bi-star px-1"></i>
                    @endfor
                </div>
                @include('packages.includes.editIcon') 
            </div>  

            <div class="row pt-1 pb-3"> 
              <p>{{$review['comment']}}</p>
            </div> 
        </div>
      </div>
        @endif
        @endforeach

        @elseif($url == 'umrahpackage')
        @foreach($reviews as $review)
          @if($userUmrah['user_id'] == $review['user_id'])

        <div class="row mb-1 mx-3 bg-white">
          <i class="col-md-2 bi bi-person-circle centering mt-3" style="font-size: 40px"></i>
            <div class="col-md-10"> 
                <div class="row mt-2"> 
                  
                    @php $cr++; @endphp
                    
                    
                      @foreach($review->users as $i=>$user1)
                        @if($review['user_id'] == $userUmrah['user_id'])
                        <a href="/profile{{$user1['id']}}" class="col"><h5 class="profileLink">{{$user1['fstname']}} {{$user1['lstname']}}</h5></a>
                        @endif
                      @endforeach
    
             
    
                    <div class="col-md-6">
                        @for($i = 1 ; $review['rating'] >= $i; $i++)
                          <i class="col-md-1 bi bi-star-fill px-1"></i>
                        @endfor
    
                        @php $remain = 5 - $review['rating'] @endphp
                        @for($i = 1 ; $remain >= $i; $i++)
                          <i class="col-md-1 bi bi-star px-1"></i>
                        @endfor
                    </div>
                    @include('packages.includes.editIcon') 
                </div>  
    
                <div class="row pt-1 pb-3"> 
                  <p>{{$review['comment']}}</p>
                </div> 
            </div>
          </div>
          

        @endif
        @endforeach
        @endif
        
       
          
          @if($cr == 0)
          <h5 class="col-md-4 centering" style=" color: #6d6d6d;"> There's no review currently</h5> 
          @endif
  




    @else<!-- if page was profile not my_profile because users variable doesn't exist in profile{id}-->

    @foreach($reviews as $review)
    @if($user_id == $review['user_id'])
    <div class="row mb-1 mx-3 bg-white">
      <i class="col-md-2 bi bi-person-circle centering mt-3" style="font-size: 40px"></i>
        <div class="col-md-10"> 
            <div class="row mt-2"> 
              
                @php $cr++; @endphp
                
                
                  @foreach($review->users as $i=>$user2)
                    @if($review['user_id'] == $user_id )
                        <a href="/profile/{{$user2['id']}}" class="col"><h5 class="profileLink">{{$user2['fstname']}} {{$user2['lstname']}}</h5></a>
                    @endif

                  @endforeach

         

                <div class="col-md-6">
                    @for($i = 1 ; $review['rating'] >= $i; $i++)
                      <i class="col-md-1 bi bi-star-fill px-1"></i>
                    @endfor

                    @php $remain = 5 - $review['rating'] @endphp
                    @for($i = 1 ; $remain >= $i; $i++)
                      <i class="col-md-1 bi bi-star px-1"></i>
                    @endfor
                </div>
                @include('packages.includes.editIcon') 
            </div>  

            <div class="row pt-1 pb-3"> 
              <p>{{$review['comment']}}</p>
            </div> 
        </div>

      </div>
        @endif
  
        @endforeach
       
        
        @if($cr == 0)
        <h5 class="col-md-4 centering" style=" color: #6d6d6d;"> There's no review currently</h5> 
        @endif
     
      @endif

      
      
      
</div>
