@extends('layout.app-with-footer')

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
    @endsection