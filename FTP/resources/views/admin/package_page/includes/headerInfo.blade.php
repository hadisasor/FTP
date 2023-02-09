@php 
$hajjBookings =0;
$umrahBookings=0;
$travelBookings=0;
if($webPath == 'hajjpackages' || $webPath == 'umrahpackages'){
    foreach ($bookings as $booking) {
        if($webPath == 'hajjpackages' && $booking['hajj_package_id'] != $hajjpackage['id']){
        $hajjBookings++;
        }

        if($webPath == 'umrahpackages' && $booking['umrah_package_id'] == $umrahpackage['id']){
            $umrahBookings++;
        }
        if($webPath == 'travelpackages' && $booking['travel_package_id'] == $travelpackage['id']){
            $travelBookings++;
        }
    }
}
@endphp

<section class="border p-3">
    <h5>About group</h5>
    <div class="row">
        <div class="col-xl-4">
               <div class="form-floating mb-3">
                   <input type="text" class="form-control" id="groupLeader"
                      name="groupLeader" placeholder="Group leader"
                        @switch($webPath) 
                            @case('hajjpackages')
                            value="{{$hajjpackage['groupLeader']}}"
                            @break
                            @case('umrahpackages')
                            value="{{$umrahpackage['groupLeader']}}"
                            @break
                            @case('hajj'||'umrah')
                            value="{{auth()->user()->fstname.' '.auth()->user()->lstname}}"
                            @break
                        @default
                        @endswitch>
                   <label for="groupLeader">Group leader @error('groupLeader')<span style="color:red">{{'required'}}</span>@enderror</label>            
               </div>
       </div>
           <div class="col-xl-3">
               <div class="form-floating mb-3">
                   <input type="number" class="form-control" id="groupNumber"
                   name="groupNumber"  placeholder="Group number"
                       @switch($webPath) 
                            @case('hajjpackages')
                            value="{{$hajjpackage['id']}}"
                            @break
                            @case('umrahpackages')
                            value="{{$umrahpackage['id']}}"
                            @break
                            @case('umrah')
                            value="{{count($umrahpackage)+1}}"
                            @break
                            @case('hajj')
                            value="{{count($hajjpackage)+1}}"
                            @break
                       @default
                       @endswitch readonly>
                   <label for="groupNumber">Group number  @error('groupNumber')<span style="color:red">{{'*'}}</span>@enderror</label>
               </div>
           </div>  
            <div class="@if($webPath == 'umrahpackages' || $webPath == 'hajjpackages') col-xl-4 @else col-xl-5 @endif">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="numberOfPilgrims"
                    name="numberOfPilgrims" placeholder="Number of pilgrims">
                    <label for="numberOfPilgrims">Customers capasity @error('numberOfPilgrims')<span style="color:red">{{'required'}}</span>@enderror</label>
                </div>
            </div> 
            @if($webPath == 'umrahpackages' || $webPath == 'hajjpackages')
            <a class="col-xl-1 pt-1"><div class=" btn editbtn"><i class="bi bi-people-fill"></i></div></a>
            @endif
       </div>
       {{-- end of first row --}}
        <div class="row">
            <div class="col-xl-7">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="packagePrice"
                    name="packagePrice" placeholder="Package price ฿"
                    @switch($webPath) 
                        @case('hajjpackages')
                        value="{{$hajjpackage['packagePrice']}}"
                        @break
                        @case('umrahpackages')
                        value="{{$umrahpackage['packagePrice']}}"
                        @break
                        @case('hajj'||'umrah')
                        value="{{old('packagePrice')}}"
                        @break
                    @default
                    @endswitch
                    >
                    <label for="packagePrice">Package price ฿  @error('packagePrice')<span style="color:red">{{'required'}}</span>@enderror</label>
                </div>
            </div>  
        
            @php $selected = 'selected'@endphp
            <div class="col-xl-5">
                <div class="form-floating mb-3">
                    <select class="form-select" id="PackageName" readonly
                        name="PackageName" aria-label="Floating label select example">
                        <option>Open this select menu</option>
                        @switch($webPath) 
                            @case('hajjpackages')
                            <option  value="Economy"@if ($hajjpackage['packageName'] == 'Economy') {{$selected}} @endif >Economy</option>
                            <option  value="Premium" @if ($hajjpackage['packageName'] == 'Premium') {{$selected}} @endif>Premium</option>
                            
                            @break
                            @case('umrahpackages')
                            <option  value="Economy"@if ($umrahpackage['packageName'] == 'Economy') {{$selected}} @endif >Economy</option>
                            <option  value="Ramadan" @if ($umrahpackage['packageName'] == 'Ramadan') {{$selected}} @endif>Ramadan</option>
                            @break
                            @case('travelpackages')
                            <option  value="Deluxe"@if ($travelpackage['packageName'] == 'Deluxe') {{$selected}} @endif >Deluxe</option>
                            <option  value="Golden" @if ($travelpackage['packageName'] == 'Golden') {{$selected}} @endif>Golden</option>
                            <option  value="Silver"@if ($travelpackage['packageName'] == 'Silver') {{$selected}} @endif>Silver</option>
                            <option  value="Saver"@if ($travelpackage['packageName'] == 'Saver') {{$selected}} @endif>Saver</option>
                            @break
                            @case('umrah')                        
                                <!-- <option value="{{null}}">Open this select menu</option> -->
                                <option value="Economy" >Economy</option>
                                <option value="Ramadan">Ramadan</option>
                            @break
                            @case('hajj')                        
                                <!-- <option value="{{null}}">Open this select menu</option> -->
                                <option value="Economy" >Economy</option>
                                <option value="Premium">Premium</option>
                            @break
                        @default
                        @endswitch
                    </select>
                    <label for="PackageName">Package lvl  @error('PackageName')<span style="color:red">{{'required'}}</span>@enderror</label>
                </div>
            </div>
       </div>


       <h5>Airline from Thailand to Saudi Arabia</h5>
        <div class="row">
            <div class="col-xl-3">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control hijri-date-input" id="Th_airline"
                    name="Th_airline"  placeholder="Airline"
                        @switch($webPath) 
                            @case('hajjpackages')
                            value="{{$hajjpackage['Th_airline']}}"
                            @break
                            @case('umrahpackages')
                            value="{{$umrahpackage['Th_airline']}}"
                            @break
                            @case('hajj'||'umrah')
                            value="{{old('Th_airline')}}"
                            @break
                        @default
                        @endswitch
                        >
                    <label for="Th_airline">Airline @error('Th_airline')<span style="color:red">{{'required'}}</span>@enderror</label>            
                </div>
            </div>
            
            <div class="col-xl-2">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control hijri-date-input" id="Th_departmentDate"
                            name="Th_departmentDate" placeholder="Deprat of thai"
                            @switch($webPath) 
                                @case('hajjpackages')
                                value="{{$hajjpackage['Th_departmentDate']}}"
                                @break
                                @case('umrahpackages')
                                value="{{$umrahpackage['Th_departmentDate']}}"
                                @break
                                @case('hajj'||'umrah')
                                value="{{old('Th_departmentDate')}}"
                                @break
                            @default
                            @endswitch
                            >
                            <label for="Th_departmentDate">Deprat of thai   @error('Th_departmentDate')<span style="color:red">{{'*'}}</span>@enderror</label>
                        </div>
                </div>        
            
            
                <div class="col-xl-2">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control hijri-date-input" id="S_arrivalDate"
                            name="S_arrivalDate"  placeholder="Arrival to saudi"
                            @switch($webPath) 
                                @case('hajjpackages')
                                value="{{$hajjpackage['S_arrivalDate']}}"
                                @break
                                @case('umrahpackages')
                                value="{{$umrahpackage['S_arrivalDate']}}"
                                @break
                                @case('hajj'||'umrah')
                                value="{{old('S_arrivalDate')}}"
                                @break
                            @default
                            @endswitch
                            >
                            <label for="S_arrivalDate">Arrival to saudi  @error('S_arrivalDate')<span style="color:red">{{'*'}}</span>@enderror</label>
                        </div>
                </div> 
        </div>
            <h5>Airline from Saudi Arabia to Thailand</h5>
            <div class="row">
                <div class="col-xl-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="S_airline"
                        name="S_airline" placeholder="Airline"
                        @switch($webPath) 
                            @case('hajjpackages')
                            value="{{$hajjpackage['S_airline']}}"
                            @break
                            @case('umrahpackages')
                            value="{{$umrahpackage['S_airline']}}"
                            @break
                            @case('hajj'||'umrah')
                            value="{{old('S_airline')}}"
                            @break
                        @default
                        @endswitch
                        placeholder="Airline from thai to saudi">
                        <label for="S_airline">Airline @error('S_airline') <span style="color:red">{{'required'}}@enderror</span></label>            
                    </div>
                </div>

                <div class="col-xl-2">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control hijri-date-input" id="S_departmentDate"
                        name="S_departmentDate" placeholder="Depart of saudi"
                        @switch($webPath) 
                            @case('hajjpackages')
                            value="{{date($hajjpackage['"S_departmentDate'])}}
                            @break
                            @case('umrahpackages')
                            value="{{date($umrahpackage['"S_departmentDate'])}}
                            @break
                            @case('hajj'||'umrah')
                            value="{{old('S_departmentDate')}}"
                            @break
                        @default
                        @endswitch
                        placeholder="Depart of saudi">
                        <label for="S_departmentDate">Depart of saudi @error('S_departmentDate') <span style="color:red">{{'*'}}@enderror</span></label>            
                    </div>
                </div>

                <div class="col-xl-2">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control hijri-date-input" id="Th_arrivalDate"
                        name="Th_arrivalDate" placeholder="Arrive to thai"
                        @switch($webPath) 
                            @case('hajjpackages')
                            value="{{date($hajjpackage['"Th_arrivalDate'])}}
                            @break
                            @case('umrahpackages')
                            value="{{date($umrahpackage['"Th_arrivalDate'])}}
                            @break
                            @case('hajj'||'umrah')
                            value="{{old('Th_arrivalDate')}}"
                            @break
                        @default
                        @endswitch
                        placeholder="Arrive to thai">
                        <label for="Th_arrivalDate">Arrive to thai @error('Th_arrivalDate') <span style="color:red">{{'*'}}@enderror</span></label>            
                    </div>
                </div>
        </div>

    {{-- Start of Last row --}}
    <div class="col-lg-12 pb-2">
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="stayingDays"
            name="stayingDays" placeholder="Staying days"
                @switch($webPath) 
                @case('hajjpackages')
                value="{{$hajjpackage['stayingDays']}}"
                @break
                @case('umrahpackages')
                value="{{$umrahpackage['stayingDays']}}"
                @break
                @case('hajj'||'umrah')
                value="{{old('stayingDays')}}"
                @break
            @default
            @endswitch
            placeholder="Staying days" readonly>
            <label for="stayingDays">Staying days @error('stayingDays') <span style="color:red">{{'required'}}@enderror</span></label>           
        </div>
        </div>

</section>
{{-- 
<script>
    const input = document.getElementById("Th_departmentDate");
    const display = document.getElementById("Th_departmentDate");
  
    input.addEventListener("change", function() {
      const date = new Date(input.value);
      const day = date.getDate().toString().padStart(2, "0");
      const month = (date.getMonth() + 1).toString().padStart(2, "0");
      const year = date.getFullYear().toString().slice(-2);
      const newFormat = `${day}/${month}/${year}`;
      display.textContent = newFormat;
    });
  </script> --}}