<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Flying Lotus</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/home.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color:black;
                /*background-image:url(" {{ asset('images/main-pattern.png') }} ");*/
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }
        </style>
    </head>
    <body>

        <div class="top-border">
        @if (Route::has('login'))
                <div class="top-right auth-links">
                    @auth
                        <a href="{{ route('logout') }}" 
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Atsijungti</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ route('login') }}">Prisijungti</a>
                        <a href="{{ route('register') }}">Registruotis</a>
                    @endauth
                </div>
            @endif
        </div>
        <div class='slaidas'>
        <ul class="cb-slideshow">
            <li>
                <span>Image 01</span>
            </li>
            <li>
                <span>Image 02</span>
            </li>
            <li>
                <span>Image 03</span>
            </li>
            <li>
                <span>Image 04</span>
            </li>
        </ul>
        </div>
        <!-- Slideshow container -->
        <div class="wrapper">
            <div class="flex-center position-ref">
                <div class="content">
                    <div class="logo-image">
                        <img src=" {{ asset('images/logo.png') }}" alt="Lotus" height="250px">
                    </div>
                    <div class="title m-b-md2">
                        Flying Lotus
                    </div>
                    <div class="under-title m-b-md">
                        Papuošalai
                    </div>
                    <div class="links">
                        <a href="/katalogas">Katalogas</a>
                        <a href="/kaip-rasti">Kaip mus rasti</a>
                        <a href="/kontaktai">Kontaktai</a>
                        <a href="/apie">Apie</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-border">
        <p>2018</p>
        </div>
    </body>
</html>
