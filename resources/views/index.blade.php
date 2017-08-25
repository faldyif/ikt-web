@extends('layout.app')

@section('title','IPC')

@section('content')
    <!--FULLPAGE.JS-->
    <div id="fullpage">
    <!--HERO-->
<section id="hero" class="pagecontent section ">
  <section class="">
    <div>
      <figure class="figSlider">
        <img src="{{ url('img/2.jpg') }}">
          <canvas id="canvas-interactive"></canvas>
          <canvas id="canvas-reference"></canvas>
          <img src="{{ url('img/new-logo.png') }}" alt="..." id="img">
        
        </section>
      </figure>
    </div>
  </section>
</section>
<!--/HERO-->
    <!--ABOUT-->
    <section id="about" class="pagecontent">
      <div class="container-fluid">
        <section class="row">
          <div class="about col-md-6 wow fadeInUpBig">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">Tentang Kami</h3>
            <p class="big">Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro.</p>
            <p><a href="#" class="roboMedium">Selengkapnya</a></p>
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

        <div class="col-md-6 missionSection wow fadeInUpBig" data-wow-delay="0.5s">
          <div class="container-fluid">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">Misi</h3>
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                      <h4><i class="fa fa-check-circle-o fa-2x"></i> Pelanggan dan Mitra<i class="fa fa-chevron-down"></i></h4>
                    </a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                      <h4><i class="fa fa-check-circle-o fa-2x"></i> Pemegang Saham<i class="fa fa-chevron-down"></i></h4>
                    </a>
                  </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        <h4><i class="fa fa-check-circle-o fa-2x"></i> Karyawan<i class="fa fa-chevron-down"></i></h4>
                      </a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                          <h4><i class="fa fa-check-circle-o fa-2x"></i> Masyarakat dan Negara <i class="fa fa-chevron-down"></i></h4>
                        </a>
                      </h4>
                    </div>
                    <div id="collapse4" class="panel-collapse collapse">
                      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
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
          <div>
            <section class="newsList">
              <figure>
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/port02.jpg') }}');">
                <div class="overlay"></div>
                <a href="#">
                  <figcaption>Selengkapnya</figcaption>
                </a>
              </figure>
              <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
              <a href="#"><h4 class="roboMedium">Delenit utroque vivendo est ea</h4></a>
              <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
            </section>
          </div>
          <div>
            <section class="newsList">
              <figure>
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/port01.jpg') }}');">
                <div class="overlay"></div>
                <a href="#">
                  <figcaption>Selengkapnya</figcaption>
                </a>
              </figure>
              <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
              <a href="#"><h4 class="roboMedium">Delenit utroque vivendo est ea</h4></a>
              <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
            </section>
          </div>
          <div>
            <section class="newsList">
              <figure>
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog04.jpg') }}');">
                <div class="overlay"></div>
                <a href="#">
                  <figcaption>Selengkapnya</figcaption>
                </a>
              </figure>
              <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
              <a href="#"><h4 class="roboMedium">Delenit utroque vivendo est ea</h4></a>
              <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
            </section>
          </div>
          <div>
            <section class="newsList">
              <figure>
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog01.jpg') }}');">
                <div class="overlay"></div>
                <a href="#">
                  <figcaption>Selengkapnya</figcaption>
                </a>
              </figure>
              <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
              <a href="#"><h4 class="roboMedium">Delenit utroque vivendo est ea</h4></a>
              <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
            </section>
          </div>
          <div>
            <section class="newsList">
              <figure>
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog02.jpg') }}');">
                <div class="overlay"></div>
                <a href="#">
                  <figcaption>Selengkapnya</figcaption>
                </a>
              </figure>
              <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
              <a href="#"><h4 class="roboMedium">Delenit utroque vivendo est ea</h4></a>
              <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
            </section>
          </div>
          <div>
            <section class="newsList">
              <figure>
                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog03.jpg') }}');">
                <div class="overlay"></div>
                <a href="#">
                  <figcaption>Selengkapnya</figcaption>
                </a>
              </figure>
              <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
              <a href="#"><h4 class="roboMedium">Delenit utroque vivendo est ea</h4></a>
              <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
            </section>
          </div>
        </div>
      </div>
    </section>
    <!--/RECENT NEWS-->
    <!--AGENDA-->
    <section id="agenda" class="pagecontent">
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
              <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/4.jpg') }}');">
            </figure>
          </section>
        </section>
      </div>
    </section>
    <!--/AGENDA-->
    <!--GALERRY-->
    <section id="gallery" class="wow fadeInUp pagecontent">
      <div class="container-fluid">
      <hr class="hrSpec hrSpecOrange">
      <h3 class="roboBold">Gallery</h3>
        <!-- mansory -->
        <section class="row">
          <div class="pd-r-30">
            <div class="grid">
              <div class="grid-sizer"></div>
              <div class="grid-item grid-item--width2">
                  <figure>
                    <img src="{{ url('img/port02.jpg') }}">
                    <a href="{{ url('img/port02.jpg') }}" data-rel="lightcase"><div class="overlay"></div></a>
                    <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                    <figcaption class="figcaptionBottom"><a href="#">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                  </figure>
              </div> 
              <div class="grid-item grid-item--height2">
                  <figure>
                    <img src="{{ url('img/blog02.jpg') }}">
                    <a href="{{ url('img/blog02.jpg') }}" data-rel="lightcase"><div class="overlay"></div></a>
                    <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                    <figcaption class="figcaptionBottom"><a href="#">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                  </figure>
              </div>
              <div class="grid-item">
                  <figure>
                    <img src="{{ url('img/blog01.jpg') }}">
                    <a href="{{ url('img/blog01.jpg') }}" data-rel="lightcase"><div class="overlay"></div></a>
                    <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                    <figcaption class="figcaptionBottom"><a href="#">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                  </figure>
              </div>
              <div class="grid-item">
                  <figure>
                    <img src="{{ url('img/blog04.jpg') }}">
                    <a href="{{ url('img/blog04.jpg') }}" data-rel="lightcase"><div class="overlay"></div></a>
                    <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                    <figcaption class="figcaptionBottom"><a href="#">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                  </figure>
              </div>
            </div>
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
            <hr class="hrSpec hrSpecWhite">
            <h3 class="mg-b-30 roboBold">Testimonial</h3>
          </section>
          <div class="multiple-items">
            <div>
              <section class="row">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url('img/thumb.png') }}');">
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
              <section class="row">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url('img/thumb.png') }}');">
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
              <section class="row">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Duo alia causae vituperatoribus ea, salutatus adolescens conclusionemque qui an. Illum euripidis eu vix.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url('img/thumb.png') }}');">
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
              <section class="row">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url('img/thumb.png') }}');">
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
              <section class="row">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>At eum mazim dolore aliquid, id sed quas saepe doming. Atomorum assentior ne pri, ut cum fugit facilis electram.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url('img/thumb.png') }}');">
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
              <section class="row">
                <div class="floatLeft">
                  <i class="fa fa-quote-left fa-lg"></i>
                </div>
                <div class="floatLeft mg-lr-20 rightWidth">
                  <p>Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel.</p>
                  <div class="row mg-t-20">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                      <figure class="roundImage">
                        <img src="{{ url('img/bg-square.png') }}" style="background-image: url('{{ url('img/thumb.png') }}');">
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
              <h4 class="roboBold">Information</h4>
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
          <div class="col-md-8 noPad">
            <div class="map">
              <div class="overlay-map"></div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1833851621095!2d106.91224451476846!3d-6.105991995578615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe329d8258290e493!2sTanjung+Priok+Car+Terminal+(TPT)!5e0!3m2!1sen!2sid!4v1501491377262" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </section>
      </section> 
    </section>
    </div>
    <!--/CONTACT-->
@endsection
