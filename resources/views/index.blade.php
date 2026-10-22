<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="rilind">

<head>
    <meta charset="utf-8">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="theme-color" content="#272F34" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="https://emiratesgraphic.com/img/favicon-16x16.png">
    <!-- =============================================================== -->
    <link rel="stylesheet" href="{{url('v4 bootstrap/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/build.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('css/1app.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/app.min.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{url('css/seo_team.css')}}"> -->
    <link rel="stylesheet" href="https://emiratesgraphic.com/general_all_pages_inc/css/bottom_contact_css.css">
    <link rel="stylesheet" href="css/style2025.css">

    <script src="{{url('js/angular.min.js')}}"></script>
    <script src="{{url('js/angular-sanitize.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{url('js/base.min.js')}}"></script>
    <script src="{{url('v4 bootstrap/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('js/app.js')}}"></script>
    @yield('title_and_meta')
    {{-- 2026-10-23: self-referencing canonical when the page does not set one (skip noindex pages e.g. 404) --}}
    @php($egHead = $__env->yieldContent('title_and_meta'))
    @if(stripos($egHead, 'rel="canonical"') === false && stripos($egHead, 'noindex') === false)
    <link rel="canonical" href="https://emiratesgraphic.com{{ request()->path() === '/' ? '/' : '/'.request()->path() }}">
    @endif
    <style media="screen">
        .bg-init,
        .animsition-overlay-slide {
            z-index: 9 !important;
            background-color: #E82A2A !important;
            display: block;
            background-image: url('/img/Group 358.svg');
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
        }
    </style>

    
        @include('includes.ai-script')
</head>

<body class="bg-init" ng-controller="HeaderCtrl">
    <!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/146028534.js"></script>
<!-- End of HubSpot Embed Code -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4CGC7M" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

    <div class="header">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
        @include('navbar.navbar')
    </div>
    <div>
        @yield('content')
    </div>
    <span class="no_foot_spec">
        @include('includes.footer')
    </span>
    @include('includes.market_pop')
</body>

<!-- <script src="{{url('js/magnetCurs.js')}}"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Script ZONE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
<script src="{{url('/js/script_home.min.js')}}"></script>
<script src="{{url('/js/notify.js')}}"></script>
<script src="{{url('/js/email-config.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.2
    });
</script>
<!-- Start of HubSpot Embed Code -->
<!-- <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3333064.js"></script> -->
<script>
    function openNav() {
        document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.height = "0%";
    }
</script>
<script>
    $(document).ready(function () {
        $("#button_one_s").click(function () {
            $("#menu_drop").toggleClass("mainrilind");
            $("#button_one_s").toggleClass("transfrom_b");
        });
    });
</script>
<script>
    // When the user scrolls the page, execute myFunction 
    window.onscroll = function () {
        myFunction()
    };

    function myFunction() {
        var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var scrolled = (winScroll / height) * 100;
        document.getElementById("myBar").style.width = scrolled + "%";
    }
</script>


</html>