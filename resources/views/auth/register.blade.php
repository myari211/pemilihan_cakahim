<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
        .form-control{
            background:transparent;
            color:white;
        }
    </style>
</head>
<body class="bg-primary">
   <div class="container h-100">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div class="col-md d-flex align-items-center justify-content-center">
                <div class="card text-white mb-3 bg-transparent shadow" style="width: 800px; min-height:400px; max-height:800px;">
                    <div class="card-body d-flex justify-content-between p-0 shadow-lg">
                        <div class="col col-md-6 w-100 bg-primary text-white mx-auto p-4 col-12">
                            <div class="d-flex justify-content-between">
                                <p class="md h3 mt-2 ml-2">Register</p>
                                <button type="button" class="btn btn-outline-light md shadow" style="border-radius:15px;" onClick="window.location.href='{{ route('login') }}'">Login</button>
                            </div>
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                        <div class="form-group row mt-4">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">{{ __('Nim') }}</label>

                            <div class="col-md-8">
                                <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>
                            
                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>
                            <div class="col-md-8">
                                <select id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                                    <option value="TI">TI</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semester" class="col-md-4 col-form-label text-md-right">Semester</label>
                            <div class="col-md-8">
                                <select id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror">
                                    <option value="1">Semester I</option>
                                    <option value="2">Semester II</option>
                                    <option value="3">Semester III</option>
                                    <option value="4">Semester IV</option>
                                    <option value="5">Semester V</option>
                                    <option value="6">Semester VI</option>
                                    <option value="7">Semester VII</option>
                                    <option value="8">Semester VIII</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-light form-control">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        </div>
                        <div class="col col-md-6 bg-white d-flex align-items-center justify-content-center col-0 bg-primary">
                            <img src="{{ asset('img/Hmif.png') }}" width="150px" class="d-none d-md-block">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-md-center">Pendaftaran Pemilih</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nim" class="col-md-4 col-form-label text-md-right">{{ __('Nim') }}</label>

                            <div class="col-md-6">
                                <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required autocomplete="nim" autofocus>
                            
                                @error('nim')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jurusan" class="col-md-4 col-form-label text-md-right">Jurusan</label>
                            <div class="col-md-6">
                                <select id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                                    <option value="TI">TI</option>
                                    <option value="SI">SI</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="semester" class="col-md-4 col-form-label text-md-right">Semester</label>
                            <div class="col-md-6">
                                <select id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror">
                                    <option value="1">Semester I</option>
                                    <option value="2">Semester II</option>
                                    <option value="3">Semester III</option>
                                    <option value="4">Semester IV</option>
                                    <option value="5">Semester V</option>
                                    <option value="6">Semester VI</option>
                                    <option value="7">Semester VII</option>
                                    <option value="8">Semester VIII</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary form-control">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
