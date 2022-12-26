<div>
    @if(Session::get('detail'))
    <div class="row alert alert-danger" wire:poll.1500ms>
    {{Session::get('detail')}}
        <div id="spinner" class="show centering">
            <div class="spinner-border text-danger"  role="status">
                <span class="sr-only"></span>
            </div>
        </div>
    </div>
    @endif

   
@if($webPath === 'umrahpackages')

    @foreach($umrahpackage->details as $i=>$detail)
        <div class="row">
            <div class="col-11 pb-2">
                <div class="form-floating">
                <textarea name="packageDetails[]" type="text" class="form-control"
                 id="floatingInput" style="height:3cm" placeholder="Package details">{{$detail['information']}}</textarea>
                <label for="floatingInput">Step detail</label>
                </div>
            </div>
            
            <div class="col-1"> 
                <button type="button"  href="javascript:void(0)" wire:click.prefetch='packageDelete({{$detail['id']}})'
                class="btn deletebtn"> X </button>
                
            </div>
        </div>
    @endforeach
 
 @endif
    
@if($webPath == 'hajjpackages')

    @foreach($hajjpackage->details as $i=>$detail)
        <div class="row">
            <div class="col-11 pb-2">
                <div class="form-floating">
                <textarea name="packageDetails[]" type="text" class="form-control"
                 id="floatingInput" style="height:3cm" placeholder="Package details">{{$detail['information']}}</textarea>
                <label for="floatingInput">Step detail</label>
            </div>
            </div>
            
            <div class="col-1">
                
                <button type="button"  href="javascript:void(0)" wire:click.prefetch='packageDelete({{$detail['id']}})'
                class="btn deletebtn"> X </button>
                
            </div>
        </div>
    @endforeach
@endif


</div>
