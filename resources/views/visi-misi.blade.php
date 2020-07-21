@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md">
            <div class="card p-2 mx-auto" style="width: 22rem;">
                <img src="{{asset('img/kandidat1.PNG') }}" class="card-img-top" alt="..." style="height:250px">
                <div class="card-body">
                    <div class="row">
                        <p class="card-text h4 text-primary mx-auto">CAKAHIM dan CAWAKAHIM 1</p>
                        <p class="card-text h5 mx-auto">David Kurniawan dan Andri Figi</p>
                    </div>
                    <div class="row">
                        <div class="accordion mx-auto mt-2" id="accordionExample" style="width: 20rem;">
                            <div class="card">
                                <div class="card-header bg-light" id="headingOne">
                                    <h2 class="mb-0 bg-light">
                                        <button class="btn btn-primary btn-block text-center collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                            Visi<span class="material-icons">keyboard_arrow_down</span>
                                        </button>
                                        <button class="btn btn-primary btn-block text-center collapsed d-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseOne">
                                            Misi<span class="material-icons">keyboard_arrow_down</span>
                                        </button>
                                        <button class="btn btn-primary btn-block text-center d-inline-flex justify-content-between items-align-center" type="button" data-toggle="modal" data-target="#exampleModal1">
                                            Video Kampanye<span class="material-icons">keyboard_arrow_down</span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body text-center">
                                        Menjadikan Himpunan Mahasiswa Informatika yang terbaik dalam mewujudkan mahasiswa yang unggul berkualitas dan berbudi pekerti yang baik.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="collapseTwo2" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>1. Menjadikan Himpunan Sebagai penghubung antara mahasiswa dan jajaran kampus</p>
                                        <p>2. Mendorong Mahasiswa untuk lebih meningkatkan kualitas ilmu pengetahuan dibidang Akademik dan Non Akademik</p>
                                        <p>3. Menjalankan pengabdian masyarakat demi terwujudnya tri darma perguruan tinggi negeri</p>
                                        <p>4. Menjadikan himpunan sebagai penampung dan penyaluran aspirasi mahasiswa</p>
                                        <p>5. Membawa nama kampus dan jurusan untuk diperlombakan di kampus lain baik bidang Akademik maupun Non Akademik</p>
                                        <p>6. Meningkatkan tali persaudaraan tanpa ada kesenjangan dan perbedaan diantara mahasiswa</p>
                                        <p>7. Membangun koordinasi yang aktif dan berkesinambungan terhadap stakeholder terkait</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md mt-md-0 mt-4">
            <div class="card p-2 mx-auto" style="width: 22rem;">
                <img src="{{asset('img/kandidat2.PNG') }}" class="card-img-top" style="height:250px">
                <div class="card-body">
                    <div class="row">
                        <p class="card-text h4 text-primary mx-auto">CAKAHIM dan CAWAKAHIM 2</p>
                        <p class="card-text h5 mx-auto">Muhamad Iqbal dan Sri Ayu Rejeki</p>
                    </div>
                    <div class="row">
                        <div class="accordion mx-auto mt-2" id="accordionExample" style="width: 20rem;">
                            <div class="card">
                                <div class="card-header bg-light" id="headingTwo">
                                    <h2 class="mb-0 bg-light">
                                        <button class="btn btn-primary btn-block text-center collapsed d-inline-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            Visi<span class="material-icons">keyboard_arrow_down</span>
                                        </button>
                                        <button class="btn btn-primary btn-block text-center collapsed d-inline-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Misi<span class="material-icons">keyboard_arrow_down</span>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-block text-center d-inline-flex justify-content-between" data-toggle="modal" data-target="#exampleModal2">
                                            Video kampanye<span class="material-icons">keyboard_arrow_down</span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body text-center">
                                        Menjadikan Himpunan Mahasiswa Informatika yang bersatu, inovatif, kreatif, responsif, progresif, dengan semangat juang belajar bersama - sama demi tercapainya Visi - Misi untuk menghasilkan mahasiswa informatika yang berkualitas dan bisa bersaing di zaman perkembangan teknologi yang semakin pesat.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>1. Mewadahi, Memproses, dan melakansanakan aspirasi mahasiswa Teknik Informatika</p>
                                        <p>2. Membuat Program Edukasi/Seminar/Workshop tentang seputar informatika untuk meningkatkan skill mahasiswa Teknik Informatika dan Sistem Informasi</p>
                                        <p>3. Mempererat hubungan dan menjaga keharmonisan sesama anggota himpunan mahasiswa informatika pada umumnya</p>
                                        <p>4. mengikut sertakan perlombaan bagi mahasiswa Teknik Informatika dan Sistem Informasi yang bertalenta</p>
                                        <p>5. Membangung sumber daya mahasiswa Teknik Informatika dan Sistem Informasi agar memiliki daya saing tingkat nasional dalam hal akademik maupun non-akademik</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md mt-md-0 mt-4">
            <div class="card p-2 mx-auto" style="width: 22rem;">
                <img src="{{ asset('img/kandidat3.PNG') }}" class="card-img-top" style="height:250px">
                <div class="card-body">
                    <div class="row">
                        <p class="card-text h4 text-primary mx-auto">CAKAHIM dan CAWAKAHIM 3</p>
                        <p class="card-text h5 text-center mx-auto">Argya Rizky dan Renata Cristian Putri</p>
                    </div>
                    <div class="row">
                    <div class="accordion mx-auto mt-2" id="accordionExample" style="width: 20rem;">
                            <div class="card">
                                <div class="card-header bg-light" id="headingOne">
                                    <h2 class="mb-0 bg-light">
                                        <button class="btn btn-primary btn-block text-center collapsed d-inline-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne">
                                            Visi<span class="material-icons">keyboard_arrow_down</span>
                                        </button>
                                        <button class="btn btn-primary btn-block text-center collapsed d-inline-flex justify-content-between" type="button" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="collapseOne">
                                            Misi<span class="material-icons">keyboard_arrow_down</span>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-block text-center d-inline-flex justify-content-between" data-toggle="modal" data-target="#exampleModal3">
                                            Video Kampanye<span class="material-icons">keyboard_arrow_down</span>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body text-center">
                                        Membangun himpunan mahasiswa informatika bersama seluruh mahasiswa akti TI untuk mewujudkan himpunan yang amanah, solid, kreatif, berkarakter, dan berkualitas serta menjunjung tinggi asas kekeluargaan dan tanggung jawab sebagai mahasiswa.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="collapseTwo3" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>1. Meningkatkan tali persaudaraan seluruh mahasiswa IT</p>
                                        <p>2. Menjadikan wadah aspirasi yang baik terhadap seluruh mahasiswa TI untuk menyalurkan dan mengembangkan ide.
                                        <p>3. Menjalankan dan Menyenggelarakan kegiatan tahunan HMIF ITBU</p>
                                        <p>4. Menjadikan HMIF ITBU yang solid dan tanggung jawab terhadap setiap jabatan dan divisi - divisinya.</p>
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
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Video CAKAHIM dan CAWAKAHIM 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center">
        <iframe width="450" height="315" src="https://www.youtube.com/embed/otSPdTsBm0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Video CAKAHIM dan CAWAKAHIM 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center">
        <iframe width="450" height="315" src="https://www.youtube.com/embed/DGRDYdmo_b8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal3" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Video CAKAHIM dan CAWAKAHIM 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body d-flex justify-content-center">
        <iframe width="450" height="315" src="https://www.youtube.com/embed/DyH913-vpiA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection