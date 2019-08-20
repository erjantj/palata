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

        <section class="page">
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
            </div>
        </section>
        @component('_footer')
        @endcomponent
    </body>
</html>
