<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title') &mdash; {{ config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="RSIA Nuraida hadir sebagai suatu pusat layanan kesehatan terpadu dengan unggulan pelayanan Fertilitas dan Program Punya Anak yang hadir untuk melayani masyarakat di Kota Bogor dan sekitarnya" />
    <meta name="keywords" content="RSIA, RS, Rumah Sakit Islam, Rumah Sakit Islam Bogor, Bogor, RSIA NURAIDA, RS NURAIDA, RSIA NURAIDA BOGOR, RS NURAIDA BOGOR" />
    <meta name="author" content="Aldhy Trisnaldi" />
    <meta name="email" content="aldhy.terror@gmail.com" />
    <meta name="website" content="https://rsianuraida.com" />
    <link href="https://rsianuraida.com/assets/images/icon.png" rel="shortcut icon">
    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/css/materialdesignicons.min.css') !!}" rel="stylesheet" type="text/css" />
    <link href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css" rel="stylesheet">
    <link href="{!! asset('assets/css/aos.css') !!}" rel="stylesheet" type="text/css" />
    <link href="{!! asset('assets/css/owl.carousel.min.css') !!}" rel="stylesheet" />
    <link href="{!! asset('assets/css/owl.theme.default.min.css') !!}" rel="stylesheet"/>
    <link href="{!! asset('assets/css/animate.css') !!}" rel="stylesheet" />
    <link href="{!! asset('assets/css/animations-delay.css') !!}" rel="stylesheet" />
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="{!! asset('assets/css/colors/green.css') !!}" rel="stylesheet" id="color-opt">
    @stack('stylesheet')
</head>

<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    @yield('app')

    <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
    <script src="{!! asset('assets/js/jquery-3.5.1.min.js') !!}"></script>
    <script src="{!! asset('assets/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="{!! asset('assets/js/jquery.easing.min.js') !!}"></script>
    <script src="{!! asset('assets/js/small_menu.js') !!}"></script>
    <script src="{!! asset('assets/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('assets/js/owl.init.js') !!} "></script>
    <script src="{!! asset('assets/js/feather.min.js') !!}"></script>
    <script src="https://unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
    <script src="{!! asset('assets/js/app.js') !!}"></script>
</body>
</html>
