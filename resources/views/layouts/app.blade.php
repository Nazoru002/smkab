<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="{{ asset('') }}vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('') }}css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('') }}vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('') }}vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('') }}vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('') }}vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('') }}vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="{{ asset('') }}css/style.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('') }}css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('') }}img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{ asset('') }}img/apple-touch-icon.png">

    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== Navbar-Header ==========-->
        @include('layouts.navbar')
        <!--========== End-Navbar-Header ==========-->

        <!--========== First-Content ==========-->
        @yield('content-first')
        <!--========== End-First-Content ==========-->
        
        <!--========== Second-Content ==========-->
        @yield('content-second')
        <!--========== End-Second-Content ==========-->

        <!--========== Parallax ==========-->
        @yield('parallax')
        <!--========== End-Parallax ==========-->
        
        <!--========== Culture ==========-->
        @yield('culture')
        <!--========== End-Culture ==========-->

        <!--========== Subscribe ==========-->
        @yield('subscribe')
        <!--========== End-Subscribe ==========-->

        <!--========== Portofolio ==========-->
        @yield('portofolio')
        <!--========== End-Portofolio ==========-->

        <!--========== Portofolio-Gallery ==========-->
        @yield('portofolio-gallery')
        <!--========== End-Portofolio-Gallery ==========-->

        <!--========== Testimonials ==========-->
        @yield('testimonials')
        <!--========== End-Testimonials ==========-->

        <!-- Clients -->
        @yield('clients')
        <!-- End Clients -->

        <!-- News -->
        @yield('news')
        <!-- End News -->

        <!-- Counter -->
        @yield('counter')
        <!-- End Counter -->

        <!-- Feedback Form -->
        @yield('feedback-form')
        <!-- End Feedback Form -->

        <!-- Google Map -->
        @yield('google-map')
        <!-- End Google Map -->

        <!--========== FOOTER ==========-->
        @yield('footer')
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script> --}}
        <script type="text/javascript" src="{{ asset('') }}vendor/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/bootstrap/js/bootstrap.min.js"></script>
        {{-- <script type="text/javascript" src="{{ asset('') }}vendor/jquery.smooth-scroll.min.js"></script> --}}
        <script type="text/javascript" src="{{ asset('') }}vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/counterup.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="{{ asset('') }}js/global.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/components/swiper.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/components/counter.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/components/parallax.min.js"></script>
        {{-- <script type="text/javascript" src="{{ asset('') }}js/components/google-map.min.js"></script> --}}
        <script type="text/javascript" src="{{ asset('') }}js/components/wow.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/sweetalert.min.js"></script>
        <script type="text/javascript" src="{{ asset('') }}js/scrollify.js"></script>
        
        @yield('script')
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>