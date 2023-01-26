@include('includes/header')

@include('includes.slide')



<section id="hero" class="d-flex align-items-center">
    @include('packages.includes.navbar')
        
        <div class=" justify-content-center pt-6 pt-lg-4 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            
          <h1 style="font-size: 220%; font-family: 'Noto Sans Thai', sans-serif;">ความหมายของฮัจญ์</h1> 
          <p style="font-size: 150%;">ไปเยี่ยมบ้านอันศักดิ์สิทธิ์ของพระเจ้า เพื่อประกอบพิธีกรรมพิเศษ</p>
          <h3>กฎฮัจญ์</h3>
          <p style="font-size: 150%;">ฮัจญ์เป็นหนึ่งในพันธะของศาสนาอิสลาม</p>
        </div>
        
  </section><!-- End Hero -->
  <section id="why-us" class="why-us section-bg">
    <div class="container-fluid" data-aos="fade-up">

      <div class="row">
        <div class="accordion-list">
            <ul>
              <li>
                <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Hajj <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                  <p style="font-size: 150%;">
                    การประกอบพิธีฮัจญ์ คือ การเดินทางไปปฏิบัติศาสนกิจที่นครมักกะฮฺ ประเทศซาอุดิอารเบีย ในเดือนซุลฮิจญะฮฺของทุกปี ซึ่งศาสนกิจข้อนี้เป็นหน้าที่สำหรับมุสลิมทั้งชายและหญิงทุกคนที่มีความสามารถทางด้านร่างกาย ทรัพย์สิน โดยก่อนที่จะเดินทางสู่นครมักกะฮฺ จำเป็นจะต้องมีการเนียตอิหฺรอม พร้อมสวมชุดอิหฺรอม (ผ้าขาวสองผืน) ที่มีกอต (จุดที่ถูกกำหนดไว้แล้ว)
                  </p>
                </div>
              </li>

              <li>
                <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Umrah <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                  <p style="font-size: 150%;">
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
                  <p style="font-size: 150%;">
                    สถานที่ท่องเที่ยวในประเทศไทยมีอยู่มากมาย ทั้งที่เที่ยวทะเล ภูเขา วัด หรือวิถีชีวิตของผู้คน การออกไปท่องเที่ยวพักผ่อนตามจังหวัดต่าง ๆ เพื่อชาร์จแบตฯ เพิ่มพลังชีวิตให้กับตัวเอง จึงไม่แปลกที่พอถึงเทศกาลหยุดยาวทีไร สถานที่ท่องเที่ยวทั่วประเทศจะเต็มไปด้วยผู้คนที่ไปสูดอากาศบริสุทธิ์ เสพวิวสวย ๆ ชมวิถีชีวิตของชาวบ้าน หรือชิมอาหารท้องถิ่นอร่อย ๆ
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>

    </div>
  </section>
@include ('includes/footer')