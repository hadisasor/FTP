@include('includes/header')
@php 
//for counting packages separatly 
$countEconomy = 0;
$countGolden = 0; 
$countSilver = 0;
$countpremium  = 0;
@endphp

@include('includes.slide') <!-- this section in views/includes/slide   -->

  <main id="main">


    <!-- ======= Hajj Section ======= -->
    <section id="hajj" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

        <div class="row">

          @include('packages.includes.navbar')
        
          <div class="topichajj col-xl-9">

            <div class="row">


                <div class="row">      
                  <section class="section-title"><h2>What is Umrah? </h2></section>
                       
                          <div class="col-12 border border-3 p-4">
                            <h4 class="">
                              สำหรับอุมเราะห์ในกฎหมายอิสลาม: เป็นการเยี่ยมเยียนบ้านอันศักดิ์สิทธิ์ของพระเจ้าเพื่อนมัสการพระเจ้าผู้ทรงฤทธานุภาพ 
                              และเป็นไปตามสถานะของอิห์ราม
                              ทำได้โดยการเวียนรอบกะบะห์ และเดินไปมาระหว่างซอฟาและมัรวะห์
                              ปฏิบัติตามเงื่อนไขที่กำหนดก่อนทำอุมเราะห์ เช่น การโกนผมหรือตัดผมให้สั้นลง</h4>
                          </div>
                         
                          
                </div>
                        
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



  </section><!-- End Hajj Section -->

</main><!-- End #main -->
  @include ('includes/footer')



  





   <!-- <div class="hajjpackages">
                          @foreach ($umrahpackages as $umrahpackage)
                          @if ($umrahpackage['packageName'] == 'Golden')
                            @php $countGolden++; @endphp
                            @include('packages.includes.packages_info')
                          @endif  
                          @endforeach   
                        </div> -->
                                    
                          <!-- @if ($countGolden == 0) --> <!-- @endif --><!--Golden end-->






          <!-- <div class="hajjpackages"> 
                          @foreach ($umrahpackages as $umrahpackage)
                          @if ($umrahpackage['packageName'] == 'Silver')
                            @php $countSilver++; @endphp
                            @include('packages.includes.packages_info')
                          @endif                
                          @endforeach     
                        </div> -->
             
             <!-- @if ($countSilver == 0) --><!-- @endif --><!--Silver end-->