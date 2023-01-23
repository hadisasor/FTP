
@php
$images = [
  "",
 "img/FTimage/p02.jpg"
,"img/FTimage/p04.jpg"
,"img/FTimage/p05.jpg"
,"img/FTimage/p1.jpg"
,"img/FTimage/p06.jpg"
,"img/FTimage/p07.jpg"
];

$counter = 0;
@endphp

@for($i = 0 ; $i < count($images) ; $i++)

<!-- Modal -->
<div class="modal fade" id="exampleModal_{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title {{$counter}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="{{$images[$counter]}}" alt="" >
      
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@php $counter++ @endphp

@endfor