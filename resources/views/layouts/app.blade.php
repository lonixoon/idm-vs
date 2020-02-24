<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

@yield('meta')

<!-- Styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="assets/css/flexslider.css" rel="stylesheet">
    <link href="assets/css/refineslide.css" rel="stylesheet">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/color/default.css" rel="stylesheet">

    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <link href="{{ mix('css/app.css', 'build') }}" rel="stylesheet">
</head>
<body id="app">
<header>
    <!-- Navbar
    ================================================== -->
    <div class="cbp-af-header">
        <div class=" cbp-af-inner">
            <div class="container">
                <div class="row">

                    <div class="span4">
                        <!-- logo -->
                        <div class="logo">
                            <h1><a href="{{ route('index')}}">IDM VS</a></h1>
                            <!-- <img src="assets/img/logo.png" alt="" /> -->
                        </div>
                        <!-- end logo -->
                    </div>

                    <div class="span8">
                        <!-- top menu -->
                        <div class="navbar">
                            <div class="navbar-inner">
                                <nav>
                                    <ul class="nav topnav">
                                        <li>
                                            <a href="{{ route('index')}}">Главная</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('product')}}">О продукте</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('support')}}">Поддержка</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('partner')}}">Партнёрам</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact')}}">Контакты</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- end menu -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="footer" style="padding: 0">
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="text-center">
                        &copy; IDM VS @php echo date('Y') @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/modernizr.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/google-code-prettify/prettify.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/jquery.prettyPhoto.js"></script>
<script src="assets/js/portfolio/jquery.quicksand.js"></script>
<script src="assets/js/portfolio/setting.js"></script>
<script src="assets/js/hover/jquery-hover-effect.js"></script>
<script src="assets/js/jquery.flexslider.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/cbpAnimatedHeader.min.js"></script>
<script src="assets/js/jquery.refineslide.js"></script>
<script src="assets/js/jquery.ui.totop.js"></script>

<!-- Template Custom Javascript File -->
<script src="assets/js/custom.js"></script>

<!-- Scripts -->
<script src="{{ mix('js/app.js', 'build') }}"></script>
</body>
</html>
