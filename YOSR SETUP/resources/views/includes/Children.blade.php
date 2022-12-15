@extends('Home')

@section('hajj')
<section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      
      <div class="section-title">
        <a href="hajjpackages"><h2>Hajj Packages</h2></a>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row">
        @foreach ($hajjpackages as $hajjpackage)
        
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box">
            <!--<div class="icon"><i class="bx bxl-dribbble"></i></div>-->
            <div class="image-container"> <img src="{{asset('../../img/Ka3bah.jpg')}}"> </div> 
              <h4><a>Deluxe Package</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                  <div class="book-container">
                    <a href="#about" class="book btn-get-started scrollto">Book now</a>
                    <a href="HajjPackagePage/{{$hajjpackage['id']}}" class="book btn-get-started scrollto">view details</a>
                  </div>
            </div>
        </div>
        @break ($hajjpackage['id']==4)
        @endforeach

      </div>

    </div>
  </section>

  @endsection

  

@section('umrah')
<section id="portfolio" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <a href="umrahpackages"><h2>Umrah Packages</h2></a>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <div class="row">

      @foreach ($umrahpackages as $umrahpackage)
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
          <div class="icon-box">
            <div class="image-container"> <img src="{{asset('../../img/Ka3bah.jpg')}}"> </div> 
            <h4><a>Saver Package</a></h4>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            <div class="book-container">
              <a href="#about" class="book btn-get-started scrollto">Book now</a>
              <a href="#" class="book btn-get-started scrollto">view details</a>
            </div>
          </div>
        </div>
      @break ($umrahpackage['id'] == 4)
      @endforeach
      </div>

    </div>
  </section>
 
  @endsection