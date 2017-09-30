@extends('layout.app')

@section('title',trans('company-culture.head-title') .' | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ trans('company-culture.head-title') }}</h2>
                <h4 class="alignCenter wh mg-t-20">{{ trans('company-culture.sub-title') }}</h4>
            </section>
        </div>
    </section>
    <!--/HERO-->
    <!-- -->
    <section>
        <div class="container-fluid wow fadeInUpBig">
          <section class="row pd-bt-30 mg-bt-20">
            <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <div class="col-md-offset-3">
              </div>
              <section class="row be-block-768">
                <div class="col-md-3">
                  <ul class="nav nav-pills nav-stacked">
                      <li class="active">
                          <a data-toggle="pill" href="#tagline">
                              <div class="be-flex">
                                  <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Tagline</span>
                              </div>
                          </a>
                      </li>
                      <li class="">
                          <a data-toggle="pill" href="#home">
                              <div class="be-flex">
                                  <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Karakter Perusahaan</span>
                              </div>
                          </a>
                      </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu1">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Karakter Perusahaan</span>
                        </div>
                       </a>
                     </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu2">
                        <div class="be-flex">
                         <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Landasan/Dasar dalam Melaksanaan Tugas dan Kewajiban Perusahaan</span>
                        </div>
                       </a>
                     </li>
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="tab-content">
                    <div id="tagline" class="tab-pane fade in active">

                        <h3 class="mg-b-30 roboBold">Tagline</h3>
                        <h4>Dengan CINTA, satukan langkah mewujudkan kerja nyata IPC Car Terminal berkelas dunia.</h4>
                    </div>
                    <div id="home" class="tab-pane fade in">
                    <h3 class="mg-b-30 roboBold">Nilai-Nilai Perusahaan</h3>
                    <p>
                    <h4>1. Customer Cetric<br><small>Meet Customer Expectation</small></h4>
                    Secara proaktif mencari tahu serta memahami kebutuhan pelanggan untuk memberikan solusi-solusi yang inovatif.<br>
                    Membangun hubungan jangka panjang yang baik dengan para pelanggan.<br>
                    Secara konsisten memberikan pelayanan terbaik dan berkualitas untuk membantu para pelanggan tumbuh dan berkembang.<br>
                    </p>
                    <p>
                    <h4>2. Integrity<br><small>Walk the Talk</small></h4>
                    Menumbuhkan rasa percaya dengan mengatakan apa yang kita rasakan serta melakukan apa yang kita ucapkan.<br>
                    Menunjukkan sikap profesional dan jujur dalam berinterasi dengan pihak internal maupun eksternal.<br>
                    Berperilaku disiplin dan patuh terhadap kode etik bisnis di dalam melakukan pelkerjaan kita sehari-hari.<br>
                    </p>
                    <p>
                    <h4>3. Nationalism<br><small>National Pride</small></h4>
                    Menumbuhkan semangat dan ikut berperan mensukseskan program pemerintah dalam pembangunan nasional.<br>
                    Menumbuhkan rasa bangga dan semangat masionalisme dalam berkarya.<br>
                    Terus berkembang dan mampu bersaing dengan perusahaan pengelola pelabuhan kelas dunia.<br>
                    </p>
                    <p>
                    <h4>4. Team Work<br><small>Together We Can</small></h4>
                    Berkolaborasi dalam tim untuk mendapatkan hasil yang terbaik<br>
                    Bekerja bersama-sama menghasilkan ide-ide implementatif untuk solusi kebutuhan pengguna jasa pelabuhan.<br>
                    Semangat kebersamaan dan menghargai orang lain.<br>
                    </p>
                    <p>
                    <h4>5. Action<br><small>Make It Happy</small></h4>
                    Berani bermimpi dan berusaha mewujudkannya.<br>
                    Proaktif untuk mencari cara dalam mewujudkan visi perusahaan.<br>
                    Melakukan terobosan-terobosan dan langkat nyata dalam mendorong perkembangan perusahaan.<br>
                    </p>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                    <h3 class="mg-b-30 roboBold">Karakter Perusahaan</h3>
                    <p>
                    <h4>Less Bureaucratic<br><small>Decision Making Process</small></h4>
                    PT. Indonesia Kendaraan Terminal memiliki karakter cepat, tepat dan akurat dalam proses pengambilan keputusan.
                    </p>
                    <p>
                    <h4>Less Feudalism<br><small>Professional Intimacy</small></h4>
                    PT. Indonesia Kendaraan Terminal memiliki karakter yakni hubungan komunikasi yang dibangun bedasarkan profesionalisme kerja.
                    </p>
                    <p>
                    <h4>More Modern<br><small>Werld Class Company, Technology Based &amp Customer Centric</small></h4>
                    PT. Indonesia Kendaraan Terminal memiliki karakter perusahaan berkelas dunia, yang berbasis IT dan fokus terhadap kepuasan pelanggan.
                    </p>
                    <p>
                    <h4>More Friendly<br><small>World Class Service</small></h4>
                    PT. Indonesia Kendaraan Terminal memiliki karakter pelayanan optimal, berkelas dunia dan memiliki hubungan yang dekat dengan pelanggan.
                    </p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                    <h3 class="mg-b-30 roboBold">Landasan/Dasar dalam Melaksanaan Tugas dan Kewajiban Perusahaan</h3>
                    <p>
                    <h4>Going Concern<br></h4>
                    Melanjukan rogram-program perusahaan yang sudah baik.
                    </p>
                    <p>
                    <h4>Governance<br></h4>
                    Mengutamakan tata kelola yang baik dalam menjalankan program pemerintah.
                    </p>
                    <p>
                    <h4>Pending Matters</h4>
                    Menyelesaikan program-program perusahaan yang belum selesai.
                    </p>
                    <p>
                    <h4>Business Development</h4>
                    Mengembangkan bisnis perusahaan.
                    </p>
                    </div>
                    
                  </div>
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
