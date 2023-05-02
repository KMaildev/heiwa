<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="KidsPro - Kids Education & Kindergarten School HTML5 Template" />
    <meta name="keywords" content="kindergarten,children,kidsschool,school,baby,childschool,academy,course,education," />
    <meta name="author" content="ThemeMascot" />

    <title>Heiwa Co.,Ltd</title>

    <link href="{{ asset('data/logo.jpg') }}" rel="shortcut icon" type="image/png">
    <meta name="description" content="Heiwa Co.,Ltd" />
    <meta name="keywords" content="Heiwa Co.,Ltd, Japan, Japanese Language School, Training" />
    <meta name="author" content="Heiwa Co.,Ltd" />
    <meta property="og:title" content="Heiwa Co.,Ltd" />
    <meta property="og:image" content="{{ asset('data/logo.jpg') }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Heiwa Co.,Ltd" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/javascript-plugins-bundle.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/js/menuzord/css/menuzord.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <link id="menuzord-menu-skins" href="{{ asset('assets/css/menuzord-skins/menuzord-rounded-boxed.css') }}"
        rel="stylesheet" />

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('assets/css/colors/theme-skin-color-set1.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/javascript-plugins-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/menuzord/js/menuzord.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/revolution-slider/css/rs6.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/revolution-slider/extra-rev-slider1.css') }}">

    <script src="{{ asset('assets/js/revolution-slider/js/revolution.tools.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/js/rs6.min.js') }}"></script>
    <script src="{{ asset('assets/js/revolution-slider/extra-rev-slider1.js') }}"></script>


</head>

<body class="tm-container-1230px has-side-panel side-panel-right">
    <div class="side-panel-body-overlay"></div>
    <div id="wrapper" class="clearfix">

        @include('layouts.menu')

        @if (URL::current() == route('home'))
            @include('layouts.slider')
        @endif

        @yield('content')
        @include('layouts.footer')

    </div>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
