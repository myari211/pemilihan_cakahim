@extends('layouts.app')

@section('content')
<div class="container" height="500px">
    @if(session('success'))
        <div class="alert alert-succes">{{session('success')}}</div>
    @endif
    <div class="row d-inline-flex justify-content-center align-items-center" style="height:500px">
        <div class="col-md-4 d-inline-flex justify-content-center align-items-center">
            <img src="{{ asset('img/Hmif.png') }}" width="300px">
        </div>
        <div class="col-md-8 d-flex items-align-center">
            <div class="card shadow" style="height:22rem">
                <div class="card-body d-flex align-items-center">
                    <div class="row-group">
                        <p class="h1 text-center">Selamat Datang Di Website</p>
                        <p class="h3 text-center text-primary">Pemilihan Calon Ketua dan Wakil Ketua Himpunan Informatika</p>
                        <p class="h5 text-center">Periode tahun 2020 - 2021</p>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
