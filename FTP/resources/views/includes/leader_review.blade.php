@php 

$url = URL::current();
$url = strstr($url,'hajj');
$url = preg_replace("/[^A-Za-z]/", '',$url);
// return dd($url);

$url2 = URL::current();
$url2= strstr($url2,'umrah');
$url2 = preg_replace("/[^A-Za-z]/", '',$url2);

$url1 = URL::current();
$url1 = strstr($url1,'profile');
$url1 = preg_replace("/[^A-Za-z]/", '',$url1);
// return dd($url1)

@endphp
<div>


@if($url == 'hajjpackage' || $url2 == 'umrahpackage' )

  <div class="table-details row"><!--beginning of group leader details-->
    <div class="col-xl-3">
      <div class="row">
      <i class="col-4 bi bi-person-fill mt-2" style="font-size: 30px"></i><div class="col-8"><h5 >Group leader</h5></div>
      </div>
    </div>

    
    <div class="specfic col-xl-3">
      @if($url == 'hajjpackage')
      <p>{{$hajjpackage['groupLeader']}}</p>

      @elseif($url2 == 'umrahpackage')
      <p>{{$umrahpackage['groupLeader']}}</p>
      @endif
    </div>

    <div class="col-xl-3">
      <h5>Package level</h5>
    </div>

    <div class="specfic col-xl-3">
      @if($url == 'hajjpackage')
        <p>{{$hajjpackage['packageName']}}</p>

      @elseif($url2 == 'umrahpackage')

        <p>{{$umrahpackage['packageName']}}</p>
      @endif
    </div>
  </div><!--Ending of group leader details-->

@endif



<div class="table-details row p-4"><!--beginning of group leader review-->
    <div class="col-xl-3">
      <div class="row">
      <i class="col-4 bi bi-chat-left-quote " style="font-size: 30px"></i><div class="col-8"><h5>Group leader review</h5></div>
      </div>


    </div>
     
     <div class="specfic col-xl-9 scrollable-y" @if($url1 == 'profile') style="height: 350px" @else  style="height: 250px" @endif >
       
      <livewire:comments :user_id="$user_id" :myprofile='$myprofile' :my_id='$my_id'/>

     </div>

     @if($url1 != 'profile')
     <br><p class="pt-4">

    @if($url == 'hajjpackage')
      
        <div class="col-12">
          @if(!auth()->user())
          <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="editbtn border-thick ">Login to give review</button>
          @else
          <a href="/profile/{{$hajjpackage['user_id']}}" class="editbtn border-thick">Give review</a>
          @endif
        </div>
    @elseif($url2 == 'umrahpackage')
    
      <div class="col-12">
        @if(!auth()->user())
        <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="editbtn border-thick ">Login to give review</button>
        @else
        <a href="/profile/{{$umrahpackage['user_id']}}" class="editbtn border-thick ">Give review</a>
        @endif
      </div>
    </p>
    @endif
    @endif

    <livewire:rating :hajjPage="$hajjPage" :umrahPage="$umrahPage" :myprofile='$myprofile' :my_id='$my_id' :user_id="$user_id"/>

   
    </div><!--ending of group leader review-->
    
    
   
    
  

  </div>{{-- ending of group leader review --}}

