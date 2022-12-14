@include('includes/header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">


    <div class="container">

 
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-6 pt-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          
          @if(Session::get('login'))
          <div class="alert alert-danger"> {{Session::get('login')}}</div>
          @endif

          <h1 style="font-size: 220%;">ห้างหุ้นส่วนจํากัด ฟาตอนี แทรเวิล <br>กิจการฮัจญ์ อัศศิดดีก</h1> 
          <p>"FATONI...SERAMBI MAKKAH <br>
              ฟาตอนี...ระเบียงบนครมักกะฮฺ"</p>
          <p>แพ็คเกจฮัจญ์...กับฟาตอนี แทรเวิล <br>
            คิดจะทําฮัจญ์...มอบความไว้วางใจไปกับเรา</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
           
            <a href="/login" class="btn-get-started scrollto">Get Started</a>
          <!--  <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          --></div>



          <!-- change the photo in background -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('img/FTLPmain.png')}}" class="img-fluid animated" alt="">
        </div>
        <!-- change the photo -->



      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

  {{-- @include('includes.clients') --}}

    <!-- ======= About Us Section ======= -->
    <br><br><br><br><br>


    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Fatoni Travel Limited Partnership
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> We have services for Hajj</li>
              <li><i class="ri-check-double-line"></i> We have services for Umrah</li>
              <li><i class="ri-check-double-line"></i> We have services for turest travels in around Thailand </li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Fatoni Travel Limited Partnership, provides several services to help you attempt your Hajj & Umrah, and for who want to visit Thailand we also can take in an amazing trip in Thailand.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <!-- <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"> -->

          
            <div class="content col-12 pt-4 pb-3 ">
              <h3>FATONI…SERAMBI MAKKAH
                <br>ฟาตอนี...ระเบียงมหานครมักกะฮฺ
              </h3>
              <p>
                สหกรณ์อิสลามอัศศิดดีก จำกัด เป็นสถาบันการเงินที่เปิดบริการธุรกรรมทางการเงินตามหลักการอิสลามให้แก่สมาชิกและผู้ที่สนใจ 
                หนึ่งในบริการทางการเงินที่เปิดให้บริการอยู่คือ บริการเงินฝากกองทุนฮัจญ์/อุมเราะฮฺ 
                เพื่อส่งเสริมให้สมาชิกมีการวางแผนการออมเงินเพื่อเดินทางไปประกอบพิธีฮัจญ์
              </p>
              <P>
                ปัจจุบันทางสหกรณ์ได้เปิดให้บริการฮัจญ์และอุมเราะฮฺ ในนามห้างหุ้นส่วนจำกัด ฟาตอนี แทรเวิล (กิจการในเครือ) 
                รวมทั้งจัดบริการอื่นๆ ที่เกี่ยวข้องกับพิธีฮัจญ์และอุมเราะฮฺ 
                โดยนำพาสมาชิกและบุคคลทั่วไปเข้าสู่การประกอบพิธีฮัจญ์และอุมเราะฮฺตามแบบอย่าง (ซุนนะฮฺ) ของท่านรอซูล (ซล.) 
                ซึ่งเป้าหมายสูงสุดคือ การที่จะให้ได้มาซึ่งฮัจญ์และอุมเราะฮฺที่ถูกตอบรับ (อินชาอัลลอฮฺ) 
                อันเป็นความหวังของบรรดาผู้ประกอบพิธีฮัจญ์และอุมเราะฮฺทุกคน
              </P>
            </div>

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
    
    <!-- End Why Us Section -->

    {{-- <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('../../img/skills.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Fatoni Travel Limited Partnership Privileges</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Comforts <i class="val">91%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Safety <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">trust <i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Flexibility <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section>
    
    <!-- End Skills Section --> --}}
    <!-- ======= Hajj Section ======= -->
    
  
    @yield('hajj')

  
    <!-- End Hajj Section -->


    <!-- ======= Umrah Section ======= -->
  
    @yield('umrah')

  
    <!-- End Umrah Section -->

    @yield('hotels')






    </main><!-- End #main -->

    @include ('includes/footer')



    {{-- 
    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section> -->
    
    <!-- End Cta Section --> --}}
    
    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit.
             Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Standard Plan</h3>
              <h4><sup>$</sup>0<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Bronze Plan</h3>
              <h4><sup>$</sup>29<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Silver </h3>
              <h4><sup>$</sup>49<span>per month</span></h4>
              <ul>
                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
              </ul>
              <a href="#" class="buy-btn">Get Started</a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    {{-- <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit.
             Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. 
                  Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices.
                   Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. 
                  Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. 
                  Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. 
                  SSSTincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section> -->
    
    <!-- End Frequently Asked Questions Section --> --}}

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>     Do you have any suggestion for the webiste or the package please send us a massege in link below   </p>
          
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>  1332 petchkasem Rd, Hatyai Sd, <br>Hatyai, Songkhla, Thailand 90110</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>fatoni.travel@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+66 99-313-1166</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" placeholder="name" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control"  placeholder="Email" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" placeholder="Write message" name="message" rows="10" style="width: 450px" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>End Contact Section -->



