@php 

$url = URL::current();
$url = strstr($url,'hajj');
$url = preg_replace("/[^A-Za-z]/", '',$url);
// return dd($url);

@endphp

<div class="table-details row"><!--beginning of group leader review-->
    <div class="col-xl-3">
      <div class="row">
      <i class="col-4 bi bi-chat-left-quote mt-4" style="font-size: 30px"></i><div class="col-8"><h5 >Group leader<br>review</h5></div>
      </div>
    </div>
     
     <div class="specfic col-xl-9">
      @if($url == 'hajjpackage')
      
      <br><p><a href="/profile/{{$hajjpackage['user_id']}}" class="black_href border-thick">
        Give review</a></p>
      
      @else

      <br><p><a href="/profile/{{$umrahpackage['user_id']}}" class="black_href border-thick">
        Give review</a></p>

      @endif
     </div>
     </div>{{-- ending of group leader review --}}