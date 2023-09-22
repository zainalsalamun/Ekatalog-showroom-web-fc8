<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Bootstrap Template - Index</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('img/favicon.png') }}" rel="icon">
        <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- library CSS Files -->
        <link href="{{ asset('library/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('library/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('library/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('library/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('library/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('library/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('library/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('library/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>

    <body>
        <div id="app">
            <div class="main-wrapper">
                <!-- Header -->
                @include('components.header')


                <!-- Content -->
                @yield('main')

                <!-- Footer -->
                @include('components.footer')
            </div>
        </div>

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- library JS Files -->
        <script src="{{ asset('library/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('library/aos/aos.js') }}"></script>
        <script src="{{ asset('library/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('library/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('library/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('library/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>

    </body>

</html>
