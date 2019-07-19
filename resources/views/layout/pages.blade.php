<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <base href="{{ asset('') }}">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="page/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="CodePixar">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Karma Shop</title>
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="page/css/linearicons.css">
    <link rel="stylesheet" href="page/css/font-awesome.min.css">
    <link rel="stylesheet" href="page/css/themify-icons.css">
    <link rel="stylesheet" href="page/css/bootstrap.css">
    <link rel="stylesheet" href="page/css/owl.carousel.css">
    <link rel="stylesheet" href="page/css/nice-select.css">
    <link rel="stylesheet" href="page/css/nouislider.min.css">
    <link rel="stylesheet" href="page/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="page/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="page/css/magnific-popup.css">
    <link rel="stylesheet" href="page/css/main.css">
</head>

<body>

<!-- Start Header Area -->
@include('layout.pages_parts.header')
<!-- End Header Area -->

@yield('content');

<!-- start footer Area -->
@include('layout.pages_parts.footer')
<!-- End footer Area -->

<script src="page/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="page/js/vendor/bootstrap.min.js"></script>
<script src="page/js/jquery.ajaxchimp.min.js"></script>
<script src="page/js/jquery.nice-select.min.js"></script>
<script src="page/js/jquery.sticky.js"></script>
<script src="page/js/nouislider.min.js"></script>
<script src="page/js/countdown.js"></script>
<script src="page/js/jquery.magnific-popup.min.js"></script>
<script src="page/js/owl.carousel.min.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="page/js/gmaps.min.js"></script>
<script src="page/js/main.js"></script>
@yield('script')
</body>

</html>