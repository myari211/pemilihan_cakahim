<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Himpunan Mahasiswa Informatika</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/Hmif.ico') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/Hmif.png') }}" width="70" style="margin-right:30px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link md-d-inline-flex d-flex justify-content-between">
                                Home&nbsp;<span class="material-icons" style="font-size:20px">home</span>
                            </a>
                        </li>   
                        <li class="nav-item">
                            <a href="/kandidat_show" class="nav-link md-d-inline-flex d-flex justify-content-between">
                                Kandidat&nbsp;<span class="material-icons" style="font-size:20px">people</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/visi-misi" class="nav-link md-d-inline-flex d-flex justify-content-between">
                                Visi Misi&nbsp;<span class="material-icons" style="font-size:20px">explore</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/vote" class="nav-link md-d-inline-flex d-flex justify-content-between">
                                Vote Ketua&nbsp;<span class="material-icons" style="font-size:20px">create</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <button id="navbarDropdown" class="btn btn-primary nav-link dropdown-toggle text-black d-inline-flex justify-content-between align-items-center p-2 shadow" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <span class="material-icons text-white">person</span><span class="caret"></span><br />
                                </button>
                                <div class="dropdown-menu dropdown-menu-right shadow bg-primary" aria-labelledby="navbarDropdown">
                                    <div class="row">
                                        <div class="col-md-12 md-p-2">
                                                <p class="text-center text-white p-2">{{ Auth::user()->name }}</p>
                                                <p class="text-center text-white p-2">{{ Auth::user()->jurusan }} | Semester {{ Auth::user()->semester }} </p>
                                                <p class="text-center text-white blockquote-footer p-2">{{ Auth::user()->nim }}</p>                                         
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 mx-auto d-flex justify-content-center align-items-center">
                                            <button type="button" class="btn btn-danger shadow" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </button>
                                        </div>
                                    </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>


    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script>
</body>
</html>
