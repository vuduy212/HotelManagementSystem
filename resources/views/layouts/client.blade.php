<!DOCTYPE HTML>
<html>

<head>
    <title>The Paradise-Hotel Website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/client/style.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/client/jquery-ui.css') }}" rel="stylesheet">
    <script src="{{ asset('js/client/jquery.min.js') }}"></script>
    <!--start slider -->
    <link rel="stylesheet" href="{{ asset('css/client/fwslider.css') }}" media="all">
    <script src="{{ asset('js/client/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/client/css3-mediaqueries.js') }}"></script>
    <script src="{{ asset('js/client/fwslider.js') }}"></script>
    <!--end slider -->
    <!---strat-date-piker---->
    <script src="{{ asset('js/client/jquery-ui.js') }}"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <!---/End-date-piker---->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/client/JFGrid.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/client/JFFormStyle-1.css') }}" />
    <script type="text/javascript" src="{{ asset('js/client/JFCore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/client/JFForms.js') }}"></script>
    <!-- Set here the key for your domain in order to hide the watermark on the web server -->
    <script type="text/javascript">
        (function() {
            JC.init({
                domainKey: ''
            });
        })();
    </script>
    <!--nav-->
    <script>
        $(function() {
            var pull = $('#pull');
            menu = $('nav ul');
            menuHeight = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });

            $(window).resize(function() {
                var w = $(window).width();
                if (w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
</head>

<body>
    @include('layouts.header_client')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer_client')

</body>

</html>
