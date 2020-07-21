@extends('layouts.app')

@section('content')
<div class="container">
@if(count($errors) > 0)
        <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p class="text-center">Maaf NIM anda sudah digunakan untuk memilih</p>
                @endforeach
        </div>
    @endif
    <p class="h3 text-sm-center">Pemilihan Ketua dan Wakil Ketua Himpunan Mahasiswa Informatika Periode 2020/2021<hr></p>
    <form action="/voting" method="post">
        <input type="hidden" name="name" value="{{ Auth::user()->name }}">
        <input type="hidden" name="nim" value="{{ Auth::user()->nim }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md">
                <div class="card shadow mx-auto" style="width: 22rem; height:300px; padding:4px">
                    <label for="customRadio3">
                        <img src="{{ asset('img/ketua1.jpeg') }}" class="card-img-top" alt="...">
                    </label>
                    <div class="card-body">
                        <div class="row">
                            <p class="card-text mx-auto h5 text-primary">CAKAHIM DAN CAWAKAHIM 1</p>
                        </div>
                        <div class="row">
                            <div class="custom-control custom-radio mx-auto">
                                <input type="radio" id="customRadio3" name="voting" class="custom-control-input mx-auto" aria-label="Radio buttonfor following text input">
                                <label class="custom-control-label mx-auto" for="customRadio3">David Kurniawan dan Andri Figi</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md mt-md-0 mt-4">
                <div class="card shadow mx-auto" style="width: 22rem; height:300px; padding:4px">
                    <label for="customRadio2">
                        <img src="{{ asset('img/ketua2.jpeg') }}" class="card-img-top" alt="...">
                    </label>
                    <div class="card-body">
                        <div class="row">
                            <p class="card-text mx-auto h5 text-primary">CAKAHIM DAN CAWAKAHIM 2</p>
                        </div>
                        <div class="row">
                            <div class="custom-control custom-radio mx-auto">
                                    <input type="radio" id="customRadio2" name="voting" class="custom-control-input mx-auto" aria-label="Radio buttonfor following text input">
                                    <label class="custom-control-label mx-auto" for="customRadio2">Muhammad Iqbal dan Ayu Sri Rejeki</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md mt-md-0 mt-4">
                <div class="card shadow mx-auto " style="width: 22rem; height:300px; padding:4px">
                    <label for="customRadio1">
                        <img src="{{ asset('img/ketua3.jpeg') }}" class="card-img-top" alt="...">
                    </label>
                    <div class="card-body">
                        <div class="row">
                            <p class="card-text mx-auto h5 text-primary">CAKAHIM DAN CAWAKAHIM 3</p>
                        </div>
                        <div class="row">
                            <div class="custom-control custom-radio mx-auto">
                                    <input type="radio" id="customRadio1" name="voting" class="custom-control-input mx-auto" aria-label="Radio buttonfor following text input">
                                    <label class="custom-control-label mx-auto" for="customRadio1">Argya Rizki dan Rinata Cristian Putri</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
            <button type="submit" class="btn btn-primary shadow btn-block d-inline-flex justify-content-between">Pilih<span class="material-icons">send</span></button>
    </form>

</div>
@endsection