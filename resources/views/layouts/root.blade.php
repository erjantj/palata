<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/owl.carousel.min.css">
        <link rel="stylesheet" href="/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="/css/hover-min.css">
        <link rel="stylesheet" href="/css/rotate.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/style-consultation.css">
        <link rel="stylesheet" href="/css/colors/default-themes.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Khula|Merriweather|Neuton&display=swap" rel="stylesheet">

        <title>@yield('title')</title>
    </head>
    <body>
        @component('_header')
        @endcomponent

        @yield('main-content')

        @component('_footer')
        @endcomponent

        <script src="/js/jquery-3.4.1.min.js"></script>
        <script src="/js/jquery.inputmask.min.js"></script>
        <script src="/js/bootstrap.bundle.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxdhKC_EB71_upPMMLC17whhW3lu59ifo&callback=initMap" async defer></script>
        <script src="/js/app.js"></script>
    </body>
</html>
