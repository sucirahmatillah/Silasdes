<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    @hasSection('title')
        <title>@yield('title')&nbsp;-&nbsp;{{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png' }}"
        rel="icon">
    <link href="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png' }}"
        rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('') }}web/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('') }}web/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}web/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('') }}web/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('') }}web/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('') }}web/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('') }}web/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('') }}web/assets/css/style.css" rel="stylesheet">
    @stack('style')
</head>

<body>

    @yield('content')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('') }}web/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('') }}web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}web/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('') }}web/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('') }}web/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{ asset('') }}web/assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{ asset('') }}web/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('') }}web/assets/js/main.js"></script>
    @stack('script')
</body>

</html>
