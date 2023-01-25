<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token()}}">
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        

        <!-- Styles -->
        <style>

            .top-right {
                position: absolute;
                right: 10px;
                top: 05px;
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

        </style>
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">

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

                    <vue-snotify></vue-snotify>

                    <preloader-component></preloader-component>
                    
                    <router-view></router-view>
                </div>
            </div>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>      
    </body>
</html>
