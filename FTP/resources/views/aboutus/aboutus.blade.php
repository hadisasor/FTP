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

  <div style="background-color: #f3f5fa">
{{-- company board start --}}
  
  @include('includes.ftlpboard')
{{-- company board end --}}

{{-- company seh start --}}

@include('includes.ftlpsah')
{{-- company seh end --}}
</div>
@include ('includes/footer')