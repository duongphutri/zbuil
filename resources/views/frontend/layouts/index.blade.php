<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Builderz - Construction Company Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href=" {{ asset('assets/lib/flaticon/font/flaticon.css') }} " rel="stylesheet">
        <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick-theme.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <div>
            @include('frontend.includes.header')
            @yield('content')
            @include('frontend.includes.footer')
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src=" {{asset('assets/lib/easing/easing.min.js')}} "></script>
        <script src=" {{asset('assets/lib/wow/wow.min.js')}} "></script>
        <script src=" {{asset('assets/lib/owlcarousel/owl.carousel.min.js')}} "></script>
        <script src=" {{asset('assets/lib/isotope/isotope.pkgd.min.js')}} "></script>
        <script src=" {{asset('assets/lib/lightbox/js/lightbox.min.js')}} "></script>
        <script src=" {{asset('assets/lib/waypoints/waypoints.min.js')}} "></script>
        <script src=" {{asset('assets/lib/counterup/counterup.min.js')}} "></script>
        <script src=" {{asset('assets/lib/slick/slick.min.js')}} "></script>

        <!-- Template Javascript -->
        <script src=" {{asset('assets/js/main.js')}} "></script>
    </body>
</html>
