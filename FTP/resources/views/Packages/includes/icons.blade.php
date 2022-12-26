
    @php 
    $origin = ($package == 'arafat') ? strtolower($arafat['information']) : strtolower($mina['information']);
     $info = strstr($origin, 'tent');
     $icon = null;
     $pic = 'tent.png';
   
        if($info == ''){
        $info = strstr($origin, 'ac');
        $icon = 'bi bi-wind';
            if($info == ''){
            $info = strstr($origin, 'bathroom');
            $icon = null;
            $pic = 'bathroom.png';
                if($info == ''){
                $info = strstr($origin, 'rooms');
                $icon = 'bi bi-house';
                    if($info == ''){
                    $info = strstr($origin, 'beds');
                    $icon = null;
                    $pic = 'bedroom.png';
                    }
                }
            }
        }
    @endphp

<div class="col-md-3">
        @if($info != '' && $icon != null)
        <i class="{{$icon}}" style="font-size: 25px"></i>
        @elseif($icon == null)
        <img src="{{asset('img/Icons/'.$pic)}}" style="width:40px"><div class="pt-2"></div>
        @else
        <i class="bi bi-record2" style="font-size: 25px"></i>
        @endif
        @if($package == 'arafat') {{$arafat['information']}} @else {{$mina['information']}} @endif

</div>