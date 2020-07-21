@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row-group p-2">
        <p class="h4 text-primary text-center">CALON KETUA HIMPUNAN INFORMATIKA</p>
        <p class="h5 text-center">Periode Tahun 2020/2021</p>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="card mx-auto" style="width: 22rem; ">
                <img class="card-img-top" src="{{ asset('img/david.jpeg') }}" style="height: 250px">
                <div class="card-body">
                    <div class="row-group">
                        <p class="h4 text-center">David Kurniawan</p>
                        <p class="h4 mx-auto text-center"><span class="badge badge-primary">TI Sems 6</span></p>
                    </div>
                    <div class="row">
                        <div class="accordion mx-auto mt-2" id="accordionExample" style="width: 20rem;">
                            <div class="card">
                                <button id="headingOne" class="btn btn-primary btn-block text-center collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                    Biodata<span class="material-icons">playlist_play</span>
                                </button>
                                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row-group">
                                            <p>NIM : 17171065112</p>
                                            <p>TTL : Bogor, 18 Juni 1996</p>
                                            <p>Domisili : Bogor</p>
                                            <p>Motto Hidup : Semakin Tinggi Semakin Merunduk</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md mt-md-0 mt-4">
            <div class="card mx-auto" style="width: 22rem;">
                <img class="card-img-top" src="{{ asset('img/iqbal.jpeg') }}" style="height: 250px">
                <div class="card-body">
                    <div class="row-group">     
                        <p class="h4 text-center">Muhammad Iqbal</p>
                        <p class="h4 text-center"><span class="badge badge-primary">TI sems 4</span></p>
                    </div>
                    <div class="row">
                        <div class="accordion mx-auto mt-2" id="accordionExample" style="width: 20rem;">
                            <div class="card">
                                <button id="headingTwo" class="btn btn-primary btn-block text-center collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    Biodata<span class="material-icons">playlist_play</span>
                                </button>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row-group">
                                            <p>NIM : 18171065014</p>
                                            <p>TTL : Jakarta, 13 Desember 1995</p>
                                            <p>Domisili : Jakarta</p>
                                            <p>Motto Hidup : Memperbanyak relasi agar bisa menambah pengalaman dan bisa belajar banyak hal yang belum diketahui oleh diri sendiri</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md mt-md-0 mt-4">
            <div class="card mx-auto" style="width: 22rem;">
                <img class="card-img-top" src="{{ asset('img/argya.jpeg') }}" style="height: 250px;">
                <div class="card-body">
                    <div class="row-group">
                        <p class="h4 text-center">Argya Rizki</p>
                        <p class="h4 text-center"><span class="badge badge-primary">TI Sems 4</span></p>
                    </div>
                    <div class="row">
                        <div class="accordion mx-auto mt-2" id="accordionExample" style="width: 20rem;">
                            <div class="card">
                                <button id="headingThree" class="btn btn-primary btn-block text-center collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                    Biodata<span class="material-icons">playlist_play</span>
                                </button>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row-group">
                                            <p>NIM : 18171065066</p>
                                            <p>TTL : Jakarta, 21 November 1998</p>
                                            <p>Domisili : Bekasi</p>
                                            <p>Motto Hidup : Talk Less Do More</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row-group mt-4">
        <p class="h4 text-primary text-center">CALON WAKIL KETUA HIMPUNAN INFORMATIKA</p>
        <p class="h5 text-center">Periode Tahun 2020/2021</p>
    </div>
    <div class="row">
        <div class="col-md mt-md-2 mt-4">
            <div class="card mx-auto" style="width: 22rem;">
                <img class="card-img-top" src="{{ asset('img/figi.jpeg') }}" style="height: 250px;">
                <div class="card-body">
                    <div class="row-group">
                        <p class="h4 text-center">Andri Figi</p>
                        <p class="h4 text-center"><span class="badge badge-primary">TI Sems 2</span></p>
                    </div>
                    <div class="row">
                        <div class="accordion mx-auto mt-2" id="accordionExample" style="width: 20rem;">
                            <div class="card">
                                <button id="headingFour" class="btn btn-primary btn-block text-center collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Biodata<span class="material-icons">playlist_play</span>
                                </button>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row-group">
                                            <p>NIM : 19171065030</p>
                                            <p>TTL : Jakarta, 08 April 1998</p>
                                            <p>Domisili : Jakarta</p>
                                            <p>Motto Hidup : Kebajikan, Cinta, dan Keadilan</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
        </div>
        <div class="col-md mt-md-2 mt-4">
            <div class="card mx-auto" style="width: 22rem;">
                <img class="card-img-top" src="{{ asset('img/ayu.jpeg') }}" style="height: 250px;">
                <div class="card-body">
                    <div class="row-group">        
                        <p class="h4 text-center">Ayu Sri Rejeki</p>
                        <p class="h4 text-center"><span class="badge badge-primary">TI Sems 4</span></p>
                    </div>
                    <div class="row">
                        <div class="accordion mx-auto mt-2" id="accordionExample" style="width: 20rem;">
                            <div class="card">
                                <button id="headingFive" class="btn btn-primary btn-block text-center collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Biodata<span class="material-icons">playlist_play</span>
                                </button>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row-group">
                                            <p>NIM : 18171065115</p>
                                            <p>TTL : Jakarta, 30 November 1993</p>
                                            <p>Domisili : Jakarta</p>
                                            <p>Motto Hidup : Kalau orang lain bisa, aku juga pasti bisa</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md mt-md-2 mt-4">
            <div class="card mx-auto" style="width: 22rem;">
                <img class="card-img-top" src="{{ asset('img/rinata.jpeg') }}" style="height: 250px">
                <div class="card-body">
                    <div class="row-group">
                        <p class="h4 text-center">Rinata Cristian Putri</p>
                        <p class="h4 text-center"><span class="badge badge-primary">TI Sems 4</span></p>
                    </div>
                    <div class="row">
                        <div class="accordion mx-auto mt-2" id="accordionExample" style="width: 20rem;">
                            <div class="card">
                                <button id="headingSix" class="btn btn-primary btn-block text-center collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    Biodata<span class="material-icons">playlist_play</span>
                                </button>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="row-group">
                                            <p>NIM : 18171065115</p>
                                            <p>TTL : Jakarta, 30 November 1993 </p>
                                            <p>Domisili : Jakarta</p>
                                            <p>Motto Hidup : Pengalaman adalah guru terbaik.. Maka dari itu cari lah pengalaman sebanyak-banyaknya lalu ambil hikmah yang ada Dan selalu bersyukur</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection