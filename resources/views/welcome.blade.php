<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>
        <meta name="description"content="Covid19AoApi é uma API angolana criada para mostrar em tempo real as informações sobre os casos do corona vírus detetados no território angolano.">
        <meta name="keywords" content="Angola, Corona vírus, Covid-19, Api, Programadores, Desenvolvimento">
        <link rel="icon" type="image/x-icon" href="/images/icon.webp">
        <meta property="og:title" content="Angola Phone Numbers Api - APNA">
        <meta property="og:description" content="Covid19AoApi é uma API angolana criada para mostrar em tempo real as informações sobre os casos do corona vírus detetados no território angolano.">
        <meta property="og:url" content="{{url('')}}">
        <meta property="og:image" content="/images/background.jpg">
        <meta property="og:image:secure_url" content="/images/background.jpg">
        <meta data-hid="twitter:title" name="twitter:title" content="Angola Phone Numbers Api - APNA">
        <meta data-hid="twitter:description" name="twitter:description" content="Covid19AoApi é uma API angolana criada para mostrar em tempo real as informações sobre os casos do corona vírus detetados no território angolano.">
        <meta data-hid="twitter:image" name="twitter:image"
            content="/images/background.jpg">
        <meta name="theme-color" content="#a12e35">
        <meta name="msapplication-navbutton-color" content="#a12e35">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="#a12e35">
        <meta property="keywords" content="Notícias">
        <meta property="og:locale" content="pt_AO">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Angola Phone Numbers Api - APNA">
        <meta property="article:publisher" content="https://www.facebook.com/Be-Grand-Technology-111736843734225/">
        <meta name="twitter:creator" content="@begrand">
        <meta name="twitter:site" content="@begrand">
        <meta name="twitter:card" content="summary_large_image">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 38px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    CORONA VÍRUS É PERIGOSO.
                </div>
                <div class="m-b-md"> CUMPRA A QUARENTENA PARA O BEM DE TODOS.</div>
                <div class="links">
                    <a href="tel:111">Ligar para emergência</a>
                    <a href="https://who.int">World Health Organization</a>
                </div>
            </div>
        </div>
    </body>
</html>
