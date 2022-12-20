<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
</head>

<body>
@include('includes.header')


@yield('content')



@include('includes.footer')

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



