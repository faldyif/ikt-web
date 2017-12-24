@extends('layout.app-with-footer')

@section('title','Anak Perusahaan | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/3.jpg') }}');">
        <div class="overlay"></div>
          <section class="container-fluid pd-30">
              <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Anak Perusahaan</h2>
              <h4 class="alignCenter wh mg-t-20">PT Indonesia Kendaraan Terminal</h4>
          </section>
      </div>
    </section>
    <!--/HERO-->
    <!--ABOUT-->
    <section>
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-bt-30">
          <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <section class="row flex-row-center be-block-768">
                
              <div class="col-md-12">
                <hr class="hrSpec hrSpecOrange">
                <h3 class="mg-b-30 roboBold">Manajemen Kerjasama Operasi - Maspion Terminal Kendaraan Indonesia</h3>
                <p class="text-justify">Sejalan dengan program yang dicanangkan oleh pemerintah yaitu program Tol Laut di Indonesia untuk meningkatkan kapasitas pelabuhan dan juga sejalan dengan program kerja IPC yaitu Pendulum Nusantara, maka PT Indonesia Kendaraan Terminal bekerjasama dengan PT Maspion Group turut serta dalam mengembangkan infrastruktur kepelabuhanan dengan melakukan pengembangan ke wilayah timur Indonesia.</p>
                <p class="text-justify">Atas dasar itulah, pada tanggal 2 Desember 2014 telah dilakukan kesepakatan kerjasama antara IPC dalam hal ini diwakili oleh PT Indonesia Kendaraan Terminal dengan PT Maspion Industrial Estate untuk menyiapkan pembangunan dan pengoperasian terminal kendaraan di Maspion Industrial Estate yang berlokasi di Gresik yang akan menjadi terminal kendaraan pertama dan modern di Jawa Timur.</p>
                <div class="col-md-12 pd-bt-10">
                  <div class="col-md-4" style="margin-bottom: 5%">
                      <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                  </div>
                  <div class="col-md-4" style="margin-bottom: 5%">
                      <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                  </div>
                  <div class="col-md-4" style="margin-bottom: 5%">
                      <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                  </div>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-primary center-block">Lihat lainnya</button>
                </div>
                <div class="col-md-12 pd-bt-20">
                <center>
                  <a href="http://maspioncarterminal.co.id" target="_blank">Website MKO - MTKI</a>
                </center>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!--/ABOUT-->
@endsection