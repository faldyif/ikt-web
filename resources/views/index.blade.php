@extends('layout.app')

@section('title','IPC')

@section('content')
  <!--FULLPAGE.JS-->
  <div id="fullpage">
    <!--HERO-->
<section id="hero" class="pagecontent section">
  <section class="">
    <div>
      <figure class="figSlider">
        <img src="{{ url('img/3.jpg') }}">
        <div class="overlay"></div>
        <section class="containerCenter alignCenter">
          <section class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3">

            </div>
          </section>
          <img id="logo"
               data-init-position="random"
               data-init-direction="random"
               data-particle-gap="1"
               data-height="800"
               src="{{ url('img/ikt.png') }}">
        </section>
      </figure>
    </div>
    <!-- <div>
      <figure class="figSlider">
        <img src="./img/4.jpg">
        <div class="overlay"></div>
        <section class="containerCenter alignCenter">
          <p class="roboRegular bigger wow fadeInLeft or">Indonesia Kendaraan Terminal</p>
          <h2 class="upper wh wow fadeInLeft bigTitle">Lebih dari Sekedar Kendaraan Terminal</h2>
        </section>
      </figure>
    </div> -->
    <!-- <div>
      <figure class="figSlider">
        <img src="./img/3.jpg">
        <div class="overlay"></div>
        <section class="containerCenter alignCenter">
          <p class="roboRegular bigger wow fadeInLeft or">Fast and Reliable</p>
          <h2 class="upper wh wow fadeInLeft bigTitle">IPC - Tanjung Priok Car Terminal</h2>
        </section>
      </figure>
    </div> -->
  </section>
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
            <p class="big">Indonesia Kendaraan Terminal Merupakan Perusahaan Kendaraan Terminal yang Beroperasi Tanjung Priok Jakarta Indonesia, memberikan pelayanan Cargodooring, Stevedoring, Receiving & delevering serta berbagai Pelayanan Terbaik untuk Pelanggan Kami.</p>
            <!-- <p><a href="#" class="roboMedium">Selengkapnya</a></p> -->
          </div>
          <div class="col-md-6 col-sm-6 figAbout wow fadeInRightBig" data-wow-delay="0.5s">
            <section class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <figure>
                  <img src="{{ url('img/bg-img-por.png') }}" style="background-image: url('./img/4.jpg');">
                </figure>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <section class="row">
                  <div class="col-md-12">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('./img/1.jpg');">
                    </figure>
                  </div>
                </section>
                <section class="row">
                  <div class="col-md-12">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('./img/2.jpg');">
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

        <div class="col-md-6 missionSection wow fadeInUpBig" data-wow-delay="0.5s">
          <div class="container-fluid">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">Misi</h3>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                      <h4><i class="fa fa-check-circle-o fa-2x hidden-400"></i> Pelanggan dan Mitra</h4>
                    </a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                  <div class="panel-body">Menyediakan, membangun, dan mengoperasikan pelayanan terminal dan logistik secara terintegrasi, berkualitas dan handal untuk memenuhi kepuasan pelanggan dan mitra.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                      <h4><i class="fa fa-check-circle-o fa-2x hidden-400"></i> Pemegang Saham</h4>
                    </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">Memaksimalkan nilai perusahaan bagi pemegang saham dan meningkatkan kesehatan perusahaan secara profesional dengan memenuhi aspeol-aspek tatakelola perusahaan yang baik.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                      <h4><i class="fa fa-check-circle-o fa-2x hidden-400"></i> Karyawan</h4>
                    </a>
                  </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body">Menciptakan lingkungan tenaga kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, berintegrasi, bangga kepada perusahaan dan budayanya serta memberikan kesejahteraan dan kepuasan kepada karyawan.</div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                      <h4><i class="fa fa-check-circle-o fa-2x hidden-400"></i> Masyarakat dan Negara </h4>
                    </a>
                  </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
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
                <img src="{{ url('storage') . '/' . $key->filename }}" style="background-image: url('{{ url('storage') . '/' . $key->filename }}');">
                <div class="overlay"></div>
                <a href="{{ route('news.detail', $key->slug) }}">
                  <figcaption>Selengkapnya</figcaption>
                </a>
              </figure>
              <p class="black small mg-t-20"><span>{{ \Carbon\Carbon::parse($key->created_at)->toFormattedDateString() }}</span> / <span>{{ $key->view_count }} readers</span></p>
              <a href="{{ route('news.detail', $key->slug) }}"><h4 class="roboMedium">{{ $key->title }}</h4></a>
              <p class="black">{!! substr(strip_tags($key->content), 0, 300) !!}</p>
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
    <section id="gallery" class="wow fadeInUp pagecontent">
      <div class="container-fluid">
        <hr class="hrSpec hrSpecOrange">
        <h3 class="roboBold">Gallery</h3>
        <!-- mansory -->
        <section class="row">
          <div class="grid">
            <div class="grid-sizer"></div>
            @foreach($latestAlbums as $key)
              @php
                $firstPhoto = \App\AlbumPhoto::where('album_id', $key->id)->first();
              @endphp
              <div class="grid-item">
                <figure>
                  <img src="{{ url('storage/' . $firstPhoto->filename) }}">
                  <a href="{{ route('gallery.detail', $key->slug) }}" data-rel="lightcase"><div class="overlay"></div></a>
                  <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                  <figcaption class="figcaptionBottom"><a href="{{ route('gallery.detail', $key->slug) }}">{{ $key->title }}</a><br>{{ \Carbon\Carbon::parse($key->created_at)->toFormattedDateString() }}</figcaption>
                </figure>
              </div>
            @endforeach
          </div>
        </section>

        <!-- /mansory -->
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
            <div>
              <section class="row pd-lr-20">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg hidden-400"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('./img/thumb.png');">
                      </figure>
                    </div>
                    <div class="col-md-9 col-sm-9">
                      <p class="roboBold mg-0 mg-t-5">Aliquam principes deterruisset</p>
                      <span class="lg-gray">Designer</span>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div>
              <section class="row pd-lr-20">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg hidden-400"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('./img/thumb.png');">
                      </figure>
                    </div>
                    <div class="col-md-9 col-sm-9">
                      <p class="roboBold mg-0 mg-t-5">Aliquam principes deterruisset</p>
                      <span class="lg-gray">Designer</span>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div>
              <section class="row pd-lr-20">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg hidden-400"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Duo alia causae vituperatoribus ea, salutatus adolescens conclusionemque qui an. Illum euripidis eu vix.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('./img/thumb.png');">
                      </figure>
                    </div>
                    <div class="col-md-9 col-sm-9">
                      <p class="roboBold mg-0 mg-t-5">Aliquam principes deterruisset</p>
                      <span class="lg-gray">Designer</span>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div>
              <section class="row pd-lr-20">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg hidden-400"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('./img/thumb.png');">
                      </figure>
                    </div>
                    <div class="col-md-9 col-sm-9">
                      <p class="roboBold mg-0 mg-t-5">Aliquam principes deterruisset</p>
                      <span class="lg-gray">Designer</span>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div>
              <section class="row pd-lr-20">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg hidden-400"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>At eum mazim dolore aliquid, id sed quas saepe doming. Atomorum assentior ne pri, ut cum fugit facilis electram.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('./img/thumb.png');">
                      </figure>
                    </div>
                    <div class="col-md-9 col-sm-9">
                      <p class="roboBold mg-0 mg-t-5">Aliquam principes deterruisset</p>
                      <span class="lg-gray">Designer</span>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <div>
              <section class="row pd-lr-20">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg hidden-400"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('./img/thumb.png');">
                      </figure>
                    </div>
                    <div class="col-md-9 col-sm-9">
                      <p class="roboBold mg-0 mg-t-5">Aliquam principes deterruisset</p>
                      <span class="lg-gray">Designer</span>
                    </div>
                  </div>
                </div>
              </section>
            </div>

          </div>
        </div>
      </section>
      <!--/TESTI-->
      <!--CONTACT-->
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
