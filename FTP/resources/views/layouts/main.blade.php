<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
<!-- header section-->
        @include('includes.header')
<!--content section -->
@yield('content')

<!--footer section -->
@include('includes.footer')


    <!-- link that opens popup -->

    <!-- form itself end-->
        <form id="test-form" class="white-popup-block mfp-hide">
                <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>Check Availability</h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <input id="datepicker" placeholder="Check in date">
                                    </div>
                                    <div class="col-xl-6">
                                        <input id="datepicker2" placeholder="Check out date">
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Adult">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Children">1</option>
                                            <option value="1">2</option>
                                            <option value="2">3</option>
                                            <option value="3">4</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Room type">Room type</option>
                                            <option value="1">Laxaries Rooms</option>
                                            <option value="2">Deluxe Room</option>
                                            <option value="3">Signature Room</option>
                                            <option value="4">Couple Room</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Check Availability</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="{{URL::asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{URL::asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('js/ajax-form.js')}}"></script>
    <script src="{{URL::asset('js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{URL::asset('js/scrollIt.js')}}"></script>
    <script src="{{URL::asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{URL::asset('js/wow.min.js')}}"></script>
    <script src="{{URL::asset('js/nice-select.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('js/plugins.js')}}"></script>
    <script src="{{URL::asset('js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{URL::asset('js/contact.js')}}"></script>
    <script src="{{URL::asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.form.js')}}"></script>
    <script src="{{URL::asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{URL::asset('js/mail-script.js')}}"></script>

    <script src="{{URL::asset('js/main.js')}}"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>



</body>

</html>