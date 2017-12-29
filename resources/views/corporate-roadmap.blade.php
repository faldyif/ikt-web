@extends('layout.app-with-footer')

@section('title', trans('corporate-roadmap.head-title') .' | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/bg_beranda.jpg') }}');">
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
                            <li>a. <i> Governance </i> : Business Process, SOP, Structure</li>
                            <li>b. <i> Culture </i></li>
                            <li>c. <i> Re-define Business </i></li>
                            <li>d. <i> Fine Tuning in Every Area</i></li>
                        </ol>
                        <p><strong>2. ENHANCEMENT</strong></p>
                        <p class="text-justify"><span>Strategi <em>Enhancement</em> dilakukan di Semester 2 tahun 2017 setelah pembangunan pondasi dan landasan selesai dilaksanakan di Semester 1 tahun 2017 dengan strategi <em>Fit-In Infrastructure</em>. Saat bangunan pendukung untuk proses bisnis telah dibuat, maka selanjutnya perlu mengembangkan dan menguatkan bisnis perusahaan yang terdiri dari kegiatan operasi dan layanan.&nbsp; Fokus pada tahun ini antara lain sebagai berikut: </span></p>
                        <ol style="list-style-type: lower-alpha;">
                            <li>a. <i> Operational &amp; Service in Procurement </i><span> (Modernisasi Alat, Marketing Program, dan lain-lain)</span></li>
                            <li>b. <i> Infrastructure Development </i></li>
                            <li>c. <i> Strengthening/Enhancing Business </i></li>
                        </ol>
                        <p><strong>3. ESTABLISHMENT</strong></p>
                        <p class="text-justify"><span>Strategi <em>Establishment</em> dilakukan pada tahun 2018 setelah&nbsp; PT Indonesia Kendaraan Terminal memiliki keadaan internal yang kuat (<em>fit in infrastructure</em>) dan peningkatan kualitas layanan dan operasi (<em>enhancement </em> ), saatnya dimana PT Indonesia Kendaraan Terminal meningkatkan pertumbuhan volume dan profit dengan menjalin kerjasama dengan pihak ketiga dan mengoperasikan Terminal Kendaraan di luar Jakarta. Fokus pada tahun ini antara lain sebagai berikut: </span></p>
                        <ol style="list-style-type: lower-alpha;">
                            <li>a. <i> Volume Growth </i></li>
                            <li>b. <i> Profitability Growth </i></li>
                            <li>c. <i> Holding Establishment </i></li>
                            <li>d. <span>Pengoperasian Terminal Kendaraan di luar Jakarta</span></li>
                        </ol>
                        <p><strong>4. SUSTAINABLE</strong></p>
                        <p class="text-justify"><span>Strategi <em>Sustainable</em> dilakukan pada tahun 2019 setelah&nbsp;PT Indonesia Kendaraan Terminal telah melakukan ekspansi dengan menjalin kerjasama dengan pihak ketiga dan mengoperasikan terminal kendaraan di luar Jakarta yang disertai dengan peningkatan pertumbuhan volume dan profit. PT Indonesia Kendaraan Terminal mengembangkan program-program strategis yang mampu menjaga perusahaan agar tetap berkesinambungan</span><span>.</span></p>
                        <p><strong>5. WORLD CLASS</strong></p>
                        <p class="text-justify"><span>Strategi <em>World Class</em> dilakukan pada tahun 2020 dan merupakan tahapan terakhir untuk mencapai visi perusahaan dimana PT Indonesia Kendaraan Terminal dapat disejajar dengan terminal kendaraan terbaik di dunia. Pada tahap ini PT Indonesia Kendaraan Terminal telah mengimplementasikan segala aktivitas organisasi dengan professional dan sesuai dengan standar internasional.</span></p>
                    </section>

                    <!-- Roadmap 2022 -->
                    <section>
                        <div class="col-sm-12 mg-t-30">
                            <hr class="hrSpec hrSpecOrange">
                            <h3 class="mg-b-30 roboBold">2022 Ultimate Staging Plan</h3>             
                        </div>
                        <div class="col-md-12" style="margin-bottom: 5%">
                            <img src="{{ url('img/2022.png') }}" class="img-responsive">
                        </div>
                    </section>
                    <!-- //roadmap 2022 -->

                    <!-- Roadmap roro -->
                    <section>
                        <div class="col-sm-12 mg-t-30">
                            <hr class="hrSpec hrSpecOrange">
                            <h3 class="mg-b-30 roboBold">RORO Domestic Corridor</h3>             
                        </div>
                        <div class="col-md-12" style="margin-bottom: 5%">
                            <img src="{{ url('img/rorostg.png') }}" class="img-responsive">
                        </div>
                    </section>
                    <!-- //roadmap roro -->
                </div>
            </section>
        </div>
    </section>
    <!---->
@endsection