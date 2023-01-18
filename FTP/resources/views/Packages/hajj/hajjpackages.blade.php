@include('includes/header')
@php 
//for counting packages separatly 
$countDeluxe = 0;
$countGolden = 0; 
$countSilver = 0;
$countSaver  = 0;
@endphp

     @include('includes.slide')

  <main id="main">


    <!-- ======= Hajj Section ======= -->
    <section id="hajj" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

        <div class="row">

          @include('packages.includes.navbar')
        
          <div class="topichajj col-xl-9">

            <div class="row">


                <div class="row">      
                  <section class="section-title"><h2>What is hajj? </h2></section>
                       
                          <div class="col-12 border border-3 p-4">
                            <h4 class="">
                            การประกอบพิธีฮัจญ์ คือ การเดินทางไปปฏิบัติศาสนกิจที่นครมักกะฮฺ ประเทศซาอุดิอารเบีย 
                            ในเดือนซุลฮิจญะฮฺของทุกปี ซึ่งศาสนกิจข้อนี้เป็นหน้าที่สำหรับมุสลิมทั้งชายและหญิงทุกคนที่มีความสามารถทางด้านร่างกาย 
                            ทรัพย์สิน โดยก่อนที่จะเดินทางสู่นครมักกะฮฺ จำเป็นจะต้องมีการเนียตอิหฺรอม พร้อมสวมชุดอิหฺรอม (ผ้าขาวสองผืน) ที่มีกอต (จุดที่ถูกกำหนดไว้แล้ว)
                          </h4>
                          </div>
                         
                          
                </div>
                        
        <div class="row mt-4">
          <section class="section-title"><h2>packages details</h2></section>

                     
             <div class="col-12 border border-3 p-4">
               <h4 class="">
                สำหรับอุมเราะห์ในกฎหมายอิสลาม: เป็นการเยี่ยมเยียนบ้านอันศักดิ์สิทธิ์ของพระเจ้าเพื่อนมัสการพระเจ้าผู้ทรงฤทธานุภาพ 
                และเป็นไปตามสถานะของอิห์ราม
                ทำได้โดยการเวียนรอบกะบะห์ และเดินไปมาระหว่างซอฟาและมัรวะห์
                ปฏิบัติตามเงื่อนไขที่กำหนดก่อนทำอุมเราะห์ เช่น การโกนผมหรือตัดผมให้สั้นลง</h4>
             </div>
             
      </div>

            <div class="row mt-4">
              <section class="section-title"><h2>Premium packages</h2></section>

                            <div class="hajjpackages">
                              @foreach ($hajjpackages as $hajjpackage)
                              @if ($hajjpackage['packageName'] == 'Premium')
                                @php $countSaver++; @endphp
                                  @include('packages.includes.packages_info')
                              @endif              
                              @endforeach             
                            </div><!--Saver end-->

                            
                @if ($countSaver == 0)
                <div class="col-12 null">
                  <h4 class="text-center">Currently there's no Ramadan package available</h4>
                </div>
                @endif 


                <section class="section-title"><h2>Economy packages</h2></section>
                
                <div class="hajjpackages">
                  @foreach ($hajjpackages as $hajjpackage)
                  @if ($hajjpackage['packageName'] == 'Economy')
                    @php $countDeluxe++; @endphp                          
                    @include('packages.includes.packages_info')
                  @endif
                  @endforeach    
                </div>

          @if ($countDeluxe == 0)
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



  




