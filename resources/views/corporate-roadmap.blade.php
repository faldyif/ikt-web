@extends('layout.app')

@section('title', trans('company-history.head-title') .' | IPC Car Terminal')

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
                    {{--{!! trans('company-history.content') !!}--}}
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