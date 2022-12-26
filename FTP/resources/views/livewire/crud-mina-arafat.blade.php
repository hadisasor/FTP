<div wire:poll.10>
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
    
    @if($col == 'mina')
    @foreach($hajjpackage->minas as $i=>$mina)
                <div class="row"> 
                    <div class="col-md-10 mt-2 pb-2">

                        <div class="form-floating">
                            <input name="minaDetails[]" type="text" class="form-control" 
                            id="floatingInput" placeholder="Mina details" value="{{$mina['information']}}">
                            <label for="floatingInput">Mina details</label>
                        </div>
                    </div>
                    <div class="col-1">
                        <button type="button"  href="javascript:void(0)" class="btn deletebtn" wire:click.prevent="minaDelete({{$mina['id']}})"> X </button>
                    </div>
                   
                </div>
    @endforeach
    @endif

    @if($col == 'arafat')
    @foreach($hajjpackage->arafats as $i=>$arafat)
                <div class="row"> 
                    <div class="col-md-10 mt-2 pb-2">

                        <div class="form-floating">
                            <input name="arafatDetails[]" type="text" class="form-control" 
                            id="floatingInput" placeholder="Arafat details" value="{{$arafat['information']}}">
                            <label for="floatingInput">Arafat details</label>
                        </div>
                    </div>
                    <div class="col-1">
                        <button type="button"  href="javascript:void(0)" class="btn deletebtn" wire:click.prevent="arafatDelete({{$arafat['id']}})"> X </button>
                    </div>
                   
                </div>
    @endforeach
    @endif

</div>
