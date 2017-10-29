@extends('layout.app')

@section('title','Anak Perusahaan | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
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
    <!--footer-->
    <!-- <div class="hiddenSec"></div> -->
    <footer class="footer-1">
    <section id="contact" class="wow fadeInLeft">
    <section class="row noMag">
      <div class="col-md-4">
        <section class="contactInfo">
          <h4 class="roboBold">Kontak Kami</h4>
          <section class="row mg-lr-15 mg-t-30">
            <i class="fa fa-map-marker fa-2x or floatLeft mg-r-20"></i>
            <p class="small">JL Sindang Laut, Cilincing Jakarta Utara, 14110</p>
          </section>
          <section class="row mg-lr-15 mg-t-10">
            <i class="fa fa-envelope-o fa-lg or floatLeft mg-r-20"></i>
            <p class="small">info@indonesiacarterminal.co.id</p>
          </section>
          <section class="row mg-lr-15 mg-t-10">
            <i class="fa fa-phone fa-lg or floatLeft mg-r-20"></i>
            <p class="small">+62 21 4393 2251</p>
          </section>
          <section class="row">
            <div class="socialMedia text-center">
              <ul class="noPad">
                <li><a class="fb" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="tw" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="ig" href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </section>
        </section>
      </div>
      <div class="col-md-8 noPad hidden-400">
        <div class="map">
          <div class="overlay-map"></div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1833851621095!2d106.91224451476846!3d-6.105991995578615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe329d8258290e493!2sTanjung+Priok+Car+Terminal+(TPT)!5e0!3m2!1sen!2sid!4v1501491377262" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </section>
  </section>
    </footer>
    <!--/footer-->
@endsection