<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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
                font-size: 84px;
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
        <div id="app">
                <div style="background-color: #343a40;">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
                        <div class="collapse navbar-collapse" id="navbarToggler">
                            <ul class="navbar-nav ml-auto">
                                @php $locale = session()->get('locale'); @endphp
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        @switch($locale)
                                            @case('en')
                                            <img src="{{asset('img/us.png')}}"> English
                                            @break
                                            @case('fr')
                                            <img src="{{asset('img/fr.png')}}"> French
                                            @break
                                            @default
                                            <img src="{{asset('img/us.png')}}"> English
                                        @endswitch
                                        <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="lang/en"><img src="{{asset('img/us.png')}}"> English</a>
                                        <a class="dropdown-item" href="lang/fr"><img src="{{asset('img/fr.png')}}"> French</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                </nav>
           <main class="py-4">
                @yield('content')
            </main>
        </div>
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
                    {{__('lang.welcome')}}
                </div>
                    <div class="container">
                        <h1 class="display-4 text-center" style="font-size: 2.0rem">{{ __('lang.title') }}</h1>
                        <h3 class="display-4 text-center" style="font-size: 1.5rem">{{ __('lang.message')}}</h3>
                        <br>
                    </div>
                <!--lien pour lq langue -->
                <div class="links">
                    <a href="lang/en">En</a>
                    <a href="lang/fr">Fr</a>
                </div>

                    <div class="links">
                        <a href="https://laravel.com/docs">Docs</a>
                        <a href="https://laracasts.com">Laracasts</a>
                        <a href="https://laravel-news.com">News</a>
                        <a href="https://blog.laravel.com">Blog</a>
                        <a href="https://nova.laravel.com">Nova</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://vapor.laravel.com">Vapor</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
            </div>
        </div>
    </body>
</html>
