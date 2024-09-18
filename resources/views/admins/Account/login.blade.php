
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
@section('css')
@endsection

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <div class="login-page">
                <div class="left">
                    <div class="login-box" style="display:center">
                        <div>
                            <h3>Login to account Admin</h3>
                        </div>
                       
                        <form class="form-login flex flex-column gap22 w-full" action="index.html">
                            <fieldset class="email">
                                <div class="body-title mb-10 text-white">Email address <span class="tf-color-1">*</span></div>
                                <input class="flex-grow" type="email" placeholder="Enter your email address" name="email" tabindex="0" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="password">
                                <div class="body-title mb-10 text-white">Password <span class="tf-color-1">*</span></div>
                                <input class="password-input" type="password" placeholder="Enter your password" name="password" tabindex="0" value="" aria-required="true" required="">
                                <span class="show-pass">
                                    <i class="icon-eye view"></i>
                                    <i class="icon-eye-off hide"></i>
                                </span>
                            </fieldset>
                            <div class="flex justify-between items-center">
                                <div class="flex gap10">
                                    <input class="tf-check" type="checkbox" id="signed">
                                    <label class="body-text text-white" for="signed">Keep me signed in</label>
                                </div>                           
                            </div>
                            <button type="submit" class="tf-button w-full">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page -->
    </div>
@section('js')
@endsection
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
    <!-- /#wrapper -->