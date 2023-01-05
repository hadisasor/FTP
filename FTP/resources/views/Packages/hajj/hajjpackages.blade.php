@include('includes/header')
@php 
//for counting packages separatly 
$countDeluxe = 0;
$countGolden = 0; 
$countSilver = 0;
$countSaver  = 0;
@endphp
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container text-center" style="margin-top: 50px;">
      
 
      <div class="row text-center centering">
        
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('img/FTLPmain.png')}}" class="img-fluid animated" alt="">
          <!-- <h1 style="font-size: 270%;">Booking <br>Hajj package</h1>  -->
        </div>
        </div>
  </div>
           
  </section><!-- End Hero -->

  {{-- <main id="main">
    @include('includes.clients') --}}

    <!-- ======= Hajj Section ======= -->
    <section id="hajj" class="about" style="background: url(/assets/img/bg.jpg);">
      <div class="Hajj-container" data-aos="fade-up">

        <div class="row">

          @include('packages.includes.navbar')

          <div class="topichajj col-xl-9">

            <div class="row">
            <section class="section-title"><h2>What is hajj?</h2></section>
                
                        {{-- <div class="hajjpackages">
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Deluxe')
                            @php $countDeluxe++ @endphp
                            @include('packages.includes.packages_info')
                          @endif
                          @endforeach             
                        </div> --}}
                          
                          {{-- @if ($countDeluxe == 0) --}}
                          <div class="col-12 border border-3 p-4">
                            <h4 class="">hajj is:</h4>
                            <p>
                              ปัจจุบันทางสหกรณ์ได้เปิดให้บริการฮัจญ์และอุมเราะฮฺ ในนามห้างหุ้นส่วนจำกัด ฟาตอนี แทรเวิล (กิจการในเครือ) 
                              รวมทั้งจัดบริการอื่นๆ ที่เกี่ยวข้องกับพิธีฮัจญ์และอุมเราะฮฺ 
                              โดยนำพาสมาชิกและบุคคลทั่วไปเข้าสู่การประกอบพิธีฮัจญ์และอุมเราะฮฺตามแบบอย่าง (ซุนนะฮฺ) ของท่านรอซูล (ซล.) 
                              ซึ่งเป้าหมายสูงสุดคือ การที่จะให้ได้มาซึ่งฮัจญ์และอุมเราะฮฺที่ถูกตอบรับ (อินชาอัลลอฮฺ) 
                              อันเป็นความหวังของบรรดาผู้ประกอบพิธีฮัจญ์และอุมเราะฮฺทุกคน
                              ปัจจุบันทางสหกรณ์ได้เปิดให้บริการฮัจญ์และอุมเราะฮฺ ในนามห้างหุ้นส่วนจำกัด ฟาตอนี แทรเวิล (กิจการในเครือ) 
                              รวมทั้งจัดบริการอื่นๆ ที่เกี่ยวข้องกับพิธีฮัจญ์และอุมเราะฮฺ 
                              โดยนำพาสมาชิกและบุคคลทั่วไปเข้าสู่การประกอบพิธีฮัจญ์และอุมเราะฮฺตามแบบอย่าง (ซุนนะฮฺ) ของท่านรอซูล (ซล.) 
                              ซึ่งเป้าหมายสูงสุดคือ การที่จะให้ได้มาซึ่งฮัจญ์และอุมเราะฮฺที่ถูกตอบรับ (อินชาอัลลอฮฺ) 
                              อันเป็นความหวังของบรรดาผู้ประกอบพิธีฮัจญ์และอุมเราะฮฺทุกคน
                            </p>
                            <section id="why-us" class="why-us section-bg">
                              <div class="container-fluid" data-aos="fade-up">
                        
                                <div class="row">
                        
                                  <!-- <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"> -->
                        
                                    <div class="accordion-list">
                                      <ul>
                                        <li>
                                          <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Hajj <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                          <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                            <p>
                                              การประกอบพิธีฮัจญ์ คือ การเดินทางไปปฏิบัติศาสนกิจที่นครมักกะฮฺ ประเทศซาอุดิอารเบีย ในเดือนซุลฮิจญะฮฺของทุกปี 
                                              ตามวันเวลา และสถานที่ต่างๆ ที่ทางศาสนาอิสลามกำหนดไว้ 
                                              ซึ่งศาสนกิจข้อนี้เป็นหน้าที่สำหรับมุสลิมทั้งชายและหญิงทุกคนที่มีความสามารถทางด้านร่างกาย ทรัพย์สิน และการเดินทาง 
                                              ชาวมุสลิมทั่วโลกจะเดินทางเข้าสู่แผ่นดินฮารอมทั้งสอง (ฮารอมัยนฺ) โดยก่อนที่จะเดินทางสู่นครมักกะฮฺ 
                                              จำเป็นจะต้องมีการเนียตอิหฺรอม พร้อมสวมชุดอิหฺรอม (ผ้าขาวสองผืน) ที่มีกอต (จุดที่ถูกกำหนดไว้แล้ว) 
                                              โดยจะต้องปฏิบัติตามกฎของการครองอิหฺรอมอย่างเคร่งครัด อาทิเช่น การไม่สมสู่ระหว่างชายหญิง 
                                              (ถึงแม้จะเป็นคู่สามีภรรยาก็ตาม), ไม่ล่าสัตว์, ไม่ตัดเล็บหรือผม, ไม่ใช้น้ำหอม, ไม่สวมเสื้อผ้าที่มีการตัดเย็บ (เฉพาะผู้ชาย)
                                            </p>
                                            <P>
                                              เมื่อเดินทางถึงนครมักกะฮฺ จะมีการฏอวาฟรอบกะบะฮฺ และสะแอ เมื่อถึงวันที่ 8 ซุลฮิดญะฮฺ หรือวันตัรวียะฮฺ 
                                              บรรดาฮุจญาตจะต้องทำการเนียตฮัจญี พร้อมสวมชุดอิหฺรอม จากนั้นเดินทางสู่ทุ่งมีนา โดยพักค้างแรม 1 
                                              คืน วันต่อมาคือวันอารอฟะฮฺ จะมีการชุมนุมกัน ณ ทุ่งอารอฟะฮฺ เพื่อทำการวุกุฟ ซึ่งเป็นรุกุ่นหนึ่งของฮัจญ์ 
                                              จนกระทั่งตะวันตกดิน จากนั้นออกจากทุ่งอารอฟะฮฺ เดินทางสู่มุซดาลีฟะฮฺ พักแรมที่มุซดาลีฟะฮฺ 1 คืน 
                                              และเช้าวันรุ่งขึ้นกลับมายังทุ่งมีนาอีกครั้ง เพื่อทำภารกิจขว้างเสาหิน และพักแรมที่นั่นเป็นเวลา 3 คืน 
                                              ดยทำการขว้างเสาหินเป็นเวลา 4 วันด้วยกัน หลังจากนั้นจึงเดินทางกลับมักกะฮฺ เพื่อฎอวาฟ (เวียนรอบกะบะฮฺ) 
                                              และสะแอ (การเดินหรือวิ่งเหยาะๆระหว่างเนินเขาศอฟากับมัรวะฮฺ) ไปมาจนครบ 7 เที่ยว
                                            </P>
                                          </div>
                                        </li>
                        
                                        <li>
                                          <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Umrah <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                          <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                            <p>
                                              อุมเราะห์ในภาษา: คือการเยือน <br>
                                              สำหรับอุมเราะห์ในกฎหมายอิสลาม: เป็นการเยี่ยมเยียนบ้านอันศักดิ์สิทธิ์ของพระเจ้าเพื่อนมัสการพระเจ้าผู้ทรงฤทธานุภาพ 
                                              และเป็นไปตามสถานะของอิห์ราม
                                              ทำได้โดยการเวียนรอบกะบะห์ และเดินไปมาระหว่างซอฟาและมัรวะห์
                                              ปฏิบัติตามเงื่อนไขที่กำหนดก่อนทำอุมเราะห์ เช่น การโกนผมหรือตัดผมให้สั้นลง
                                            </p>
                                          </div>
                                        </li>
                        
                                        <li>
                                          <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Travel <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                          <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                            <p>
                                              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. 
                                              Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. 
                                              Urna molestie at elementum eu facilisis sed odio morbi quis
                                            </p>
                                          </div>
                                        </li>
                        
                                      </ul>
                                    </div>
                        
                                  </div>
                        
                                  <!-- <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("../../img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div> -->
                                </div>
                        
                              </div>
                            </section>
                          </div>
                          {{-- @endif --}}
                  
                  
                          
                  {{-- <section class="section-title"><h2>Golden packages</h2></section> --}}
                     
                      {{-- <div class="row">
                        <div class="hajjpackages">
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Golden')
                            @php $countGolden++ @endphp
                            @include('packages.includes.packages_info')
                          @endif  
                          @endforeach   
                        </div> --}}
                          
                          {{-- @if ($countGolden == 0) --}}
                          {{-- <div class="col-12 null">
                            <h4 class="text-center">Currently there's no Golden package available</h4>
                          </div> --}}
                          {{-- @endif --}}
                      {{-- </div> --}}

                        <div class="row">
                        <section class="section-title pkg"><h2>packages</h2></section>

                        <div class="hajjpackages"> 
                          @foreach ($hajjpackages as $hajjpackage)
                          @if ($hajjpackage['packageName'] == 'Silver')
                            @php $countSilver++ @endphp
                            @include('packages.includes.packages_info')
                          @endif                
                          @endforeach        
                        </div><!--Silver end-->
             
                          {{-- @if ($countSilver == 0)
                          <div class="col-12">
                            <h4 class="text-center">Currently there's no package available</h4>
                          </div>
                          @endif
                        </div> --}}

                    {{-- <div class="row">
                      <section class="section-title"><h2>Saver packages</h2></section>

                        <div class="hajjpackages">

                        @foreach ($hajjpackages as $hajjpackage)
                        @if ($hajjpackage['packageName'] == 'Saver')
                           @php $countSaver++ @endphp
                         
                           @include('packages.includes.packages_info')

                        @endif              
                        @endforeach         
                      </div><!--Saver end-->
             
                        @if ($countSaver == 0)
                        <div class="col-12 null">
                        <h4 class="text-center">Currently there's no Saver package available</h4>
                      </div>
                        @endif
                      </div> --}}


      </div>
      </div>
      </div>
    </div>
  </section><!-- End Hajj Section -->

</main><!-- End #main -->
  @include ('includes/footer')