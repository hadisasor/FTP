@foreach($review->users as $i=>$user1)
@if( auth()->user() && auth()->user()->id != $user1['id'])

<div class="col-md-2 dropdown">
<button class="btn"  data-bs-toggle="dropdown" aria-expanded="false" style="padding:0px 5px 0px 5px;">
<i class="bi bi-pencil-square"></i>
<ul class="dropdown-menu" >
<a class="dropdown-item" href="#">Report <i class="bi bi-exclamation-diamond"></i></a>
</ul>
</div> 

@elseif(!auth()->user())

@elseif(auth()->user()->id == $user1['id'])

<div class="col-md-2 dropdown">
<button class="btn"  data-bs-toggle="dropdown" aria-expanded="false" style="padding:0px 5px 0px 5px;">
<i class="bi bi-pencil-square"></i>
<ul class="dropdown-menu" >
  <a class="dropdown-item" href="/">Edit <i class="bi bi-pen"></i></a>
<a class="dropdown-item" wire:click="deleteComment({{$review['id']}})">Delete <i class="bi bi-trash"></i></a>
</ul>
</div> 

@endif
@endforeach

{{-- 
 href="/deleteComment/{{$review['id']}}" --}}