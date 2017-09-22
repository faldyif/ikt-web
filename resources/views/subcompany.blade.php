@extends('layout.app')

@section('title','Anak Perusahaan | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">IPC - Anak Perusahaan</h2>
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
              <div class="col-md-5">
                <h3 class="roboLight" style="line-height: 1.4em">Isi Singkat Mengenai Profil Maspion Car Terminal</h3>
              </div>
              <div class="col-md-7">
                <hr class="hrSpec hrSpecOrange">
                <h3 class="mg-b-30 roboBold">Maspion Car Terminal</h3>
                <p>Sejalan dengan program yang dicanangkan oleh pemerintah yaitu program Tol Laut di Indonesia untuk meningkatkan kapasitas pelabuhan dan juga sejalan dengan program kerja IPC yaitu Pendulum Nusantara, maka PT Indonesia Kendaraan Terminal bekerjasama dengan PT Maspion Group turut serta dalam mengembangkan infrastruktur kepelabuhanan dengan melakukan pengembangan ke wilayah timur Indonesia.</p>
                <p>Atas dasar itulah, pada tanggal 2 Desember 2014 telah dilakukan kesepakatan kerjasama antara IPC dalam hal ini diwakili oleh PT Indonesia Kendaraan Terminal dengan PT Maspion Industrial Estate untuk menyiapkan pembangunan dan pengoperasian terminal kendaraan di Maspion Industrial Estate yang berlokasi di Gresik yang akan menjadi terminal kendaraan pertama dan modern di Jawa Timur.</p>
                
                <a href="http://maspioncarterminal.co.id">Read more.....</a>
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
      <section class="row">
        <div class="col-md-3 col-sm-3">
          <figure class="logoFooter">
            <img src="{{ url('img/ikt-logo.png') }}">
          </figure>
          <p class="small">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
        </div>
        <div class="col-md-2 col-md-offset-4 col-sm-3 col-sm-offset-3 mg-t-30">
          <h5 class="roboBold mg-b-30">Useful Links</h5>
          <ul class="noPad">
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Helpdesk</a></li>
            <li><a href="#">Storages</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3 mg-t-30">
          <h5 class="roboBold mg-b-30">Locate Us</h5>
          <p class="small">JL Sindang Laut, Cilincing Jakarta Utara, 14110</p>
          <p class="small">+62 21 4393 2251<br>info@indonesiacarterminal.co.id</p>
        </div>
      </section>
    </footer>
    <!--/footer-->
@endsection