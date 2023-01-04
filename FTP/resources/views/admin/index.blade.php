@include('admin/includes/header')


@include('admin/includes/sidebar')


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
        @include('admin/includes/navbar')
        <!-- Navbar End -->


            @php
            use Illuminate\Support\Carbon;
            // $current_timestamp = Carbon::now()->timestamp;
            // return dd($current_timestamp);

            $current_date_time = Carbon::now()->toDateTimeString(); 
            // return dd($current_date_time);

            $cu = 0;
            $ch = 0;
        foreach ($umrahpackages as $umrah) {
            
            if($umrah->user_id == auth()->user()->id)
            {
                foreach ($bookings as $i => $booking)
                {   
                    if($booking['umrah_package_id'] != null){
                        $cu++;
                        $umrah_amount[$cu] =  $booking['paid_amount'];
                    }
                }
            }
        }

        foreach ($hajjpackages as $hajj) {
        
            if($hajj->user_id == auth()->user()->id)
            {
                foreach ($bookings as $i => $booking) {
                    if($booking['hajj_package_id'] != null){
                        $ch++;
                        $hajj_amount[$ch] =  $booking['paid_amount'];
                    }   
                }   
            }
        
            
        }
            $hajj_total =0;
            $umrah_total =0;

            for($i=1; $ch >= $i; $i++){

                if($i==1){
                    $hajj_total = $hajj_amount[$i];
                }
                if($i>1){
                    $hajj_total = $hajj_amount[$i] + $hajj_total;
                }
            }


            for($i=1; $cu >= $i; $i++){

                if($i==1){
                    $umrah_total = $umrah_amount[$i];
                }
                
                if($i>1){
                    $umrah_total = $umrah_amount[$i] + $umrah_total;
                }
            }

             @endphp



            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-sm-12 col-xl-12">
                        <h4>This year</h4>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Umrah income</p>
                                <h6 class="mb-0">{{$umrah_total}}฿</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Hajj income</p>
                                <h6 class="mb-0">{{$hajj_total}}฿</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total revenue</p>
                                <h6 class="mb-0">{{$hajj_total+$umrah_total}}฿</h6>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-12">
                        <h4>Last year</h4>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Umrah income</p>
                                <h6 class="mb-0">0฿</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Hajj income</p>
                                <h6 class="mb-0">0฿</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total revenue</p>
                                <h6 class="mb-0">0฿</h6>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$</h6>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$</h6>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- Sale & Revenue End -->




            <!-- Umrah bookings Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Umrah bookings</h6>
                        <a class="show" href="{{route('umrah_bookings')}}">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Package ID</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">paid</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 0; @endphp
                   @foreach($bookings as $booking)
                   @foreach($umrahpackages as $umrah)
                   @foreach($users as $user)
                   @if($umrah->id == $booking->umrah_package_id) 
                   @if($umrah->user_id == auth()->user()->id)
                   @if($user->id == $booking->booker_id)
                                @php $counter++; @endphp
                                <tr>
                                    <td>{{$counter}}</td>
                                    <td>Umrah({{$booking['umrah_package_id']}})</td>
                                    <td>{{$user->fstname.' '.$user->lstname}}</td>
                                    <td>{{$booking['paid_amount']}}฿</td>
                                    <td>{{$booking['payment_status']}}</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                                        @endif
                   @endif
                   @endif
                   @endforeach
                   @endforeach
                   @endforeach           
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Umrah bookings End -->


             <!-- Hajj bookings Start -->
             <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Hajj bookings</h6>
                        <a class="show" href="{{route('hajj_bookings')}}">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Package ID</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">paid</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                    @php $counter = 0; @endphp
                   @foreach($bookings as $i=>$booking)
                   @foreach($hajjpackages as $hajj)
                   @foreach($users as $user)
                   @if($hajj->id == $booking->hajj_package_id) 
                   @if($hajj->user_id == auth()->user()->id)
                   @if($user->id == $booking->booker_id)
                            @php $counter++; @endphp
                                <tr>
                                    <td>{{$counter}}</td>
                                    <td>Hajj({{$booking['hajj_package_id']}})</td>
                                    <td>{{$user->fstname.' '.$user->lstname}}</td>
                                    <td>{{$booking['paid_amount']}}฿</td>
                                    <td>{{$booking['payment_status']}}</td>
                                    <td><a class="btn btn-sm btn-primary" href="">Detail</a></td>
                                </tr>
                   @endif
                   @endif
                   @endif
                   @endforeach
                   @endforeach
                   @endforeach
                   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Hajj bookings End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Worldwide Sales</h6>
                                <a class="show" href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Salse & Revenue</h6>
                                <a class="show" href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sales Chart End -->


            


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a class="show" href="">Show All</a>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a class="show" href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">To Do List</h6>
                                <a class="show" href="">Show All</a>
                            </div>
                            <div class="d-flex mb-2">
                                <input class="form-control bg-transparent" type="text" placeholder="Enter task">
                                <button type="button" class="btn btn-primary ms-2">Add</button>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox" checked>
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span><del>Short task goes here...</del></span>
                                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-2">
                                <input class="form-check-input m-0" type="checkbox">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <span>Short task goes here...</span>
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->

            @include('admin/includes/footer')