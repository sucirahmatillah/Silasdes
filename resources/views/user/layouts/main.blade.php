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
    <!-- Libs CSS -->

    <!-- Vendor CSS -->
    <link href="{{ asset('') }}dashboard/assets/vendors/dataTables/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="{{ asset('') }}dashboard/assets/vendors/select2/select2.min.css" rel="stylesheet">
    <link href="{{ asset('') }}dashboard/assets/vendors/select2/select2-bootstrap-5-theme.min.css"
        rel="stylesheet">
    <link href="{{ asset('') }}dashboard/assets/vendors/toastr/build/toastr.min.css" rel="stylesheet">
    <link href="{{ asset('') }}dashboard/assets/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    @stack('style')
</head>

<body>
    <div class="page">
        @include('user.layouts.header')
        <div class="page-wrapper">
            @yield('content')
            @include('user.layouts.footer')
        </div>
    </div>

    <!-- Js Core -->
    <script src="{{ asset('') }}dashboard/assets/js/tabler.min.js" defer></script>
    <!-- Libs JS -->

    <!-- Vendor JS -->
    <script src="{{ asset('') }}dashboard/assets/vendors/jquery/jquery-3.5.1.js"></script>
    <script src="{{ asset('') }}dashboard/assets/vendors/dataTables/jquery.dataTables.js"></script>
    <script src="{{ asset('') }}dashboard/assets/vendors/dataTables/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('') }}dashboard/assets/vendors/select2/select2.full.min.js"></script>
    <script src="{{ asset('') }}dashboard/assets/vendors/toastr/build/toastr.min.js"></script>
    <script src="{{ asset('') }}dashboard/assets/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="{{ asset('') }}dashboard/assets/vendors/ckeditor5/ckeditor.js"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    @if (Session::has('success'))
        <script>
            toastr["success"]("{{ Session::get('success') }}")
        </script>
    @endif

    @stack('script')
</body>

</html>
