<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('karma-shop/img/fav.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Site Title -->
    <title>Karma Shop</title>

    <!--
                CSS
                ============================================= -->
    <link rel="stylesheet" href="{{ asset('karma-shop/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('karma-shop/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('karma-shop/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('karma-shop/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('karma-shop/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('karma-shop/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.0.0/dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('karma-shop/css/main.css') }}">
</head>

<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('bootstrap-4.0.0/js/tests/vendor/jquery-1.9.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('bootstrap-4.0.0/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('karma-shop/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('karma-shop/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('karma-shop/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('karma-shop/js/nouislider.min.js') }}"></script>
    <script src="{{ asset('karma-shop/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('karma-shop/js/owl.carousel.min.js') }}"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('karma-shop/js/gmaps.min.js') }}"></script>
    <script src="{{ asset('karma-shop/js/main.js') }}"></script>
</body>

</html>
