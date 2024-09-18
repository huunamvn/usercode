<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Admin</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/assets/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/assets/css/styles.css') }}">



    <!-- Font -->
    <link rel="stylesheet" href="{{ asset('admins/assets/font/fonts.css') }}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{ asset('admins/assets/icon/style.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('admins/assets/images/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('admins/assets/images/favicon.png') }}">

    @yield('css')
</head>

<body>

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap loader-off">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->

                {{-- sidebar --}}
                @include('admins.layouts.blocks.sidebar')

                <!-- section-content-right -->
                <div class="section-content-right">
                    {{-- header --}}
                    @include('admins.layouts.blocks.header')

                    <!-- main-content -->
                    <div class="main-content">
                        {{-- content --}}
                        @yield('content')

                        {{-- footer --}}
                        @include('admins.layouts.blocks.footer')
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    @yield('js')
    <script src="{{ asset('admins/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admins/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admins/assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('admins/assets/js/zoom.js') }}"></script>
    <script src="{{ asset('admins/assets/js/morris.min.js') }}"></script>
    <script src="{{ asset('admins/assets/js/raphael.min.js') }}"></script>
    <script src="{{ asset('admins/assets/js/morris.js') }}"></script>
    <script src="{{ asset('admins/assets/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('admins/assets/js/jvectormap-us-lcc.js') }}"></script>
    <script src="{{ asset('admins/assets/js/jvectormap-data.js') }}"></script>
    <script src="{{ asset('admins/assets/js/jvectormap.js') }}"></script>
    <script src="{{ asset('admins/assets/js/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('admins/assets/js/apexcharts/line-chart-1.js') }}"></script>
    <script src="{{ asset('admins/assets/js/apexcharts/line-chart-2.js') }}"></script>
    <script src="{{ asset('admins/assets/js/apexcharts/line-chart-3.js') }}"></script>
    <script src="{{ asset('admins/assets/js/apexcharts/line-chart-4.js') }}"></script>
    <script src="{{ asset('admins/assets/js/apexcharts/line-chart-5.js') }}"></script>
    <script src="{{ asset('admins/assets/js/apexcharts/line-chart-6.js') }}"></script>
    <script src="{{ asset('admins/assets/js/apexcharts/line-chart-7.js') }}"></script>
    <script src="{{ asset('admins/assets/js/switcher.js') }}"></script>
    <script defer src="{{ asset('admins/assets/js/theme-settings.js') }}"></script>
    <script src="{{ asset('admins/assets/js/main.js') }}"></script>

</body>

</html>
