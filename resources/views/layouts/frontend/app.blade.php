<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EduBlink | Online Education Platform</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/favicon.png')}}">
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/remixicon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/magnifypopup.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/odometer.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/animation.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/jqueru-ui-min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/tipped.min.css')}}">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.css')}}">

</head>

<body class="sticky-header ">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->

    @include('layouts.frontend.preloader')

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        @include('layouts.frontend.navbar')

        <!--=====================================-->
        <!--=        Main Area Start       	=-->
        <!--=====================================-->
        @yield('content')
        <!--=        Main Area End       	=-->
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <!-- Start Footer Area  -->
        @include('layouts.frontend.footer')
        <!-- End Footer Area  -->


    </div>

    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
	============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr.min.js')}}"></script>
    <!-- Jquery Js -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/sal.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/backtotop.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/magnifypopup.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/odometer.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/isotop.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/imageloaded.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/lightbox.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/paralax.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/paralax-scroll.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/svg-inject.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/vivus.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/tipped.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/smooth-scroll.min.js')}}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/isInViewport.jquery.min.js')}}"></script>

    <!-- Site Scripts -->
    <script src="{{ asset('frontend/assets/js/app.js')}}"></script>
</body>
</html>