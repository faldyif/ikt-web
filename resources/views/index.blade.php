@extends('layout.app')

@section('title','IPC Car Terminal')

@section('content')
  <!--FULLPAGE.JS-->
  <div id="fullpage">
    <!--HERO-->
<section id="hero" class="pagecontent section">
  <section class="slider">
    <!-- slide 1  -->
    <div>
      <figure class="figSlider">
        <img src="{{ url('img/slide1.jpg') }}">
        <div class="overlay"></div>
        <section class="containerCenter alignCenter">
          <section class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">

            </div>
          </section>
          <!-- <img id="logo"
               data-init-position="random"
               data-init-direction="random"
               data-particle-gap="1"
               data-width="400"
               data-height="400"
               data-max-width="1000"
               data-max-height="1000"
               data-gravity="0.2"
               data-mouse-force="25"
               src="{{ url('img/ikt.png') }}"> -->
        </section>
      </figure>
    </div>
    <!-- /slide1 -->
    <!-- slide2 -->
    <div>
      <figure class="figSlider">
        <img src="{{ url('img/4.jpg') }}">
        <div class="overlay"></div>
      </figure>
    </div>
    <!-- /slide2 -->
    <!-- slide3 -->
    <div>
      <figure class="figSlider">
        <img src="{{ url('img/3.jpg') }}">
        <div class="overlay"></div>
      </figure>
    </div>
    <!-- /slide3 -->
    <!-- slide4 -->
    <div>
      <figure class="figSlider">
        <img src="{{ url('img/slide4.jpg') }}">
        <div class="overlay"></div>
      </figure>
    </div>
    <!-- /slide4 -->
    <!-- slide5 -->
    <div>
      <figure class="figSlider">
        <img src="{{ url('img/slide5.jpg') }}">
        <div class="overlay"></div>
      </figure>
    </div>
    <!-- /slide5 -->
  </section>

  <section class="containerCenter alignCenter">
    <section class="row">
      <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">

      </div>
    </section>
    <img id="logo"
         data-init-position="random"
         data-init-direction="random"
         data-particle-gap="1"
         data-width="400"
         data-height="400"
         data-max-width="1000"
         data-max-height="1000"
         data-gravity="0.2"
         data-mouse-force="25"
         src="{{ url('img/ikt.png') }}">
  </section>
</section>

<!-- Puisi -->
<section id="puisi" class="pagecontent">
  <div class="container-fluid">
    <center>
      <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
        <blockquote class="blockquote puisi">
          <p class="mb-0">
            <i>
              Tujuan hidup manusia, salah satunya adalah memberikan manfaat bagi sesama.<br/>
              Begitu pula sebuah perusahaan, dari awal didirikan agar bisa tumbuh dan bermanfaat bagi kehidupan lingkungan di sekitarnya, bangsa dan negara.<br/>
              <br/>
              Kendati peran yang diamanatkan ke kita bisa berbeda.<br/>
              Namun tujuan kita adalah satu.<br/>
              Yaitu kontribusi pada kemajuan ibu pertiwi, kejayaan negeri ini, kebangkitan bangsa ini, tegaknya merah putih ini dan kemakmuran rakyat serta nusantara ini.<br/>
              <br/>
              Demikian pula, PT Indoensia Kendaraan Terminal yang merupakan salah satu anak perusahaan PT Pelabuhan Indonesia II (Persero) memiliki komitmen untuk dapat berbagi melalui <strong>pengelolaan terminal kendaraan berkelas dunia yang unggul dalam operasional dan pelayanan.</strong> Yang pada akhirnya dapat menjadikan salah satu karya kebanggaan Bangsa Indonesia. </p>
            <small>Indonesia Kendaraan Terminal</small>
            </i>
        </blockquote>
    </center>
  </div>
</section>

<!--/HERO-->
    <!--ABOUT-->
    <section id="about" class="pagecontent">
      <div class="container-fluid">
        <section class="row">
          <div class="about col-md-6 wow fadeInUpBig">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-0 roboBlack">Tentang Kami</h3>
            <h2 class="mg-b-30 mg-t-5 roboLight">Indonesia Kendaraan Terminal</h2>
            <p class="big">Indonesia Kendaraan Terminal Merupakan Perusahaan Kendaraan Terminal yang Beroperasi Tanjung Priok Jakarta Indonesia, memberikan pelayanan Cargodooring, Stevedoring, Receiving & Delivering serta berbagai Pelayanan Terbaik untuk Pelanggan Kami.</p>
            <!-- <p><a href="#" class="roboMedium">Selengkapnya</a></p> -->
          </div>
          <div class="col-md-6 col-sm-6 figAbout wow fadeInRightBig" data-wow-delay="0.5s">
            <section class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <figure>
                  <img src="{{ url('img/bg-img-por.png') }}" style="background-image: url('{{ url('img/4.jpg') }}');">
                </figure>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <section class="row">
                  <div class="col-md-12">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/1.jpg') }}');">
                    </figure>
                  </div>
                </section>
                <section class="row">
                  <div class="col-md-12">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/2.jpg') }}');">
                    </figure>
                  </div>
                </section>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>

    <!--/ABOUT-->
    <!--VISI-MISI-->
    <section id="vision" class="wow fadeInUpBig pagecontent">
      <section class="row">
        <div class="col-md-6 noPad beRelative wow fadeInUpBig">
          <div class="visionSection">
            <div class="container-fluid">
              <hr class="hrSpec hrSpecOrange">
              <h3 class="mg-b-30 roboBold">Visi</h3>
              <p class="bigger">Menjadi Terminal Kendaraan Kelas Dunia yang Unggul dalam Operasional dan Pelayanan</p>
            </div>
          </div>
          <figure class="btFig-half">
            <img src="{{ url('img/3.jpg') }}">
          </figure>
        </div>

        <div class="col-md-6 missionSection wow fadeInUpBig bg-pattern">
          <div class="container-fluid">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">Misi</h3>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                      <h4 class="flex-row-center"><i class="fa fa-check-circle-o fa-2x hidden-400"></i> <span>Pelanggan dan Mitra</span></h4>
                    </a>
                  </div>
                </div>
                <div id="collapse1" class="pd-bt-5 panel-collapse collapse">
                  <div class="panel-body">Menyediakan, membangun, dan mengoperasikan pelayanan terminal dan logistik secara terintegrasi, berkualitas dan handal untuk memenuhi kepuasan pelanggan dan mitra.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                      <h4 class="flex-row-center"><i class="fa fa-check-circle-o fa-2x hidden-400"></i> <span>Pemegang Saham</span></h4>
                    </a>
                  </div>
                </div>
                <div id="collapse2" class="pd-bt-5 panel-collapse collapse">
                  <div class="panel-body">Memaksimalkan nilai perusahaan bagi pemegang saham dan meningkatkan kesehatan perusahaan secara profesional dengan memenuhi aspeol-aspek tatakelola perusahaan yang baik.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                      <h4 class="flex-row-center"><i class="fa fa-check-circle-o fa-2x hidden-400"></i> <span>Karyawan</span></h4>
                    </a>
                  </div>
                </div>
                <div id="collapse3" class="pd-bt-5 panel-collapse collapse">
                  <div class="panel-body">Menciptakan lingkungan tenaga kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, berintegrasi, bangga kepada perusahaan dan budayanya serta memberikan kesejahteraan dan kepuasan kepada karyawan.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                      <h4 class="flex-row-center"><i class="fa fa-check-circle-o fa-2x hidden-400"></i> <span>Masyarakat dan Negara</span></h4>
                    </a>
                  </div>
                </div>
                <div id="collapse4" class="pd-bt-5 panel-collapse collapse">
                  <div class="panel-body">Menjamin kelancaran dari keamanan arus barang untuk mewujudkan efisiensi biaya logistik dalam rangka memacu pertumbuhan ekonomi yang berdampak pada peningkatan kesejahteraan masyarakat.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!--/VISI-MISI-->
    <!--RECENT NEWS-->
    <section id="news" class="pagecontent">
      <div class="container-fluid wow fadeInUpBig">
        <section class="pd-lr-30">
          <hr class="hrSpec hrSpecOrange">
          <h3 class="mg-b-30 roboBold">Berita Terbaru</h3>
        </section>
        <div class="multiple-items pd-t-20">
          @foreach($latestNews as $key)
          <div>
            <section class="newsList">
              <figure>
                <img class="imgWidth" src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('storage') . '/' . $key->filename }}'); background-size: contain; background-repeat: no-repeat; background-position: center center;">
                <div class="overlay"></div>
                <a href="{{ route('news.detail', $key->slug) }}">
                  <figcaption>Selengkapnya</figcaption>
                </a>
              </figure>
              <p class="black small mg-t-20"><span>{{ \Carbon\Carbon::parse($key->created_at)->toFormattedDateString() }}</span> / <span>{{ $key->view_count }} readers</span></p>
              <a href="{{ route('news.detail', $key->slug) }}"><h4 class="roboMedium">{{ $key->title }}</h4></a>
              <p class="black">{!! substr(strip_tags($key->content), 0, 100) !!}</p>
            </section>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!--/RECENT NEWS-->
    <!-- AGENDA-->
    <!-- <section id="agenda" class="pagecontent">
      <div class="container-fluid">
        <section class="agendaSection">
          <section class="row">
            <div class="col-md-6 col-md-offset-5 col-sm-8 col-sm-offset-4 wow fadeInLeftBig">
              <hr class="hrSpec hrSpecWhite">
              <h3>Agenda</h3>
              <section class="row pd-15 agendaList">
                <div class="floatLeft">
                  <i class="fa fa-calendar fa-2x"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <span>12 July 2017</span>
                  <h4>Lorem ipsum dolor sit amet</h4>
                  <a href="#">Selengkapnya</a>
                </div>
              </section>
              <section class="row pd-15 agendaList">
                <div class="floatLeft">
                  <i class="fa fa-calendar fa-2x"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <span>12 July 2017</span>
                  <h4>Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam</h4>
                  <a href="#">Selengkapnya</a>
                </div>
              </section>
            </div>
            <figure class="col-md-5 col-md-offset-1 col-sm-6 wow fadeInLeft hidden-768" data-wow-delay="0.5s">
              <img src="./img/bg-img.png" style="background-image: url('./img/4.jpg');">
            </figure>
          </section>
        </section>
      </div>
    </section> -->
    <!--/AGENDA -->
    <!--GALERRY-->
    <section id="gallery" class="wow fadeInUp pagecontent" style="margin: 0 auto;">
      <div class="container-fluid">
        <hr class="hrSpec hrSpecOrange">
        <h3 class="roboBold">Featured Album</h3>

        <!-- /mansory -->
        <!-- newAlbumList -->
        <section class="row mg-bt-20 img-ikt img-ikt-top">
          <div class="col-md-3 mg-b-20">
            <section>
              <div class="card">
                <figure>
                  <img class="card-img-top" src="{{ url('img/bg-img.png') }}" style="background-image: url(' {{ url('img/tmp/terminal_domestik.jpg') }} ')" alt="Card image cap">
                  <a href="...">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-search-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
                <div class="card-body">
                  <hr class="hrSpec hrSpecOrange" style="margin-top: 0">
                  <h4 class="card-title roboBold">Terminal Domestic</h4>
                </div>
              </div>
            </section>
          </div>
          <div class="col-md-3 mg-b-20">
            <section>
              <div class="card">
                <figure>
                  <img class="card-img-top" src="{{ url('img/bg-img.png') }}" style="background-image: url(' {{ url('img/tmp/terminal_internasional.jpg') }} ')" alt="Card image cap">
                  <a href="...">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-search-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
                <div class="card-body">
                  <hr class="hrSpec hrSpecOrange" style="margin-top: 0">
                  <h4 class="card-title roboBold">Terminal Internasional</h4>
                </div>
              </div>
            </section>
          </div>
          <div class="col-md-3 mg-b-20">
            <section>
              <div class="card">
                <figure>
                  <img class="card-img-top" src="{{ url('img/bg-img.png') }}" style="background-image: url(' {{ url('img/tmp/cartos.jpg') }} ')" alt="Card image cap">
                  <a href="...">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-search-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
                <div class="card-body">
                  <hr class="hrSpec hrSpecOrange" style="margin-top: 0">
                  <h4 class="card-title roboBold">CarTOS</h4>
                </div>
              </div>
            </section>
          </div>
          <div class="col-md-3 mg-b-20">
            <section>
              <div class="card">
                <figure>
                  <img class="card-img-top" src="{{ url('img/bg-img.png') }}" style="background-image: url(' {{ url('img/tmp/kerjasama.jpg') }} ')" alt="Card image cap">
                  <a href="...">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-search-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
                <div class="card-body">
                  <hr class="hrSpec hrSpecOrange" style="margin-top: 0">
                  <h4 class="card-title roboBold">Kerjasama</h4>
                </div>
              </div>
            </section>
          </div>
        </section>
        <!-- /newAlbumList -->
      </div>
    </section>
    <!--/GALERRY-->
    <!--TESTI-->
    <section class="pagecontent">
    <section id="testi" class="wow fadeInRight">
      <div class="container-fluid">
        <section class="pd-lr-30">
          <hr class="hrSpec hrSpecOrange hidden-400">
          <h3 class="mg-b-30 roboBold">Testimonial</h3>
        </section>
        <div class="multiple-items-3 pd-lr-30">

          @foreach($testimonials as $key)
          <div>
            <section class="row pd-lr-20">
              <div class="floatLeft">
                <i class="fa fa-quote-left fa-lg hidden-400"></i>
              </div>
              <div class="floatLeft mg-lr-20 rightWidth">
                <p>{{ $key->testimonial }}</p>
                <div class="row mg-t-20">
                  <div class="col-md-3 col-sm-3 col-xs-3">
                    <figure class="roundImage">
                      <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url($key->filename) }}');">
                    </figure>
                  </div>
                  <div class="col-md-9 col-sm-9">
                    <p class="roboBold mg-0 mg-t-5">{{ $key->nama }}</p>
                    <span class="lg-gray">{{ $key->instansi }}</span>
                  </div>
                </div>
              </div>
            </section>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    <!--/TESTI-->
      <!--CONTACT-->
      <section id="contact" class="wow fadeInLeft">
        <section class="row noMag">
        <div class="pd-lr-0 col-md-6 col-sm-12">
        <section class="contactInfo">
          <div class="col-sm-12">
            <h4 class="roboBold">Kontak Kami</h4>
          </div>
          <div class="col-md-8 col-sm-12"> 
            <section class="row mg-lr-15 mg-t-30">
              <i class="fa fa-map-marker fa-2x or floatLeft mg-r-20"></i>
              <p class="small">JL Sindang Laut No. 101, Cilincing Jakarta Utara, 14110</p>
            </section>
            <section class="row mg-lr-15 mg-t-10">
              <i class="fa fa-envelope-o fa-lg or floatLeft mg-r-20"></i>
              <p class="small">info@indonesiacarterminal.co.id</p>
            </section>
            <section class="row mg-lr-15 mg-t-10">
              <i class="fa fa-phone fa-lg or floatLeft mg-r-20"></i>
              <p class="small">Customer Care : +62 811 933 9930</p>
            </section>
            <section class="row mg-lr-15 mg-t-10">
              <i class="fa fa-phone fa-lg or floatLeft mg-r-20"></i>
              <p class="small">+62 21 4393 2251</p>
            </section>
          </div>
          <div class="col-md-4 col-sm-12">
              <section class="row mg-lr-15 mg-t-30">
                <i class="fa fa-fax fa-lg or floatLeft mg-r-20"></i>
                <p class="small">+62 21 4393 2250</p>
              </section>
              <section class="row mg-lr-15 mg-t-10">
                <i class="fa fa-facebook-square fa-lg floatLeft mg-r-20" style="color: #3b5999"></i>
                <p class="small">IPC Car Terminal</p>
              </section>
              <section class="row mg-lr-15 mg-t-10">
                <i class="fa fa-twitter-square fa-lg floatLeft mg-r-20" style="color: #2ac6f7"></i>
                <p class="small">@pt_ikt</p>
              </section>
              <section class="row mg-lr-15 mg-t-10">
                <i class="fa fa-instagram fa-lg floatLeft mg-r-20" style="color: #fb3958"></i>
                <p class="small">IPC Car Terminal</p>
              </section>
          </div>
          <div class="col-sm-12">
            <section class="row">
              <div class="socialMedia text-center">
                <ul class="noPad">
                  <li><a class="fb" href="https://www.facebook.com/ipccarterminal"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="tw" href="https://www.twitter.com/pt_ikt"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="ig" href="https://www.instagram.com/ipccarterminal"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </section>
          </div>
        </section>
      </div>
      <div class="col-md-6 noPad hidden-sm">
        <div class="map">
          <div class="overlay-map"></div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1833851621095!2d106.91224451476846!3d-6.105991995578615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe329d8258290e493!2sTanjung+Priok+Car+Terminal+(TPT)!5e0!3m2!1sen!2sid!4v1501491377262" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
        </section>
      </section>
      </section>
    <!--/CONTACT-->
    <!--footer-->
    <!-- <div class="hiddenSec"></div> -->
    <!--CONTACT-->
@endsection


@section('bottom')
  <script src="{{ url('js/masonry.js') }}"></script>
  <script src="{{ url('js/imagesloaded.js') }}"></script>
  <script src="{{ url('js/custom.index.js') }}"></script>
  <script src="{{ url('js/custom.fullpage.js') }}"></script>
  {{--<script src="{{ url('js/particle.js') }}"></script>--}}
  <script src="https://nextparticle.nextco.de/nextparticle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.6.4/dat.gui.min.js"></script>
  <script type="text/javascript">
      var nextParticle = new NextParticle(document.all.logo);

      window.onclick = function() {
          nextParticle.stop();
      };
      nextParticle.on('stopped', function() {
          nextParticle.start();
      });
  </script>
@endsection
