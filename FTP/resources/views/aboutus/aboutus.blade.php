@include('includes/header')


@include('includes.cta')

<!-- ======= About Us Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>ห้างหุ้นส่วนจํากัด ฟาตอนี แทรเวิล
        <br>กิจการฮัจญ์ อัศศิดดีก</h2>
    </div>

    <div class="row content">
      <div class="col-lg-6">
        <p>
          Fatoni Travel Limited Partnership
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> We have services for Hajj</li>
          <li><i class="ri-check-double-line"></i> We have services for Umrah</li>
          <li><i class="ri-check-double-line"></i> We have services for turest travels in around Thailand</li>
        </ul>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0 mt-4">
        <p>
          Fatoni Travel Limited Partnership, provides several services to help you attempt your Hajj & Umrah, and for who want to visit Thailand we also can take in an amazing trip in Thailand.
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Us Section -->

  @include('includes.faq')

  @include('includes.gallery')

{{-- company board start --}}
  
  <div class="section-title mt-4">
    <h2>Fatoni travel <span>โครงสร้างคณะผู้นำกลุ่ม</span></h2>
  </div>
  <div class="pcontainer">
    <img style="width:100%; height:29.5vh; object-fit: cover;" id="img_edit" src="{{asset('img/FTimage/B-FTLP.png')}}" alt="">
  </div>
  
<div id="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.812);">
  <img id="modalImage" style="max-width: 80%; max-height: 80%; margin: 10% auto; display: block;" src="{{asset('img/FTimage/B-FTLP.png')}}">
</div>

  <button class="edit-btn oib" id="openImageButton">Open Image</button>
  
  {{-- </td> 
  <div class="bbox">
    <div class="dream">
      <img src="img/FTimage/B-FTLP.png" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
      <img src="" alt="">
    </div>
</div> --}}
{{-- company board end --}}

{{-- company seh start --}}

  <div class="section-title mt-4">
    <h2>Faotoni travel <span>โครงสร้างคณะผู้นำกลุ่ม (แซะห์)</span></h2>
  </div>
<div class="pcontainer mb-4" >
  
    <img style="width:100%; height:29.5vh; object-fit: cover;" id="img_edit" src="{{asset('img/FTimage/S-FTLP.jpg')}}" alt="">
</div>
<div id="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.812);">
  <img id="modalImage" style="max-width: 80%; max-height: 80%; margin: 10% auto; display: block;" src="{{asset('img/FTimage/S-FTLP.jpg')}}">
</div>

  <button class="edit-btn oib" id="openImageButton1">Open Image</button>
{{-- company seh end --}}
<!--
Gallery end
-->
<script>
  const button = document.getElementById("openImageButton");
  const modal = document.getElementById("modal");
  const modalImage = document.getElementById("modalImage");

  button.addEventListener("click", function() {
    modalImage.src = "{{asset('img/FTimage/B-FTLP.png')}}";
    modal.style.display = "block";
  });

  modal.addEventListener("click", function(event) {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });
</script>


<script>
  const button = document.getElementById("openImageButton1");
  const modal = document.getElementById("modal");
  const modalImage = document.getElementById("modalImage");

  button.addEventListener("click", function() {
    modalImage.src = "{{asset('img/FTimage/S-FTLP.jpg')}}";
    modal.style.display = "block";
  });

  modal.addEventListener("click", function(event) {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  });
</script>

@include ('includes/footer')