@extends('layout.app')

@section('title','IPC')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Visi dan Misi Perusahaan</h2>
          <h4 class="alignCenter wh mg-t-20">PT. Indonesia Kendaraan Terminal</h4>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!-- VISION -->
    <section>
      <div class="container-fluid lightWhiteSec wow fadeInUpBig">
        <section class="row pd-bt-30">
          <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center mg-b-20 or">VISI</h2>
            <h4 class="text-center lh-15em">Menjadi Terminal Kendaraan Kelas Dunia yang Unggul <br> dalam Operasional dan Pelayanan</h4>
            <section class="mg-bt-30">
              <h5 class="roboBold">TERMINAL KENDARAAN KELAS DUNIA</h5>
              <p class="lh-15em">PT IKT mampu menjadi perusahaan pengelola terminal kendaraan profesional &amp dapat disejajarkan serta bersaing dengan penyedia layanan terminal kendaraan terbaik di dunia. Komponen untuk menjadi pengelola terminal kendaraan berkelas dunia adalah sebagai berikut :</p>
              <ul class="pd-0">
                <li class="be-flex mg-b-10"><i class="fa fa-arrow-right bl mg-r-10"></i>Image perusahaan yang baik</li>
                <li class="be-flex mg-b-10"><i class="fa fa-arrow-right bl mg-r-10"></i>Fasilitas infrastruktur yang modern</li>
                <li class="be-flex mg-b-10"><i class="fa fa-arrow-right bl mg-r-10"></i>Sistem yang terintegrasi</li>
              </ul>
            </section>
            <section class="mg-bt-30">
              <h5 class="roboBold">TERMINAL KENDARAAN YANG UNGGUL DALAM OPERASIONAL</h5>
              <p class="lh-15em">PT IKT mampu menarik pengguna jasa terminal kendaraan baik domestik maupun internasional untuk bekerjasama dengan PT IKT. Komponen untuk menjadi terminal kendaraan yang unggul dalam operasional adalah sebagai berikut :</p>
              <ul class="pd-0">
                <li class="be-flex mg-b-10"><i class="fa fa-arrow-right bl mg-r-10"></i>Menerapkan standar operasional terbaik di dunia</li>
                <li class="be-flex mg-b-10"><i class="fa fa-arrow-right bl mg-r-10"></i>Memiliki produktivitas yang tinggi</li>
                <li class="be-flex mg-b-10"><i class="fa fa-arrow-right bl mg-r-10"></i>Bekerja secara efektif dan efisien, menerapkan “international best practice”</li>
                <li class="be-flex mg-b-10"><i class="fa fa-arrow-right bl mg-r-10"></i>Mengimplementasikan kebijakan “zero accident”, serta mampu memenuhi SLA/SLG yang disepakati dengan pengguna jasa.</li>
              </ul>
            </section>
          </div>
        </section>
      </div>
    </section>
    <section>
      <section class="row mg-lr-0 img-ikt">
        <div class="col-md-4 col-sm-4 pd-0">
          <figure class="noMag fig-img-bg">
            <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/4.jpg') }}')">
            <a href="{{ url('img/4.jpg') }}" data-rel="lightcase:aboutCollection" title="Vix eu etiam mediocrem">
              <div class="overlay"></div>
              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
            </a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 pd-0">
          <figure class="noMag fig-img-bg">
            <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/2.jpg') }}')">
            <a href="{{ url('img/2.JPG') }}" data-rel="lightcase:aboutCollection" title="Vix eu etiam mediocrem">
              <div class="overlay"></div>
              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
            </a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 pd-0">
          <figure class="noMag fig-img-bg">
            <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/3.jpg') }}')">
            <a href="{{ url('img/3.jpg') }}" data-rel="lightcase:aboutCollection" title="Vix eu etiam mediocrem">
              <div class="overlay"></div>
              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
            </a>
          </figure>
        </div>
      </section>
    </section>
    <!-- /VISION -->
    <!-- MISSION -->
    <section>
      <div class="container-fluid wow fadeInUpBig pd-t-30">
        <h2 class="roboBold text-center">MISI</h2>
        <section class="row pd-bt-30">
          <div class="col-md-8 col-md-offset-2">
            <section class="row">
              <div class="col-md-6 text-center mg-b-30">
                <i class="fa fa-users fa-3x bl"></i>
                <h3 class="mg-b-20">Pelanggan &amp Mitra</h3>
                <p>Menyediakan, membangun dan mengoperasikan pelayanan terminal dan logistik secara terintegrasi, berkualitas dan handal untuk memenuhi kepuasan pelanggan dan mitra</p>
              </div>
              <div class="col-md-6 text-center mg-b-30">
                <i class="fa fa-handshake-o fa-3x or"></i>
                <h3 class="mg-b-20">Pemegang Saham</h3>
                <p>Memaksimalkan nilai perusahaan bagi pemegang saham dan meningkatkan kesehatan perusahaan secara profesional dengan memenuhi aspek-aspek tatakelola perusahaan yang baik</p>
              </div>
              <div class="col-md-6 text-center mg-b-30">
                <i class="fa fa-id-badge fa-3x or"></i>
                <h3 class="mg-b-20">Karyawan</h3>
                <p>Menciptakan lingkungan kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, bertintegritas, bangga kepada perusahaan dan budayanya, serta memberikan kesejahteraan dan kepuasan kepada karyawan</p>
              </div>
              <div class="col-md-6 text-center mg-b-30">
                <i class="fa fa-building fa-3x bl"></i>
                <h3 class="mg-b-20">Masyarakat &amp Negara</h3>
                <p>Menciptakan lingkungan kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, bertintegritas, bangga kepada perusahaan dan budayanya, serta memberikan kesejahteraan dan kepuasan kepada karyawan</p>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!-- /MISSION -->
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
