@include('includes/header')


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{route('Home')}}">Home</a></li>
        <li>Visa Page</li>
      </ol>
      <h2>Visa Details</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="img/FTimage/visa1.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="img/FTimage/visa2.jpg" alt="">
              </div>

              <div class="swiper-slide">
                <img src="img/FTimage/visa3.jpg" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>Why we need your Visa information</h3>
            <ul>
              <li><strong>Reason 1</strong>: 1</li>
              <li><strong>Reason 2</strong>: 2</li>
              <li><strong>Benifets</strong>: Easy prossess</li>
              <li><strong>Policy</strong>: Security</li>
            </ul>
          </div>
          <div class="portfolio-description">
            <h2>What is Visa?</h2>
            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
            <div class="book-container">
                <a href="/VisaBook" class="book btn-get-started scrollto">Get Visa</a>
              </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Details Section -->



@include ('includes/footer')