@include('includes/header')

@php 
//for counting packages separatly 
$countpremium = 0;
$countEconomy = 0; 
@endphp
<section id="hajj" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

        <div class="row">

          @include('packages.includes.navbar')
        
          <div class="topichajj col-xl-9">

            <div class="row">

                        
        <div class="row mt-4">
          <section class="section-title"><h2>packages details</h2></section>

                     
             <div class="col-12 border border-3 p-4">
               <h4 class="">
                </h4>
             </div>
             
      </div>

            <div class="row mt-4">
              <section class="section-title"><h2>Ramadan packages</h2></section>

                            <div class="hajjpackages">
                              @foreach ($umrahpackages as $umrahpackage)
                              @if ($umrahpackage['packageName'] == 'Ramadan')
                                @php $countpremium++; @endphp
                                  @include('packages.includes.packages_info')
                              @endif              
                              @endforeach             
                            </div><!--Saver end-->

                            
                @if ($countpremium == 0)
                <div class="col-12 null">
                  <h4 class="text-center">Currently there's no Ramadan package available</h4>
                </div>
                @endif 


                <section class="section-title"><h2>Economy packages</h2></section>
                
                <div class="hajjpackages">
                  @foreach ($umrahpackages as $umrahpackage)
                  @if ($umrahpackage['packageName'] == 'Economy')
                    @php $countEconomy++; @endphp                          
                    @include('packages.includes.packages_info')
                  @endif
                  @endforeach    
                </div>

          @if ($countEconomy == 0)
          <div class="col-12 null">
         <h4 class="text-center">Currently there's no Economy package available</h4>
          </div>
          @endif
            </div>

        </div>
      </div>
      </div>
    </div>



@include ('includes/footer')