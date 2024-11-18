<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
    <meta name="author" content="Indonez">
    <meta name="theme-color" content="#FCB42D">
    <!-- preload assets -->
    <link rel="preload" href="{{('front/assets/fonts/fa-brands-400.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{('front/assets/fonts/fa-solid-900.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{('front/assets/fonts/archivo-v18-latin-regular.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{('front/assets/fonts/archivo-v18-latin-300.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{('front/assets/fonts/archivo-v18-latin-700.woff2')}}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{('front/assets/css/style.css')}}" as="style">
    <link rel="preload" href="{{('front/assets/js/vendors/uikit.min.js')}}" as="script">
    <link rel="preload" href="{{('front/assets/js/utilities.min.js')}}" as="script">
    <link rel="preload" href="{{('front/assets/js/config-theme.js')}}" as="script">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{('front/assets/css/style.css')}}">
    <!-- uikit -->
    <script src="{{('front/assets/js/vendors/uikit.min.js')}}"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- touch icon -->
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon.png">
    <title>Homepage - Equity HTML5 Template</title>
</head>

<body>
    <!-- page loader begin -->
    <div class="page-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- page loader end -->
    <!-- header begin -->
   @include('layouts.front.nav')
    <!-- header end -->
    <main>
     @yield('content')
    </main>
    <!-- footer begin -->
    @include('layouts.front.footer')
    <!-- footer end -->
    <!-- to top begin -->
    <a href="#" class="to-top uk-visible@m" data-uk-scroll>
        Top<i class="fas fa-chevron-up" ></i>
    </a>
    <!-- to top end -->
    <!-- javascript -->
    <script src="{{('front/assets/js/vendors/tradingview-widget.min.js')}}"></script>
    <script src="{{('front/assets/js/vendors/particles.min.js')}}"></script>
    <script src="{{('front/assets/js/config-particles.js')}}"></script>
    <script src="{{('front/assets/js/utilities.min.js')}}"></script>
    <script src="{{('front/assets/js/config-theme.js')}}"></script>
</body>

</html>