<!DOCTYPE html>
<html class="no-js" lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Cogify AG') }} | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">

    <!-- Font Family CSS -->
    <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-all.min.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">

    <!-- animate-text CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate-text.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css">

    <!--
        Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from avobe)

        <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    -->

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

@include('web.partials.preloader')

@include('web.partials.header')

@include('web.partials.header-mobile')

@yield('content')

@include('web.partials.footer')

@include('web.partials.scroll-top-button')

@include('web.partials.nav.search')

<!-- Modernizer JS -->
<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

<!-- jQuery JS -->
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>

<!-- Bootstrap JS -->
<script src="assets/js/vendor/bootstrap.min.js"></script>

<!-- Swiper Slider JS -->
<script src="assets/js/plugins/swiper.min.js"></script>

<!-- Light gallery JS -->
<script src="assets/js/plugins/lightgallery.min.js"></script>

<!-- Waypoints JS -->
<script src="assets/js/plugins/waypoints.min.js"></script>

<!-- Counter down JS -->
<script src="assets/js/plugins/countdown.min.js"></script>

<!-- Isotope JS -->
<script src="assets/js/plugins/isotope.min.js"></script>

<!-- Masonry JS -->
<script src="assets/js/plugins/masonry.min.js"></script>

<!-- ImagesLoaded JS -->
<script src="assets/js/plugins/images-loaded.min.js"></script>

<!-- Wavify JS -->
<script src="assets/js/plugins/wavify.js"></script>

<!-- jQuery Wavify JS -->
<script src="assets/js/plugins/jquery.wavify.js"></script>

<!-- circle progress JS -->
<script src="assets/js/plugins/circle-progress.min.js"></script>

<!-- counterup JS -->
<script src="assets/js/plugins/counterup.min.js"></script>

<!-- wow JS -->
<script src="assets/js/plugins/wow.min.js"></script>

<!-- animation text JS -->
<script src="assets/js/plugins/animation-text.min.js"></script>

<!-- Vivus JS -->
<script src="assets/js/plugins/vivus.min.js"></script>

<!-- Some plugins JS -->
<script src="assets/js/plugins/some-plugins.js"></script>

<!--
    Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe)

    <script src="assets/js/plugins/plugins.min.js"></script>
-->

<!-- Main JS -->
<script src="assets/js/main.js"></script>


</body>

</html>
