<div class="row">
    <img class="image-crop" src="{{asset($hotel['img'])}}">
      <div class="multipliepic">
          <img  src="{{asset($hotel['img1'])}}">
          <img  src="{{asset($hotel['img2'])}} ">
          <img   src="{{asset($hotel['img3'])}}"> 
       </div>
       <p>{{$hotel['hotel_name']}}</p>
    <div class="row centering">
        @for ($i = 1; $i <= $hotel['stars']; $i++)
            <i class="col-1 bi bi-star-fill"></i>
        @endfor 
        @php 
        $remain = 5 - $hotel['stars']; 
        @endphp
        @for($i = 1; $i <= $remain; $i++)
            <i class="col-1 bi bi-star"></i>
        @endfor
    </div>
</div>