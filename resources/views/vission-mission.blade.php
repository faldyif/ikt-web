@extends('layout.app')

@section('title','IPC')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('./img/2.jpg');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Visi dan Misi Perusahaan</h2>
          <h4 class="alignCenter wh mg-t-20">PT. Indonesia Kendaraan Terminal</h4>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!-- -->
    <section>
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-t-20">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 pd-bt-30">
          <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">Visi Perusahaan</h3>
            <p>
              Menjadi Pengelola Terminal Kendaraan Kelass Dunia yang Unggul dalam Operasional dan Pelayanan
            </p>
            <section class="slider mg-bt-30">
              <div>
                <a href="./img/history01.JPG" data-rel="lightcase">
                  <figure class="">
                    <img src="./img/history01.JPG">
                  </figure>
                </a>
              </div>
            </section>
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">Misi Perusahaan</h3>
            <p>
              <h4>1. Pelanggan dan Mitra<br></h4>
              Menyediakan, membangun, dan mengoperasikan pelayanan terminal dan logistik secara terintegrasi, berkualitas dan handal untuk memenuhi kepuasan pelanggan dan mitra.
            </p>
            <p>
              <h4>2. Pemegang Saham<br></h4>
              Memaksimlkan nilai perusahaan bagi pemegang saham dan meningkatkan kesehatan perusahaan secara profesional dengan memenuhi aspeol-aspek tatakelola perusahaan yang baik.
            </p>
            <p>
              <h4>3. Karyawan</h4>
              Menciptakan lingkungan tenaga kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, berintegrasi, bangga kepada perusahaan dan budayanya serta memberikan kesejahteraan dan kepuasan kepada karyawan.
            </p>
            <p>
              <h4>4. Masyarakat dan Negara<br></h4>
              Menjamin kelancaran dari keamanan arus barang untuk mewujudkan efisiensi biaya logistik dalam rangka memacu pertumbuhan ekonomi yang berdampak pada peningkatan kesejahteraan masyarakat.
            </p>
            <section class="row mg-lr-10 mg-t-30">
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
            <img src="./img/ikt-logo.png">
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