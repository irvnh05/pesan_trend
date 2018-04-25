<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="description" content="">
    <meta name="author" content="Nasir Khan Saikat http://nasirkhn.com">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" /> -->
    <link href="{{asset('vendor/now-ui-kit/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/now-ui-kit/css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

</head>

<body class=" sidebar-collapse">

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '569561286532601',
                cookie     : true,
                xfbml      : true,
                version    : '{latest-api-version}'
            });

            FB.AppEvents.logPageView();

        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  fixed-top bg-primary navbar-transparent  " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="/" rel="tooltip" title="{{ config('app.name', 'Laravel Starter') }} - Application Landing Page" data-placement="bottom">
                    {{ config('app.name', 'Laravel Starter') }}
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="{{asset('img/blurred-image-1.jpg')}}">
                <ul class="navbar-nav">

                    @can('view_backend')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('backend.dashboard') }}">Admin Dashboard</a>
                    </li>
                    @endcan

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.auth.register') }}">
                            Register
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.auth.login') }}">
                            <i class="now-ui-icons objects_key-25"></i> Login
                        </a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="now-ui-icons users_single-02"></i> {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Dashboard</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.auth.logout') }}">
                            <i class="now-ui-icons sport_user-run"></i> Logout
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper">

        @yield('content')

        <footer class="footer">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="/">
                                {{ config('app.name', 'Laravel Starter') }}
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                        @guest
                        <li>
                            <a href="{{ route('frontend.auth.register') }}">
                                Register
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.auth.login') }}">
                                Login
                            </a>
                        </li>
                        @else
                        <li>
                            <a href="#">
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.auth.logout') }}">
                                Logout
                            </a>
                        </li>
                        @endguest
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> {{ config('app.name', 'Laravel Starter') }}, Built with ♥ by
                    <a href="https://nasirkhn.com" target="_blank">Nasir Khan Saikat</a>
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{ asset('vendor/now-ui-kit/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/now-ui-kit/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/now-ui-kit/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('vendor/now-ui-kit/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('vendor/now-ui-kit/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="{{ asset('vendor/now-ui-kit/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('vendor/now-ui-kit/js/now-ui-kit.js?v=1.1.0') }}" type="text/javascript"></script>
<script>
    var header_height;
    var fixed_section;
    var floating = false;

    $(document).ready(function() {
        suggestions_distance = $("#suggestions").offset();
        pay_height = $('.fixed-section').outerHeight();

        $(window).on('scroll', nowuiKit.checkScrollForTransparentNavbar);

        if ($(window).width() >= 768) {
            big_image = $('.header[data-parallax="true"]');
            if (big_image.length != 0) {
                $(window).on('scroll', nowuiKitDemo.checkScrollForParallax);
            }
        }

        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    // Laracasts Flash Modal
    $('#flash-overlay-modal').modal();
</script>

</html>
