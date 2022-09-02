<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tour.uz &mdash; Biz Bilan Sayohat Qiling</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Dancing+Script:400,700|Muli:300,400"
        rel="stylesheet">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <div class="header-top bg-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6 col-lg-3">
                        <a href="/" class="header__logo">
                            Proleas.uz
                        </a>
                    </div>

                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="quick-contact-icons d-flex">
                            <div class="icon align-self-start">
                                <span class="icon-phone text-primary"></span>
                            </div>
                            <div class="text">
                                <span class="h4 d-block">+9988 121 21 15</span>
                                <span class="caption-text">{{__('messages.phone')}}</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 d-none d-lg-block">
                        <div class="quick-contact-icons d-flex">
                            <div class="icon align-self-start">
                                <span class="icon-envelope text-primary"></span>
                            </div>
                            <div class="text">
                                <span class="h4 d-block">isroil.shukrullaev@gmail.com</span>
                                <span class="caption-text">Sirdaryo,Guliston</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 d-block d-lg-none text-right">
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>




            <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

                <div class="container">
                    <div class="d-flex align-items-center">

                        <div class="mx-auto">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                    <li class="{{ '/' == request()->path() ? 'active' : '' }}">
                                        <a href="{{ route('index') }}" class="nav-link text-left">{{__('messages.home')}}</a>
                                    </li>
                                    <li class="{{ 'blog' == request()->path() ? 'active' : '' }}">
                                        <a href="{{ route('blog') }}" class="nav-link text-left">{{__('messages.blog')}}</a>
                                    </li>
                                    <li class="{{ 'about' == request()->path() ? 'active' : '' }}">
                                        <a href="{{ route('about') }}" class="nav-link text-left">{{__('messages.about')}}</a>
                                    </li>
                                    <li class="{{ 'service' == request()->path() ? 'active' : '' }}">
                                        <a href="{{ route('service') }}" class="nav-link text-left">{{__('messages.service')}}</a>
                                    </li>

                                    <li class="{{ 'galereya' == request()->path() ? 'active' : '' }}">
                                      <a href="{{ route('galereya') }}" class="nav-link text-left">{{__('messages.photos')}}</a>
                                    </li>

                                    <li class="{{ 'contact' == request()->path() ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}" class="nav-link text-left">{{__('messages.contact')}}</a>
                                    </li>
                                    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span
                                                class="flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span>
                                            {{ Config::get('languages')[App::getLocale()]['display'] }}
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            @foreach (Config::get('languages') as $lang => $language)
                                                @if ($lang != App::getLocale())
                                                    <a class="dropdown-item"
                                                        href="{{ route('lang.switch', $lang) }}"><span
                                                            class="flag-icon flag-icon-{{ $language['flag-icon'] }}"></span>
                                                        {{ $language['display'] }}</a>
                                                @endif
                                            @endforeach
                                        </div>
                                    </li>
                                </ul>
                                </ul>
                            </nav>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        @yield('content')


        <!-- footer  -->

        <div class="footer bg-dark">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3">
                        <p class="mb-4">
                            <a href="" class="header__logo"
                                style="color: white; text-decoration: none">Tour.uz</a>
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto
                            iure.</p>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span style="color: white; ;">{{__('messages.f22')}}</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Biz haqimizda</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Xizmat ko'rsatish</a></li>
                            <li><a href="#">Bizning jamoa</a></li>
                            <li><a href="#">Galareya</a></li>
                            <li><a href="#">Aloqa</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>{{__('messages.contact')}}</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Support Community</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Our Partners</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h3 class="footer-heading"><span>{{__('messages.f23')}}</span></h3>
                        <ul class="list-unstyled">
                            <li><a href="#"><img src="./images/payme.svg" alt=""></a></li>
                            <li><a href="#"><img src="./images/payment-card-1.png" alt=""></a></li>
                            <li><a href="#"><img src="./images/payment-card-2.png" alt=""></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- .site-wrap -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#ff5e15" />
        </svg></div>

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>
    <script src="/js/jquery.countdown.min.js"></script>
    <script src="/js/bootstrap-datepicker.min.js"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/aos.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/jquery.mb.YTPlayer.min.js"></script>




    <script src="/js/main.js"></script>

</body>

</html>
