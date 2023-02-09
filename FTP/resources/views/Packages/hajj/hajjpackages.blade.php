@include('includes/header')
@php 
//for counting packages separatly 
$countEconomy = 0;
$countRamadan = 0 ;
$countPremium  = 0;
//here will be count from database after next line in next time

@endphp

@include('includes.cta')

  <main id="main">


    <!-- ======= Hajj Section ======= -->
    <section id="faq" class="faq section-bg pb-4 mb-4">
      <div class="container" data-aos="fade-up">
          
          <div class="section-title mt-4 mb-4">
            <h2>Hajj</h2>
          </div>
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx  icon-help"></i> <a style="color: #76520e" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is Hajj?<i class="bx bx-chevron-down icon-show"></i><i class=""></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    การประกอบพิธีฮัจญ์ คือ การเดินทางไปปฏิบัติศาสนกิจที่นครมักกะฮฺ ประเทศซาอุดิอารเบีย 
                    ในเดือนซุลฮิจญะฮฺของทุกปี ซึ่งศาสนกิจข้อนี้เป็นหน้าที่สำหรับมุสลิมทั้งชายและหญิงทุกคนที่มีความสามารถทางด้านร่างกาย 
                    ทรัพย์สิน โดยก่อนที่จะเดินทางสู่นครมักกะฮฺ จำเป็นจะต้องมีการเนียตอิหฺรอม พร้อมสวมชุดอิหฺรอม (ผ้าขาวสองผืน) ที่มีกอต (จุดที่ถูกกำหนดไว้แล้ว)
                  </p>
                </div>
              </li>
          </div>

            <div class="row mt-4">
              <section class="section-title"><h2>Hajj Premium packages</h2></section>

                            <div class="hajjpackages">
                              @foreach ($hajjpackages as $hajjpackage)
                              @if ($hajjpackage['packageName'] == 'Premium')
                                @php $countPremium++; @endphp
                                  <div class="hajjpackages">
                                  @include('packages.includes.packages_info')
                              @endif              
                                  </div>
                              @endforeach             
                            </div>
<!--Premium end-->
                            
                @if ($countPremium == 0)
                <div class="nopkg ">
                  <h4 class="text-center">Currently there's no Ramadan package available</h4>
                </div>
                @endif 


                <section class="section-title mt-4"><h2>Economy Hajj packages</h2></section>
                
                <div class="hajjpackages">
                  @foreach ($hajjpackages as $hajjpackage)
                  @if ($hajjpackage['packageName'] == 'Economy')
                    @php $countEconomy++; @endphp           
                    <div class="hajjpackages">
                      <div class="hajjpackages">
                    @include('packages.includes.packages_info')
                  @endif
                  </div>
                    </div>
                  @endforeach    
                </div>

          @if ($countEconomy == 0)
          <div class="nopkg ">
         <h4 class="text-center">Currently there's no Economy package available</h4>
          </div>
          @endif
            </div>

            <div class="section-title mt-4">
              <h2>Umrah</h2>
            </div>
            <div class="faq-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <i class="bx  icon-help"></i> <a style="color: #76520e" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is Umrah<i class="bx bx-chevron-down icon-show"></i><i class=""></i></a>
                  <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                    <p>
                      สำหรับอุมเราะห์ในกฎหมายอิสลาม: เป็นการเยี่ยมเยียนบ้านอันศักดิ์สิทธิ์ของพระเจ้าเพื่อนมัสการพระเจ้าผู้ทรงฤทธานุภาพ 
                      และเป็นไปตามสถานะของอิห์ราม
                      ทำได้โดยการเวียนรอบกะบะห์ และเดินไปมาระหว่างซอฟาและมัรวะห์
                      ปฏิบัติตามเงื่อนไขที่กำหนดก่อนทำอุมเราะห์ เช่น การโกนผมหรือตัดผมให้สั้นลง
                    </p>
                  </div>
                </li>
            </div>

            <div class="row mt-4">
              <section class="section-title"><h2>Ramadan packages</h2></section>

                            <div class="hajjpackages">
                              @foreach ($umrahpackages as $umrahpackage)
                              @if ($umrahpackage['packageName'] == 'Ramadan')
                                @php $countRamadan++; @endphp
                                  <div class="hajjpackages">
                                  @include('packages.includes.packages_info')
                              @endif
                                  </div>
                              @endforeach             
                            </div><!--Saver end-->

                            
                @if ($countRamadan == 0)
                <div class="nopkg ">
                  <h4 class="text-center">Currently there's no Ramadan package available</h4>
                </div>
                @endif 


                <section class="section-title mt-4"><h2>Economy Umrah packages</h2></section>
                
                <div class="hajjpackages">
                  @foreach ($umrahpackages as $umrahpackage)
                  @if ($umrahpackage['packageName'] == 'Economy')
                    @php $countEconomy++; @endphp                     
                    <div class="hajjpackages">
                      <div class="hajjpackages">
                    @include('packages.includes.packages_info')
                  @endif
                  </div>
                </div>
                  @endforeach    
                </div>

              @if ($countEconomy == 0)
              <div class="nopkg ">
              <h4 class="text-center">Currently there's no Economy package available</h4>
              </div>
              @endif
            </div>




        </div>
      </div>
      </div>
    </div>

    {{-- <div class="section-title mt-4">
      <h2>Travel</h2>
    </div>
    <div class="faq-list">
      <ul>
        <li data-aos="fade-up" data-aos-delay="100">
          <i class="bx  icon-help"></i> <a style="color: #76520e" data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What is Travel<i class="bx bx-chevron-down icon-show"></i><i class=""></i></a>
          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
            <p>
              สถานที่ท่องเที่ยวในประเทศไทยมีอยู่มากมาย ทั้งที่เที่ยวทะเล ภูเขา วัด หรือวิถีชีวิตของผู้คน การออกไปท่องเที่ยวพักผ่อนตามจังหวัดต่าง ๆ เพื่อชาร์จแบตฯ เพิ่มพลังชีวิตให้กับตัวเอง จึงไม่แปลกที่พอถึงเทศกาลหยุดยาวทีไร สถานที่ท่องเที่ยวทั่วประเทศจะเต็มไปด้วยผู้คนที่ไปสูดอากาศบริสุทธิ์ เสพวิวสวย ๆ ชมวิถีชีวิตของชาวบ้าน หรือชิมอาหารท้องถิ่นอร่อย ๆ
            </p>
          </div>
        </li>
    </div> --}}

  </section><!-- End Hajj Section -->

  
</main><!-- End #main -->
  @include ('includes/footer')



  




          <!-- <div class="row mt-4">
          <section class="section-title"><h2>packages details</h2></section>

                     
             <div class="nopkg border border-3 p-4">
               <h4 class="">
                สำหรับอุมเราะห์ในกฎหมายอิสลาม: เป็นการเยี่ยมเยียนบ้านอันศักดิ์สิทธิ์ของพระเจ้าเพื่อนมัสการพระเจ้าผู้ทรงฤทธานุภาพ 
                และเป็นไปตามสถานะของอิห์ราม
                ทำได้โดยการเวียนรอบกะบะห์ และเดินไปมาระหว่างซอฟาและมัรวะห์
                ปฏิบัติตามเงื่อนไขที่กำหนดก่อนทำอุมเราะห์ เช่น การโกนผมหรือตัดผมให้สั้นลง</h4>
             </div>
             
      </div> -->

