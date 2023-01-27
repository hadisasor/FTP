@php $route = Route::current()->getName();  @endphp
        <!-- Sidebar Start -->
        <div class="sidebar" style="background-color: #fff; box-shadow: 1px 1px 30px 1px">
            <nav class="navbar  navbar-light" style="background-color: #a47e1b 1px 1px 30px 1px">
                <a href="{{route('Home')}}" class="navbar-brand mx-4 mb-3">
                <div class="row">    
                    <div class="col-xl-4"  style="padding-top:15px; text-align:center;"><img src="{{asset('../../img/FLogo.png')}}" alt="" style="width: 50px; margin-left:auto margin-right:auto; align-content:center;" ></div>
                    <div class="col-xl-4"  style="padding-top:23px; text-align:center;"> <h1> <p style="font-size:15px">Fatoni Travel <br> Limited Partnership</p></h1> </div>
                </div>
                </a>
                <div class="d-flex align-items-center  p-md-3" style="background-color:#a47e1b; width:100%; height:90px;">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{auth()->user()->fstname}} {{auth()->user()->lstname}}</h6>
                        <span>{{auth()->user()->userType}}</span>
                    </div>
                </div>

                    <div class="navbar-nav w-100 ">
                            <a href="{{route('dash')}}" class="nav-item nav-link @if($route == 'dash') active show @endif"><i class="fa fa-laptop me-2"></i>Dashboard</a>
                            
                            @if (auth()->user()->userType == 'Admin')
                            {{-- Users dropdown --}}
                            
                                <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle @if ($route == 'toksehs' || $route == 'admins' || $route == 'pilgrims')show active @endif" @if ($route == 'toksehs' || $route == 'admins' || $route == 'pilgrims') aria-expanded="true" @endif  data-bs-toggle="dropdown"><i class="bi bi-people me-2"></i>Users</a>
                                <div class="dropdown-menu bg-transparent border-0 @if ($route == 'toksehs' || $route == 'admins' || $route == 'pilgrims') show @endif"   >
                                    <a href="{{route('admins')}}" class="dropdown-item @if ($route =='admins') active @endif" >Admin</a>
                                    <a href="{{route('toksehs')}}" class="dropdown-item @if ($route =='toksehs') active @endif" >Toksehs</a>
                                    <a href="{{route('pilgrims')}}" class="dropdown-item @if ($route =='pilgrims') active @endif" >Pilgrims</a>
                                </div>
                            </div>  
                            @endif
                            
                            {{-- Packages dropdown --}}
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle @if ($route == 'umrahpackages' || $route == 'hajjpackages' || $route == 'hajjpackage' || $route == 'umrahpackage' || $route == 'create_hajj' || $route == 'create_umrah')  active show" aria-expanded="true" @endif aria-expanded="none" data-bs-toggle="dropdown"><i class="bi bi-box-seam me-2"></i>Packages</a>
                                <div class="dropdown-menu bg-transparent border-0 @if ($route == 'umrahpackages' || $route == 'hajjpackages' || $route == 'hajjpackage' || $route == 'umrahpackage' || $route == 'create_hajj' || $route == 'create_umrah') active show @endif">
                                    <a href="{{route('umrahpackages')}}" class="dropdown-item @if ($route == 'umrahpackages' || $route == 'create_umrah' || $route == 'umrahpackage') active @endif">Umrah packages</a>
                                    <a href="{{route('hajjpackages')}}" class="dropdown-item @if ($route == 'hajjpackages' || $route == 'create_hajj' || $route == 'hajjpackage') active @endif">Hajj packages</a>
                            
                                </div>
                            </div>

                            {{-- Pages dropdown --}}
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle  @if($route == 'hajj_bookings' || $route == 'umrah_bookings') active show"  aria-expanded="true" @endif aria-expanded="none" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Bookings</a>
                                <div class="dropdown-menu bg-transparent border-0  @if ($route == 'hajj_bookings' || $route == 'umrah_bookings') active show @endif">

                                    <a href="{{route('hajj_bookings')}}" class="dropdown-item  @if ($route == 'hajj_bookings') active @endif">Hajj bookings</a>
                                    <a href="{{route('umrah_bookings')}}" class="dropdown-item  @if ($route == 'umrah_bookings') active @endif">Umrah bookings</a>
                
                                </div>
                            </div>
                    <!-- Settings dropdown -->
                            <div class="nav-item dropdown ">
                                <a href="#" class="nav-link dropdown-toggle  @if($route == 'gallery_set' || $route == 'package_managment') active show"  aria-expanded="true" @endif aria-expanded="none" data-bs-toggle="dropdown"><i class="bi bi-gear-fill"></i>Settings</a>
                                <div class="dropdown-menu bg-transparent border-0  @if ($route == 'gallery_set' || $route == 'package_managment') active show @endif">

                                    <a href="{{route('gallery_set')}}" class="dropdown-item @if ($route == 'gallery_set') active show @endif">Gallery</a>
                                    <a href="{{route('package_managment')}}" class="dropdown-item @if ($route == 'package_managment') active show @endif">Package settings</a>
                                    
                                    </div>
                            </div>

                    </div>
            </nav>
        </div>
        <!-- Sidebar End -->