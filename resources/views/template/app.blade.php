<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}} - @yield('title')</title>
        <meta name="description"content="{{__('covid19.seo_description')}}">
        <meta name="keywords" content="{{__('covid19.seo_keywords')}}">
        <link rel="icon" type="image/x-icon" href="/assets/images/icon.webp">
        <meta property="og:title" content="{{env('APP_NAME')}} - @yield('title')">
        <meta property="og:description" content="{{__('covid19.seo_description')}}">
        <meta property="og:url" content="{{url('')}}">
        <meta property="og:image" content="/assets/images/background.jpg">
        <meta property="og:image:secure_url" content="/assets/images/background.jpg">
        <meta data-hid="twitter:title" name="twitter:title" content="{{env('APP_NAME')}} - @yield('title')">
        <meta data-hid="twitter:description" name="twitter:description" content="{{__('covid19.seo_description')}}">
        <meta data-hid="twitter:image" name="twitter:image"
            content="/assets/images/background.jpg">
        <meta name="theme-color" content="#a12e35">
        <meta name="msapplication-navbutton-color" content="#a12e35">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="#a12e35">
        <meta property="keywords" content="Notícias">
        <meta property="og:locale" content="{{ str_replace('-', '_', app()->getLocale()) }}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{env('APP_NAME')}} - @yield('title')">
        <meta property="article:publisher" content="https://www.facebook.com/mr.elgenio/">
        <meta name="twitter:creator" content="@lil_rav">
        <meta name="twitter:site" content="@lil_rav">
        <meta name="twitter:card" content="summary_large_image">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
       
    </head>
    <body>
        <div  id="app" class="container-fuild">
            @section('nav')
            <nav class="mb-4 navbar navbar-expand-lg navbar-dark bg-unique">
                <a class="navbar-brand"  href="{{ url('/') }}">{{env('APP_NAME')}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3" aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
                
                    <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                            <a class="{{ Request::is('/') ? 'active ' : '' }} nav-link"  href="{{ url('/') }}">{{__('covid19.test')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('tips') ? 'active ' : '' }} nav-link"  href="{{ url('/tips') }}">{{__('covid19.tips')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ Request::is('services') ? 'active ' : '' }} nav-link"  href="{{ url('/services') }}">{{__('covid19.services')}}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{__('covid19.langs')}} 
                                </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ url('locale/pt') }}">Português</a>
                                <a class="dropdown-item"  href="{{ url('locale/en') }}">English</a>
                                <a class="dropdown-item"  href="{{ url('locale/fr') }}">Français</a>
                                <a class="dropdown-item"  href="{{ url('locale/es') }}">Español</a>
                            </div>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/ravelinodecastro/covid-19-ao-api" target="_blank">{{__('covid19.api')}}</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">{{__('covid19.homepgae')}}</a>
                            </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{__('covid19.login')}}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{__('covid19.register')}}</a>
                                </li>
                                @endif
                            @endauth
                        @endif
                    
                    </ul>
                </div>
            </nav>
            @show
                <div class="unique-main">
                    @yield('content')
                </div>
            @section('footer')
            <footer class="unique-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="about">
                                
                                <p>{{__('covid19.footer_about')}}</p>

                                <div class="social-media">
                                    <ul class="list-inline">
                                        <li class="d-inline-block"><a href="http://www.facebook.com/mr.elgenio" title=""><i class="fa fa-facebook"></i></a></li>
                                        <li class="d-inline-block"><a href="http://www.instagram.com/lil_rav" title=""><i class="fa fa-instagram"></i></a></li>
                                        <li class="d-inline-block"><a href="http://www.linkedin.com/in/ravelinodecastro" title=""><i class="fa fa-linkedin"></i></a></li>
                                        <li class="d-inline-block"><a href="http://www.github.com/ravelinodecastro" title=""><i class="fa fa-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-info-single">
                                <h2 class="title">{{__('covid19.usefullinks')}}</h2>
                                <ul class="list-unstyled">
                                    <li><a href="tel:111" title="Ligar para emergência">{{__('covid19.callsos')}}</a></li>
                                    <li><a href="https://who.int" title="World Health Organization">{{__('covid19.who')}}</a></li>
                                
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-info-single">
                                <h2 class="title">{{__('covid19.menu')}}</h2>
                                <ul class="list-unstyled">
                                    <li><a class="{{ Request::is('/tips') ? 'active ' : '' }}nav-link"  href="{{ url('/tips') }}">{{__('covid19.tips')}}</a></li>
                                    <li><a href="https://github.com/ravelinodecastro/covid-19-ao-api" title="{{__('covid19.api')}}">{{__('covid19.api')}}</a></li>
                                    <li><a  class="{{ Request::is('tips') ? 'active ' : '' }}nav-link" href="{{ url('/') }}" title="{{__('covid19.test')}}">{{__('covid19.test')}}</a></li>
                                    <li><a  class="{{ Request::is('services') ? 'active ' : '' }}nav-link" href="{{ url('/services') }}" title="{{__('covid19.services')}}">{{__('covid19.services')}}</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="footer-info-single">
                                <h2 class="title">{{__('covid19.about')}}</h2>
                                <p>{!!__('covid19.about_description')!!}</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-info-single">
                                <h2 class="title">{{__('covid19.contribution')}}</h2>
                                <p>{{__('covid19.contribution_description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </footer>
            @show
        </div>
        <script src="{{ asset('assets/js/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/popper.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163225161-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-163225161-1');
        </script>

    </body>
</html>
