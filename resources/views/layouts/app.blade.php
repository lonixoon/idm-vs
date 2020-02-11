<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Adverts</title>
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
                                <h1><a href="index.html">IDM</a></h1>
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
                                            <li class="active">
                                                <a href="index.html">Главная</a>
                                            </li>
                                            <li>
                                                <a href="product.html">О продукте</a>
                                            </li>
                                            <li>
                                                <a href="support.html">Поддержка</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Контакты</a>
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

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="widget">
                        <!-- logo -->
                        <div class="footerlogo">
                            <h6><a href="index.html">Plato</a></h6>
                            <!-- <img src="assets/img/logo.png" alt="" /> -->
                        </div>
                        <!-- end logo -->
                        <address>
                            <strong>Plato business company, Inc.</strong><br>
                            4455 Great building Ave, Suite A10<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div>
                </div>
                <div class="span3">
                    <div class="widget">
                        <h5>Browse pages</h5>
                        <ul class="list list-ok">
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Tamquam ponderum at eum, nibh dicta offendit mei</a></li>
                            <li><a href="#">Vix no vidisse dolores intellegam</a></li>
                            <li><a href="#">Est virtute feugiat accommodare eu</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span3">
                    <div class="widget">
                        <h5>Flickr photostream</h5>
                        <div class="flickr_badge">
                            <script type="text/javascript"
                                    src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="span3">
                    <div class="widget">
                        <h5>Keep updated</h5>
                        <p>
                            Enter your email to subcribe newsletter
                        </p>
                        <form>
                            <div class="input-append">
                                <input class="span2" id="appendedInputButton" type="text">
                                <button class="btn btn-color" type="submit">Subscribe</button>
                            </div>
                        </form>
                        <ul class="social-network">
                            <li><a href="#"><i class="icon-bg-light icon-facebook icon-circled icon-1x"></i></a></li>
                            <li><a href="#" title="Twitter"><i
                                            class="icon-bg-light icon-twitter icon-circled icon-1x"></i></a></li>
                            <li><a href="#" title="Linkedin"><i
                                            class="icon-bg-light icon-linkedin icon-circled icon-1x"></i></a></li>
                            <li><a href="#" title="Pinterest"><i
                                            class="icon-bg-light icon-pinterest icon-circled icon-1x"></i></a></li>
                            <li><a href="#" title="Google plus"><i
                                            class="icon-bg-light icon-google-plus icon-circled icon-1x"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <p>
                            &copy; Plato - All right reserved
                        </p>
                    </div>
                    <div class="span6">
                        <div class="pull-right">
                            <div class="credits">
                                <!--
                                  All the links in the footer should remain intact.
                                  You can delete the links only if you purchased the pro version.
                                  Licensing information: https://bootstrapmade.com/license/
                                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Plato
                                -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>
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
@yield('scripts')
</body>
</html>
