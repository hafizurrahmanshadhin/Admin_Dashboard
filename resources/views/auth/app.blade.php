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
    <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="bg-overlay"></div>
        <div class="auth-page-content overflow-hidden pt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('auth.partials.footer')
    </div>
    {{-- JAVASCRIPT --}}
    <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('backend/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('backend/js/plugins.js') }}"></script>
    @stack('scripts')
</body>

</html>
