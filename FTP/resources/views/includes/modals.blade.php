
@php
$images = [
  "",
 "img/FTimage/F1.jpg"
,"img/FTimage/F2.jpg"
,"img/FTimage/F3.jpg"
,"img/FTimage/p1.jpg"
,"img/FTimage/F4.jpg"
,"img/FTimage/F5.jpg"
,"img/FTimage/F6.jpg"
,"img/FTimage/F7.jpg"
,"img/FTimage/F8.jpg"
];

$counter = 0;
@endphp

@for($i = 0 ; $i < count($images) ; $i++)

<!-- Modal -->
<div class="modal fade" id="exampleModal_{{$i}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Photo {{$counter}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="{{$images[$counter]}}" alt="" >
      
      
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-target="pbox">Next</button> -->
      </div>
    </div>
  </div>
</div>
@php $counter++ @endphp

@endfor