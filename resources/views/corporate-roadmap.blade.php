@extends('layout.app')

@section('title', trans('corporate-roadmap.head-title') .' | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ trans('corporate-roadmap.head-title') }}</h2>
                <h4 class="alignCenter wh mg-t-20">{{ trans('corporate-roadmap.sub-title') }}</h4>
            </section>
        </div>
    </section>
    <!--/HERO-->
    <!-- -->
    <section>
        <div class="container-fluid wow fadeInUpBig">
            <section class="row pd-t-20">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 pd-bt-30">
                    {{--{!! trans('corporate-roadmap.content') !!}--}}
                    <section class="content">
                        <img src="{{ url('img/corporate-roadmap.png') }}" class="img-responsive">
                        <br>
                        <p><strong>1. FIT IN INFRASTRUCTURE</strong></p>
                        <p><span>Tahun 2017 Semester 1 merupakan tahapan <em>Fit in Infrastructure</em> yaitu membangun landasan yang kokoh sebagai PT Indonesia Kendaraan Terminal. Fokus pada Semester ini antara lain sebagai berikut: </span></p>
                        <ol style="list-style-type: lower-alpha;">
                            <li>a. Governance : Business Process, SOP, Structure</li>
                            <li>b. Culture </li>
                            <li>c. Re-define Business</li>
                            <li>d. Fine Tuning in Every Area</li>
                        </ol>
                        <p><strong>2. ENHANCEMENT</strong></p>
                        <p><span>Strategi <em>Enhancement</em> dilakukan di Semester 2 tahun 2017 setelah pembangunan pondasi dan landasan selesai dilaksanakan di Semester 1 tahun 2017 dengan strategi <em>Fit-In Infrastructure</em>. Saat bangunan pendukung untuk proses bisnis telah dibuat, maka selanjutnya perlu mengembangkan dan menguatkan bisnis perusahaan yang terdiri dari kegiatan operasi dan layanan.&nbsp; Fokus pada tahun ini antara lain sebagai berikut: </span></p>
                        <ol style="list-style-type: lower-alpha;">
                            <li>a. Operational &amp; Service in Procurement<span> (Modernisasi Alat, Marketing Program, dan lain-lain)</span></li>
                            <li>b. Infrastructure Development </li>
                            <li>c. Strengthening/Enhancing Business</li>
                        </ol>
                        <p><strong>3. ESTABLISHMENT</strong></p>
                        <p><span>Strategi <em>Establishment</em> dilakukan pada tahun 2018 setelah&nbsp; PT Indonesia Kendaraan Terminal memiliki keadaan internal yang kuat (<em>fit in infrastructure</em>) dan peningkatan kualitas layanan dan operasi (<em>enhancement</em>), saatnya dimana PT Indonesia Kendaraan Terminal meningkatkan pertumbuhan volume dan profit dengan menjalin kerjasama dengan pihak ketiga dan mengoperasikan Terminal Kendaraan di luar Jakarta. Fokus pada tahun ini antara lain sebagai berikut: </span></p>
                        <ol style="list-style-type: lower-alpha;">
                            <li>a. Volume Growth</li>
                            <li>b. Profitability Growth</li>
                            <li>c. Holding Establishment</li>
                            <li>d. <span>Pengoperasian Terminal Kendaraan di luar Jakarta</span></li>
                        </ol>
                        <p><strong>4. SUSTAINABLE</strong></p>
                        <p><span>Strategi <em>Sustainable</em> dilakukan pada tahun 2019 setelah&nbsp; PT Indonesia Kendaraan Terminal telah melakukan ekspansi dengan menjalin kerjasama dengan pihak ketiga dan mengoperasikan terminal kendaraan di luar Jakarta yang disertai dengan peningkatan pertumbuhan volume dan profit. PT Indonesia Kendaraan Terminal mengembangkan program-program strategis yang mampu menjaga perusahaan agar tetap berkesinambungan</span><span>.</span></p>
                        <p><strong>5. WORLD</strong><strong><span> <em>CLASS</em></span></strong></p>
                        <p><span>Strategi <em>World Class</em> dilakukan pada tahun 2020 dan merupakan tahapan terakhir untuk mencapai visi perusahaan dimana PT Indonesia Kendaraan Terminal dapat disejajar dengan terminal kendaraan terbaik di dunia. Pada tahap ini PT Indonesia Kendaraan Terminal telah mengimplementasikan segala aktivitas organisasi dengan professional dan sesuai dengan standar internasional.</span></p>
                    </section>
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