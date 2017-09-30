@extends('layout.app')

@section('title', trans('achievements.title') . ' | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ trans('achievements.head-title') }}</h2>
                <h4 class="alignCenter wh mg-t-20">{{ trans('achievements.sub-title') }}</h4>
            </section>
        </div>
    </section>
    <!--/HERO-->
    <section id="agenda" class="mg-bt-30">
      <div class="container-fluid wow fadeInUpBig">
        <section class="pd-lr-30">
          <hr class="hrSpec hrSpecOrange">
          <h3 class="mg-b-30 roboBold">Achivements</h3>
        </section>
        <!-- timeline -->
        <div class="container">
          <ul class="timeline">
            <li>
              <div class="timeline-badge"><i class="fa fa-trophy"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <img class="img-responsive" src="{{ url('img/ach_pelayanan_prima_2014.jpg')}}">
                  <p><span class="roboMedium normalTitle or">2014</span></p>
                  <h4 class="timeline-title">{{ trans('achievements.2014-1-title') }}</h4>
                </div>
                <div class="timeline-body">
                  <p class="roboMedium">{{ trans('achievements.2014-1-from') }}</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge"><i class="fa fa-trophy"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2015</span></p>
                  <h4 class="timeline-title">Prima Utama "Operation Excelent"</h4>
                </div>
                <div class="timeline-body">
                  <p class="roboMedium">Ministry of Transportation - Republic Of Indonesia</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-badge"><i class="fa fa-trophy"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2016</span></p>
                  <h4 class="timeline-title">The Best CEO Marketing Leadership BUMN Award 2016</h4>
                </div>
                <div class="timeline-body">
                  <p class="roboMedium">BUMN Track Magazine, Arrbey Consulting &amp Rumah Perubahan</p>
                </div>
              </div>
            </li>
            <li class="timeline">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2016</span></p>
                  <h4 class="timeline-title">The Best Subsidiary Company of BUMN in Marketing Award 2016</h4>
                </div>
                <div class="timeline-body">
                  <p class="roboMedium">BUMN Track Magazine, Arrbey Consulting &amp Rumah Perubahan</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-badge"><i class="fa fa-trophy"></i></div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2017</span></p>
                  <h4 class="timeline-title">The Best Sales &amp Marketing in Sector : Subsidiary of BUMN Company</h4>
                </div>
                <div class="timeline-body">
                  <p class="roboMedium">Indonesia Sales Marketing Award 2017/ISMA 2017, Majalah Economic Review, Binus Business School, Indonesia-Asia Institute, Frontliner Services, Ideku Group</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2017</span></p>
                  <h4 class="timeline-title">The 1st Best 5 of Sales &amp Marketing Director in Sector : Subsidiary of Company</h4>
                </div>
                <div class="timeline-body">
                  <p class="roboMedium">Indonesia Sales Marketing Award 2017/ISMA 2017, Majalah Economic Review, Binus Business School, Indonesia-Asia Institute, Frontliner Services, Ideku Group</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2017</span></p>
                  <h4 class="timeline-title">Speaker of Indonesia Sales Marketing Award 2017</h4>
                </div>
                <div class="timeline-body">
                  <p class="roboMedium">ISMA 2017</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2017</span></p>
                  <h4 class="timeline-title">Speaker "Menyukseskan Tol Maritim, Roro Service Jakarta - Surabaya"</h4>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <!-- /timeline -->
      </div>
    </section>
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
