@extends('layout.app')

@section('title','Agenda | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('./img/2.jpg');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh" data-wow-delay="0.4s">Acara Perusahaan</h2>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!--TIMELINE-->
    <section id="agenda" class="mg-bt-30">
      <div class="container-fluid wow fadeInUpBig">
        <section class="pd-lr-30">
          <hr class="hrSpec hrSpecOrange">
          <h3 class="mg-b-30 roboBold">Timeline Acara Perusahaan</h3>
        </section>
        <!-- timeline -->
        <div class="container">
          <ul class="timeline">
            <li>
              <div class="timeline-badge"><i class="glyphicon glyphicon-calendar"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium"><span class="bigTitle or">4</span> Agustus 2017</span></p>
                  <figure class="mg-b-20">
                    <img src="{{ url('img/1.jpg') }}">
                  </figure>
                  <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                  <p class="desc">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <p><i class="fa fa-map-marker fa-lg"></i><span class="roboMedium">Yogyakarta</span></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge"><i class="glyphicon glyphicon-calendar"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium"><span class="bigTitle or">3</span> Agustus 2017</span></p>
                  <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                  <p class="desc">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <p><i class="fa fa-map-marker fa-lg"></i><span class="roboMedium">Yogyakarta</span></p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-badge"><i class="glyphicon glyphicon-calendar"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium"><span class="bigTitle or">2</span> Agustus 2017</span></p>
                  <figure class="mg-b-20">
                    <img src="{{ url('img/3.jpg') }}">
                  </figure>
                  <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                  <p class="desc">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <p><i class="fa fa-map-marker fa-lg"></i><span class="roboMedium">Yogyakarta</span></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge"><i class="glyphicon glyphicon-calendar"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium"><span class="bigTitle or">1</span> Agustus 2017</span></p>
                  <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                  <p class="desc">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <p><i class="fa fa-map-marker fa-lg"></i><span class="roboMedium">Yogyakarta</span></p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium"><span class="bigTitle or">1</span> Agustus 2017</span></p>
                  <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                  <p class="desc">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <p><i class="fa fa-map-marker fa-lg"></i><span class="roboMedium">Yogyakarta</span></p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-badge"><i class="glyphicon glyphicon-calendar"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium"><span class="bigTitle or">30</span> Juli 2017</span></p>
                  <figure class="mg-b-20">
                    <img src="{{ url('img/3.jpg') }}">
                  </figure>
                  <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                </div>
                <div class="timeline-body">
                  <p class="desc">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                  <p><i class="fa fa-map-marker fa-lg"></i><span class="roboMedium">Yogyakarta</span></p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- /timeline -->
      </div>
    </section>
    <!--/TIMELINE-->
    
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