<div>
   
@if($hajjPage == null && $umrahPage == null)

<div  class="row pt-4"><!------ Rating leader input beginning ---------->
      @if(auth()->user()) 
      <div class="col-xl-3 center1 " style="font-size: 20px;">
        <h5 class="row center1"> Rate leader</h5>
        <div class="row centering">
        @csrf
        @if(auth()->user()->id != $user_id)   
          @for($i = 1; 5 >= $i; $i++)
          <input  type="radio" wire:model.defer="stars" class="btn-check" value="{{$i}}" id="star_{{$i}}" autocomplete="off">
          <label class="btn col-1 bi bi-star centering" id="st{{$i}}" for="star_{{$i}}"></label>
          @endfor
          <div class="row"> @error('stars') <span class="error" style="color: red; font-size:15px">{{ $message }}</span> @enderror</div>
        @endif

        </div>
      </div>
      
        <div class="col-xl-9 mt-2">
          <div class="row mb-3" >
            <i class="col-md-1 bi bi-person-circle" style="font-size:35px;"></i> 
            <h5 class="col-md-4 pt-2">{{auth()->user()->fstname}} {{auth()->user()->lstname}}</h5> 
          </div>
          
            <div class="form-floating pb-2 center2" style="display:flexbox;">
              <textarea  type="text" wire:model.defer="comment" class="form-control p-4" id="floatingInput"
               placeholder="Give your review on this leader" style="height:6rem; border-radius:10px"></textarea>
              <label class="pl-3" style="color:gray" for="floatingInput">Give your review on this leader @error('Th_airline') <span style="color:red">{{'*'}}@enderror</span></label>            
              @error('comment') <span class="error" style="color:red">{{ $message }}</span> @enderror
              <button 
                    @if($myprofile == 'true')
                    wire:click="comment({{auth()->user()->id}})"
                    @elseif($myprofile == null)
                    wire:click="comment({{$user_id}})" 
                    @endif
              type="submit" class=" editbtn centering col-md-2 mt-4">Post review</button>
            </div>
          </div>  
          @endif
      </div><!------ Rating leader input ending ---------->
      @endif

</div>
