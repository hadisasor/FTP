{{-- if hajj path is not null then show me Hajj content --}}


@if($webPath == 'hajjpackages' || $webPath == 'hajj')
<div class="row mb-3 border p-3">
    <div class="col-md-6">
        <h3 class=" text-center mb-3">Arafat details</h3>     
        <div class="row"> 
                <a id="addArafat" class="btn editbtn col-10 mt-3 pb-2 px-3"> add</a>
        </div>      
        <div id="addedArafat" class="mt-3">
        </div>
  
        @if($webPath == 'hajjpackages')    
            <span class="row">
                <div class="col-4 border_bottom"></div>
                <div class="col centering text-center" style="width:px;">from database</div>
                <div class="col-4 border_bottom "></div>
            </span>
            <div class="pt-3"> 
                @php $col= 'arafat'; @endphp
                <livewire:crud-mina-arafat 
                :webPath='$webPath' 
                :hajjpackage='$hajjpackage' 
                :col='$col'
                />
            </div>
        @endif
    </div>

    <div class="col-md-6">
        <h3 class=" text-center mb-3">Mina details</h3>
            <div class="row"> 
                <a id="addMina" class="btn editbtn col-10 mt-3 pb-2 px-3"> add</a>
            </div>
        <div id="addedMina" class="mt-3">
        </div>
  
        @if($webPath == 'hajjpackages')
            <span class="row">
                <div class="col-4 border_bottom"></div>
                <div class="col centering text-center" style="width:px;">from database</div>
                <div class="col-4 border_bottom "></div>
            </span>
                <div class="pt-3">
                    @php $col= 'mina'; @endphp
                    <livewire:crud-mina-arafat 
                    :webPath='$webPath' 
                    :hajjpackage='$hajjpackage' 
                    :col='$col'
                    />
                </div>      
            @endif
    </div>
</div>

@endif

{{-- ----------------------------------------------Transportation Details ----------------------------------------------------- --}}



<div class="row mb-3 border p-3">
    <h3 class=" text-center mb-3">Transportation details</h3>
    <div class="col-md-5 pb-2">
        <div class="form-floating">
            <select name="car[]" type="text" class="form-select" id="floatingInput" >
                <option>Van</option>
                <option>Train</option>
                <option>Bus</option>
            </select>
            <label for="floatingInput">Vehicale</label>
        </div>
    </div>

    <div class="col-md-6 pb-2">
        <div class="form-floating">
            <select name="Destination[]" type="text" class="form-select" id="floatingInput" >
                <option>within Makkah</option>
                <option>within Maddinah</option>
                <option>Makkah->Madinah</option>
                <option>Maddinah->Makkah</option>
            </select>
            <label for="floatingInput">destination</label>
        </div>
    </div>

    <div class="col-1 mt-2">
        <a id="addTrans" class="btn editbtn"> add</a>
    </div>

    <div id="addedTrans"> 
    </div>
</div>

    <div class="pt-4"> 
            @if($webPath == 'umrahpackage')
            <livewire:transportation
                :webPath='$webPath' 
                :umrahpackage='$umrahpackage'
            />
            @elseif($webPath == 'hajjpackage')
            <livewire:transportation
                :webPath='$webPath' 
                :hajjpackage='$hajjpackage'
            />
            @endif
    </div>



{{-- ----------------------------------------------Package Detail----------------------------------------------------- --}}


<div class="row mb-3 border p-3">
    <h3 class=" text-center mb-3">Package details</h3>
    <div class="row">  
                <a id="addStep" class="btn editbtn col-11 mt-2"> add</a>
    </div>
    <div id="addedStep" class="mt-3">
    </div>

    @if($webPath == 'umrahpackages')
    <span class="row">
        <div class="col-5 border_bottom"></div>
        <div class="col centering text-center" style="width:px;">from database</div>
        <div class="col-5 border_bottom "></div>
    </span>
        <div class="pt-4">   
            <livewire:crud-package-details 
            :webPath='$webPath' 
            :umrahpackage='$umrahpackage' />
        </div>
        
        @elseif($webPath == 'hajjpackages')
        <span class="row">
            <div class="col-5 border_bottom"></div>
                <div class="col centering text-center" style="width:px;">from database</div>
            <div class="col-5 border_bottom "></div>
        </span>
        <div class="pt-4"> 
            <livewire:crud-package-details 
            :webPath='$webPath' 
            :hajjpackage='$hajjpackage' />
        </div>
    @endif
</div>

