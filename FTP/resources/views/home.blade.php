@include('includes/header')

@include('includes.cta')

  
  <main id="main">



    <!-- ======= About Us Section ======= -->
    <br><br><br><br><br>


@include('includes.gallery')

{{-- 
@include('includes.modals')
 --}}


  <!-- <div class="pbtn">
    <a href="#">More</a>
  </div> -->
</div>

<!--      Gallery end     -->


@include('includes.portofolio')
   


    <div style="background-color: #f3f5fa">
    <!-- ======= Hajj Section ======= -->
    
    <div class="section-title mt-3">
      <h2> <a href="hajjpackages">Hajj Packages</a></h2>
       </div>
    
    @include('includes.hajj')

  
    <!-- End Hajj Section -->


    <!-- ======= Umrah Section ======= -->
  
    @yield('umrah')

  
    <!-- End Umrah Section -->


{{--     
    @yield('Travel') --}}


    
    @yield('hotels')





    </main><!-- End #main -->
  </div>
    @include ('includes/footer')



