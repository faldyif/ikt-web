@extends('layout.app')

@section('title','IPC')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('./img/2.jpg');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Layanan Stevedoring dan Cargodoring</h2>
          <h4 class="alignCenter wh mg-t-20">PT. Indonesia Kendaraan Terminal</h4>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!-- -->
    <section>
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-t-20">
          <div class="col-md-8 col-sm-10 col-sm-offset-1 pd-bt-30">
            <div class="col-md-8">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">Stevedoring &amp Cargodoring</h3>
            <p>
              Jasa bongkar muat kapal RORO(Roll On Roll Out) dalam proses loading dan unloading bebagai jenis kendararaan pabrikan ternama luar dan dalam negeri. Cargodooring adalah kegiatan mengangsur Cargo dari dermaga ke lapangan / gudang penumpukan ke penumpukan lainnya dan / atau sebaliknya Dengan bongkar muat membentuk inti dari bisnis kami, PTB telah membuat investasi strategis banyak yang meliputi:
            </p>
            <ul>
              <li>Parkir kendaraan yang luas</li>
              <li>Pengoprasian Ramp door untuk mengangkut berbagai jenis kendaraan</li>
              <li>Pengoperasian Tug Master, Head Truck,Chasiss, Taxi Car</li>
              <li>Pengoprasian peralatan penujang Shuttle Service, Yard Sweeper, Fire Rescue</li>
              <li>Pekerjaan yang terbesar tenaga kerja terampil bongkar muat</li>
              <li>Pengoperasian excavator besar, front-end loader dan skid steer armada</li>
              <li>Pemanfaatan untuk kargo curah</li>
              <li>Sistem Informasi layanan operasional Berbasis IT(CARTOS)</li>
            </ul>
            <p>
            Layanan perpindahan mobil dari dermaga ke gudang atau parkir
            </p>
            </div>
            <div class="col-md-4">
              <img src="{{url('img/stevedooring-argodooring-01.jpg')}}" class="service-media">
            </div>
            <section class="col-md-12 row mg-lr-10 mg-t-30">
              <h4 class="roboMedium text-center">Share this post : </h4>
              <div class="socialMedia text-center">
                <ul class="noPad">
                  <li><a class="fb" href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                  <li><a class="tw" href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                  <li><a class="ig" href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                </ul>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!---->
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