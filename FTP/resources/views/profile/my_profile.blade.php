@include('includes.header')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex centering">
    @if(Session::get('paid_successfully'))
    <div class="alert alert-success">
        {{Session::get('paid_successfully')}}
    </div>
    @endif
    
    <div class="row gx-5">
      <div class="col-3">
          <img style="width:200px" class="px-4" src="{{asset('../../img/Yosr-02.png')}}">
      </div>
      @switch($myprofile)
      @case('true')
      <div class="col-9" style="color: white;" >
        <h1>{{auth()->user()->fstname}} {{auth()->user()->lstname}} ({{auth()->user()->userType}})</h1>
        <p>email: {{auth()->user()->email}} </p>
        <p>phone number: {{auth()->user()->phone}} </p>
    </div> 
      @break
      @case(null)
      <div class="col-9" style="color: white;">
        <h1>{{$user->fstname}} {{$user->lstname}} @if ($user->userType != 'Admin')({{$user->userType}})
          @elseif ($user->userType == 'Admin')
        (Tokseh) 
        @endif</h1>
        <p>email: {{$user->email}} </p>
        <p>phone number: {{$user->phone}} </p>
      </div> 
      @break
      @default
      @endswitch
    </div>
  </section><!-- End Hero -->             
              
                          @include('profile.includes.packages')
                      
@include('includes.footer')