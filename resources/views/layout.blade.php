<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
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
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    </body>
</html>

