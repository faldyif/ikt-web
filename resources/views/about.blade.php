@extends('layout.app')

@section('title','About | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Profil Perusahaan</h2>
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
            <div class="col-md-5 col-sm-12">
              <h3 class="roboLight" style="line-height: 1.4em">Indonesia Kendaraan Terminal Merupakan Perusahaan Kendaraan Terminal yang Beroperasi Tanjung Priok Jakarta Indonesia, memberikan pelayanan Cargodooring, Stevedoring, Receiving & delevering serta berbagai Pelayanan Terbaik untuk Pelanggan Kami.</h3>
            </div>
            <div class="col-md-7 col-sm-12">
                <hr class="hrSpec hrSpecOrange">
                <h3 class="mg-b-30 roboBold">Tentang Kami</h3>
                <p>Terminal kendaraan Tanjung Priok adalah Terminal yang melayani kegiatan jasa kepelabuhanan dibidang bongkar muat kendaraan, alat berat dan suku cadang</p>
                <p>Terminal kendaraan Tanjung Priok merupakan salah satu terminal dari terminal yang lainnya yang melayani kegiatan jasa bongkar muat barang pelabuhan Tanjung Priok seperti terminal peti kemas, terminal penumpang terminal multi purpose, terminal curah.</p>
                <p>Terminal kendaraan Tanjung Priok adalah terminal kendaran terbesar dan pertama di Indonesia.</p>
              </div>
          </div>
        </section>
      </div>
    </section>
    <!--/ABOUT-->
    <!-- VISION -->
    <section>
      <div class="container-fluid lightWhiteSec wow fadeInUpBig">
        <section class="row pd-bt-30">
          <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">  
            <div class="col-md-offset-5 col-md-offset-right-5">
            <div class="col-md-offset-4">
              <hr class="hrSpec hrSpecOrange">
            </div>
            <h2 class="text-center mg-b-20">VISI</h2>
            </div>
            <blockquote class="quote-card blue-card">
              <h3 class="text-center lh-15em">Menjadi Terminal Kendaraan Kelas Dunia yang Unggul <br> dalam Operasional dan Pelayanan</h3>
            </blockquote>
            <img class="img-responsive" src="{{ url('img/image1.png') }}">
          </div>
        </section>
      </div>
    </section>
    <section>
      <section class="row mg-lr-0 img-ikt">
        <div class="col-md-4 col-sm-4 pd-0">
          <figure class="noMag">
            <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/4.jpg') }}')">
            <a href="{{ url('img/4.jpg') }}" data-rel="lightcase:aboutCollection" title="Vix eu etiam mediocrem">
              <div class="overlay"></div>
              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
            </a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 pd-0">
          <figure class="noMag">
            <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/2.jpg') }}')">
            <a href="{{ url('img/2.JPG') }}" data-rel="lightcase:aboutCollection" title="Vix eu etiam mediocrem">
              <div class="overlay"></div>
              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
            </a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 pd-0">
          <figure class="noMag">
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
      <div class="col-md-offset-5 col-md-offset-right-5">
            <div class="col-md-offset-5">
              <hr class="hrSpec hrSpecOrange">
            </div>
            <h2 class="roboBold text-center">MISI</h2>
            </div>
        <section class="row pd-bt-30">
          <div class="col-md-8 col-md-offset-2">
            <section class="row">
              <div class="col-md-6 text-center mg-b-30">
                <center><img class="img-responsive" src="{{ url('img/1_corporate_culture.png') }}" style="width: 80px; height: auto; margin: 10px"></center>
                <h3 class="mg-b-20">Pelanggan &amp Mitra</h3>
                <p>Menyediakan, membangun dan mengoperasikan pelayanan terminal dan logistik secara terintegrasi, berkualitas dan handal untuk memenuhi kepuasan pelanggan dan mitra</p>
              </div>
              <div class="col-md-6 text-center mg-b-30">
              <center><img class="img-responsive" src="{{ url('img/2.png') }}" style="width: 80px; height: auto; margin: 10px"></center>
                <h3 class="mg-b-20">Pemegang Saham</h3>
                <p>Memaksimalkan nilai perusahaan bagi pemegang saham dan meningkatkan kesehatan perusahaan secara profesional dengan memenuhi aspek-aspek tatakelola perusahaan yang baik</p>
              </div>
              <div class="col-md-6 text-center mg-b-30">
              <center><img class="img-responsive" src="{{ url('img/3.png') }}" style="width: 80px; height: auto; margin: 10px"></center>
                <h3 class="mg-b-20">Karyawan</h3>
                <p>Menciptakan lingkungan kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, bertintegritas, bangga kepada perusahaan dan budayanya, serta memberikan kesejahteraan dan kepuasan kepada karyawan</p>
              </div>
              <div class="col-md-6 text-center mg-b-30">
              <center><img class="img-responsive" src="{{ url('img/4.png') }}" style="width: 80px; height: auto; margin: 10px"></center>
                <h3 class="mg-b-20">Masyarakat &amp Negara</h3>
                <p>Menciptakan lingkungan kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, bertintegritas, bangga kepada perusahaan dan budayanya, serta memberikan kesejahteraan dan kepuasan kepada karyawan</p>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!-- /MISSION -->
    <!-- ROLE MODEL -->
    <section class="lightWhiteSec">
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-bt-30 mg-bt-10">
          <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <!-- <section class="row flex-row-center be-block-768"> -->
              <div class="col-md-5 col-sm-12">
                <div class="col-md-12">
                  <hr class="hrSpec hrSpecOrange">
                  <h3 class="mg-b-20 roboBold">Role Model</h3>
                  <h5 class="lh-15em">Role Model adalah seluruh pegawai dijabatan struktural PT Indonesia Kendaraan Terminal yaitu Direksi, Manager/Setingkat, Tranformation Management Officer dan Supervisor/Setingkat.</h5>
                </div>
                <div class="col-md-12 mg-b-20">
                  <hr class="hrSpec hrSpecOrange">
                  <h3 class="mg-b-20 roboBold">Change Agent</h3>
                  <h5 class="lh-15em">Sedang disiapkan</h5>
                </div>
              </div>
              <div class="col-md-7 col-sm-12">
                <!-- <section class="row"> -->
                <div class="col-md-12">
                  <hr class="hrSpec hrSpecOrange">
                  <h3 class="mg-b-20 roboBold">Representasi Filosofi</h3>
                  <div class="col-md-12">
                    <section class="be-flex">
                      <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                      <section>
                        <h5 class="roboBold">Ing Ngarso Sung Tulodho</h5>
                        <p>Setiap pemimpin harus selalu menjadi contoh dalam setiap sepak terjangnya, kiprahnya dan langkah-langkah dalam kehidupannya</p>
                      </section>
                    </section>
                  </div>
                  <div class="col-md-12">
                    <section class="be-flex">
                      <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                      <section>
                        <h5 class="roboBold">Ing Madyo Mangun Karso</h5>
                        <p>Pemimpin harus berada ditengah rakyat yang dipimpinnya untuk memberikan semangat</p>
                      </section>
                    </section>
                  </div>
                  <div class="col-md-12">
                    <section class="be-flex">
                      <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                      <section>
                        <h5 class="roboBold">Tut Wuri Handayani</h5>
                        <p>Seorang pemimpin harus selalu memberikan motivasi dan dorongan dari belakang</p>
                      </section>
                    </section>
                  </div>
                </div>
                <!-- </section> -->
              </div>
            <!-- </section> -->
          </div>
        </section>
      </div>
    </section>
    <!-- /ROLE MODEL -->
    <!-- LOGO -->
    <section>
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-bt-30 mg-bt-10">
          <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <section class="row">
              <div class="col-md-7">
                <hr class="hrSpec hrSpecOrange">
                <h2 class="roboBlack">Logo Perusahaan</h2>
                <h3 class="roboBold mg-b-30 or">PT. Indonesia Kendaraan Terminal</h3>
                <h4 class="mg-t-20 roboBlack">Bentuk Logo</h4>
                <p>Bentuk Logo perusahaan yang melengkung menandakan dinamis dan tangkas yang dirancang untuk mewakili ambisi perusahaan menjadi Operator Terminal Kendaraan yang berkelas Dunia.</p>
                <h4 class="mg-t-20 roboBlack">Warna Abu-abu</h4>
                <p>Warna abu-abu pada tulisan IPC dan Terminal menggambarkan kehangatan dan keramahan wujud pelayanan kepada pemangku kepentingan. Logo menggambarkan identitas modern, percaya diri, dan profesional dihadapan semua pemangku kepentingan.</p>
                <h4 class="mg-t-20 roboBlack">Warna Jingga</h4>
                <p>Warna Jingga pada tulisan Car dan gambar melengkung bagian atas menggambarkan semangat perubahan, kekuatan, optimisme, serta kebanggan setiap karyawan, untuk bersama-sama berdiri di garis terdepan dalam mencapai tujuan organisasi.</p>
                <h4 class="mg-t-20 roboBlack">Warna Biru</h4>
                <p>Warna Biru pada gambar melengkung bagian bawah menggambarkan kesiapan memasuki era baru yang dinamis dan fleksibiltas setiap komponen dalam perusahaan menghadapi berbagai tantangan guna mencapai tujuan perusahaan sebagai world-class port operator.</p>
              </div>
              <div class="col-md-5">
                <figure class="pd-30">
                  <img src="{{ url('img/ikt-logo.png') }}" class="pd-30" alt="PT. Indonesia Kendaraan Terminal">
                  <figcaption class="caption">
                    Logo PT. Indonesia Kendaraan Terminal bermakna friendly, sprit, energy dan agility.
                  </figcaption>
                </figure>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!-- /LOGO -->
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