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
    <style type="text/css">
         html, body{
                height: 100%;
                 }      
                 .full-page{
                height: 100vh;
                width: 100vw;
                 }
        .form-control{
            border-radius:25px;
            }
        .btn{
            border-radius:25px;
        }
             </style>
</head>
<body class="bg-primary">
   <div class="container h-100">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="col-md-12 d-flex align-items-center justify-content-center">
                <div class="card text-white mb-3 bg-transparent shadow" style="width: 800px; min-height:400px; max-height:800px;">
                    <div class="card-body md-d-flex justify-content-between p-0 shadow-lg d-inline-flex">
                        <div class="col col-md-6 bg-primary text-white mx-auto p-4 col-12">
                            <div class="row d-flex justify-content-between">
                                <p class="h3 mt-4 ml-2">Log In</p>
                                <button class="btn btn-outline-light mt-4 m-2 shadow" onClick="window.location.href='{{ route('register') }}'">Register</button>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="group-row mt-4">
                                <label for="email" class="label text-white">Email : </label>
                                <input type="email" class="form-control shadow text-white bg-transparent" id="email" name="email">
                            </div>
                            <div class="group-row mt-4">
                                <label for="password" class="label text-white">Password : </label>
                                <input type="password" class="form-control shadow shadow text-white bg-transparent" name="password">
                            </div>
                            <div class="group-row">
                                <button type="submit" class="btn btn-outline-light w-100 shadow" style="margin-top:40px;">{{ __('Login') }}</button>
                            </div>
                            </form>
                        </div>
                        <div class="col col-md-6 bg-white d-flex justify-content-center align-items-center col-0">
                            <img src="{{asset('img/Hmif.png') }}" width="150px" class="align-items-center justify-content-center d-none d-md-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    <!-- <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
</body>