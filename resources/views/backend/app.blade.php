<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- Layout config Js --}}
    <script src="{{ asset('backend/js/layout.js') }}"></script>
    {{-- Bootstrap Css --}}
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- Icons Css --}}
    <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- App Css --}}
    <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- custom Css --}}
    <link href="{{ asset('backend/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    @stack('styles')
</head>

<body>
    <div id="layout-wrapper">
        @include('backend.partials.header')
        @include('backend.partials.sidebar')
        <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{-- Pages Content --}}
                    @yield('content')
                    {{-- Pages Content --}}
                </div>
            </div>
            @include('backend.partials.footer')
        </div>
    </div>
    {{-- start back-to-top --}}
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    {{-- end back-to-top --}}

    {{-- preloader --}}
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    @include('backend.partials.customizer_settings')
    {{-- JAVASCRIPT --}}
    <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('backend/js/plugins.js') }}"></script>
    @stack('scripts')
    {{-- App js --}}
    <script src="{{ asset('backend/js/app.js') }}"></script>
</body>

</html>
