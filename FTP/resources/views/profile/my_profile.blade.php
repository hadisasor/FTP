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
              <div class="p-5"><!--tabs of info beginning-->
                  <h4>
                  <ul class="tabs nav nav-pills mb-3 centering" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-include-tab" data-bs-toggle="pill" data-bs-target="#pills-include" type="button" role="tab" aria-controls="pills-include" aria-selected="true">Review</button>
                      </li>

                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-exclude-tab" data-bs-toggle="pill" data-bs-target="#pills-exclude" type="button" role="tab" aria-controls="pills-exclude" aria-selected="false">Packages</button>
                      </li>
                  </ul>
                  </h4>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-include" role="tabpanel" aria-labelledby="pills-include-tab">
                        <ul style="text-align:left;">  
                          @include('includes.leader_review')
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-exclude" role="tabpanel" aria-labelledby="pills-exclude-tab">
                      <ul style="text-align:left;">  
                          @include('profile.includes.packages')
                      </ul>
                    </div>
                  </div>
                </div><!--tabs of info Ending-->
@include('includes.footer')