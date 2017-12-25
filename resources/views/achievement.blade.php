@extends('layout.app-with-footer')

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
                  <p><span class="roboMedium normalTitle or">2014</span></p>
                  <h4 class="timeline-title">Penilaian dengan kategori “PUAS” Audit Kepuasan Pelanggan (BPKP)</h4>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2014</span></p>
                  <h4 class="timeline-title">Penilaian KAP dengan penilaian wajar terhadap semua hal yang materiil (EY)</h4>
                </div>
              </div>
            </li>
            <li>
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
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2015</span></p>
                  <h4 class="timeline-title">Penilaian KAP dengan penilaian wajar terhadap semua hal yang materiil (EY)</h4>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
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
            <li>
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
                  <h4 class="timeline-title">Implementasi sistem standar mutu operasional ISO 9001:2015</h4>
                </div>
              </div>
            </li>
            <li>
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
                  <h4 class="timeline-title">Implementasi sistem standar lingkungan ISO 14001:2015</h4>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <p><span class="roboMedium normalTitle or">2017</span></p>
                  <h4 class="timeline-title">Implementasi sistem standar K3 OHSAS 18001:2007</h4>
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
            <li>
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
            <li>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <p><span class="roboMedium normalTitle or">2017</span></p>
                        <h4 class="timeline-title">The Best Performance Subsidiary of IPC</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="roboMedium">PT Pelabuhan Indonesia II (Persero)</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <img class="img-responsive" src="{{ url('img/achievement_2017.jpg')}}">
                  <p><span class="roboMedium normalTitle or">2017</span></p>
                  <h4 class="timeline-title">Dirut PT IKT sebagai The Best CMO Creative Branding & Marketing Initiative</h4>
                </div>
                <div class="timeline-body">
                  <p class="roboMedium">– BUMN Subsidiary pada 5th BUMN Branding & Marketing Award 2017</p>
          
                </div>
              </div>
            </li>
            <li>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <p><span class="roboMedium normalTitle or">2017</span></p>
                        <h4 class="timeline-title">Gold Winner Brand Communcation of Corporate Branding</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="roboMedium">– BUMN Subsidiary pada 5th BUMN Branding & Marketing Award 2017</p>
              
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <p><span class="roboMedium normalTitle or">2017</span></p>
                        <h4 class="timeline-title">The Best Branding</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="roboMedium">– BUMN Subsidiary pada 5th BUMN Branding & Marketing Award 2017</p>
              
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <p><span class="roboMedium normalTitle or">2017</span></p>
                        <h4 class="timeline-title">Gold Winner Brand Strategy of Corporate Branding</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="roboMedium">– BUMN Subsidiary pada 5th BUMN Branding & Marketing Award 2017</p>
              
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <p><span class="roboMedium normalTitle or">2017</span></p>
                        <h4 class="timeline-title">Pencapaian Survey Indeks Kepuasan Pelanggan</h4>
                    </div>
                    <div class="timeline-body">
                      <p class="roboMedium">BPKP pada angka 4,48 skala likert dengan katagori puas, “Pertama kali BPKP mmemberikan nilai CSI Korporat sebesar 4,48 skala likert kepada suatu lembaga BUMN”</p>
              
                    </div>
                </div>
            </li>
          </ul>
        </div>
        <!-- /timeline -->
      </div>
    </section>
@endsection
