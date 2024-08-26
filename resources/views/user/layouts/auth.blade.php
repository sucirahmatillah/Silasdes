<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    @hasSection('title')
        <title>@yield('title')&nbsp;-&nbsp;{{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    <!-- Favicons -->
    <link href="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png' }}" rel="icon">
    <link href="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png' }}"
        rel="apple-touch-icon">

    <!-- CSS files -->
    <link href="{{ asset('') }}dashboard/assets/css/tabler.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}dashboard/assets/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}dashboard/assets/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}dashboard/assets/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}dashboard/assets/css/demo.min.css" rel="stylesheet" />
    <link href="{{ asset('') }}dashboard/assets/vendors/toastr/build/toastr.min.css" rel="stylesheet">
    @stack('style')
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-3">
                <a href="{{ url('/') }}" class="navbar-brand navbar-brand-autodark">
                    <img src="{{ asset('') }}{{ kantorDesa() ? 'kantor-desa/' . kantorDesa()->logo : 'logo.png' }}"
                        height="50" alt="logo">
                </a>
            </div>
            @yield('content')
        </div>
    </div>
    <!-- Js Core -->
    <script src="{{ asset('') }}dashboard/assets/js/tabler.min.js" defer></script>
    <!-- Vendor JS -->
    <script src="{{ asset('') }}dashboard/assets/vendors/jquery/jquery-3.5.1.js"></script>
    <script src="{{ asset('') }}dashboard/assets/vendors/toastr/build/toastr.min.js"></script>

    <!-- Libs JS -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @if (Session::has('success'))
        <script>
            toastr["success"]("{{ Session::get('success') }}")
        </script>
    @endif
    @stack('script')
</body>

</html>
