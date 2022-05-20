<!-- icon list-->
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <!-- Site Title-->
    <title>Home</title>
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport"
        content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <link rel="icon" href="{{ asset('images/images/favicon.ico') }}" type="image/x-icon" />
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=Lato:400,700,400italic%7CPoppins:300,400,500,700" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_hotel.css') }}" rel="stylesheet">

    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }

    </style>
</head>

<body>
    <div class="ie-panel">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
                src="{{ asset('images/ie8-panel/warning_bar_0000_us.jpg') }}" height="42" width="820"
                alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
    </div>
    <!-- Page-->
    <div class="text-center page">
        <div class="page-loader">
            <div>
                <div class="page-loader-body">
                    <div class="loader">
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="window"></div>
                        <div class="door"></div>
                        <div class="hotel-sign">
                            <span>H</span><span>O</span><span>T</span><span>E</span><span>L</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.header_hotel')
        <div class="main">
            @yield('content')
        </div>
        @include('layouts.footer_hotel')
    </div>
    <!-- PANEL-->
    <!-- END PANEL-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- PhotoSwipe Gallery-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__cent"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript-->
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script_hotel.js') }}"></script>
    <!--Coded by Drel-->
</body>

</html>
