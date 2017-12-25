@extends('layout.app-with-footer')

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
              <section class="row be-block-768">
                <div class="col-md-3">
                  <ul class="nav nav-pills nav-stacked">
                      <li class="active">
                          <a data-toggle="pill" href="#home">
                              <div class="be-flex">
                                  <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Tagline</span>
                              </div>
                          </a>
                      </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu1">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Nilai-Nilai Perusahaan</span>
                        </div>
                       </a>
                     </li>
                     <li class="">
                      <a data-toggle="pill" href="#menu2">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Karakter Perusahaan</span>
                        </div>
                       </a>
                     </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu3">
                        <div class="be-flex">
                         <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Landasan/Dasar dalam Melaksanaan Tugas dan Kewajiban Perusahaan</span>
                        </div>
                       </a>
                     </li>
                     <li class="">
                      <a data-toggle="pill" href="#menu4">
                        <div class="be-flex">
                         <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Signature</span>
                        </div>
                       </a>
                     </li>
                     <li class="">
                      <a data-toggle="pill" href="#menu5">
                        <div class="be-flex">
                         <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Pesan Budaya</span>
                        </div>
                       </a>
                     </li>
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="tab-content">
                  <!-- home -->
                    <div id="home" class="tab-pane fade in active">
                      <img src="{{ url('img/tagline.png') }}" class="img-responsive" style="width: 50%; height: auto">
                    </div>
                    <!-- //home -->
                    <!-- menu1 -->
                    <div id="menu1" class="tab-pane fade in">
                      <h3 class="mg-b-30 roboBold">Nilai-Nilai Perusahaan CINTA</h3>
                      <div class="col-md-12">
                        <div class="col-md-2">
                          <img src="{{ url('img/1_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 30px 0">
                        </div>
                        <div class="col-md-10">
                          <p>
                            <h4><span class="bigger"><strong>C</strong></span>ustomer Cetric<br><small>Meet Customer Expectation</small></h4>
                            Secara proaktif mencari tahu serta memahami kebutuhan pelanggan untuk memberikan solusi-solusi yang inovatif.<br>
                            Membangun hubungan jangka panjang yang baik dengan para pelanggan.<br>
                            Secara konsisten memberikan pelayanan terbaik dan berkualitas untuk membantu para pelanggan tumbuh dan berkembang.<br>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="col-md-2">
                          <img src="{{ url('img/2_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 15px 0">
                        </div>
                        <div class="col-md-10">
                          <p>
                          <h4><span class="bigger"><strong>I</strong></span>ntegrity<br><small>Walk the Talk</small></h4>
                          Menumbuhkan rasa percaya dengan mengatakan apa yang kita rasakan serta melakukan apa yang kita ucapkan.<br>
                          Menunjukkan sikap profesional dan jujur dalam berinterasi dengan pihak internal maupun eksternal.<br>
                          Berperilaku disiplin dan patuh terhadap kode etik bisnis di dalam melakukan pelkerjaan kita sehari-hari.<br>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="col-md-2">
                          <img src="{{ url('img/3_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 15px 0">
                        </div>
                        <div class="col-md-10">
                          <p>
                          <h4><span class="bigger"><strong>N</strong></span>ationalism<br><small>National Pride</small></h4>
                          Menumbuhkan semangat dan ikut berperan mensukseskan program pemerintah dalam pembangunan nasional.<br>
                          Menumbuhkan rasa bangga dan semangat masionalisme dalam berkarya.<br>
                          Terus berkembang dan mampu bersaing dengan perusahaan pengelola pelabuhan kelas dunia.<br>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="col-md-2">
                          <img src="{{ url('img/4_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 15px 0">
                        </div>
                        <div class="col-md-10">
                          <p>
                          <h4><span class="bigger"><strong>T</strong></span>eam Work<br><small>Together We Can</small></h4>
                          Berkolaborasi dalam tim untuk mendapatkan hasil yang terbaik<br>
                          Bekerja bersama-sama menghasilkan ide-ide implementatif untuk solusi kebutuhan pengguna jasa pelabuhan.<br>
                          Semangat kebersamaan dan menghargai orang lain.<br>
                          </p>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="col-md-2">
                          <img src="{{ url('img/5_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 10px 0">
                        </div>
                        <div class="col-md-10">
                          <p>
                          <h4><span class="bigger"><strong>A</strong></span>ction<br><small>Make It Happy</small></h4>
                          Berani bermimpi dan berusaha mewujudkannya.<br>
                          Proaktif untuk mencari cara dalam mewujudkan visi perusahaan.<br>
                          Melakukan terobosan-terobosan dan langkat nyata dalam mendorong perkembangan perusahaan.<br>
                          </p>
                        </div>
                      </div>
                    </div>
                    <!-- //menu1 -->
                    <!-- menu2 -->
                    <div id="menu2" class="tab-pane fade">
                    <h3 class="mg-b-30 roboBold">Karakter Perusahaan</h3>
                    <div class="col-md-12">
                      <div class="col-md-2">
                        <img src="{{ url('img/6_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 5px 0">
                      </div>
                      <div class="col-md-10">
                      <p>
                      <h4>Less Bureaucratic<br><small>Decision Making Process</small></h4>
                      PT. Indonesia Kendaraan Terminal memiliki karakter cepat, tepat dan akurat dalam proses pengambilan keputusan.
                      </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-2">
                          <img src="{{ url('img/7_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 5px 0">
                      </div>
                      <div class="col-md-10">
                      <p>
                      <h4>Less Feudalism<br><small>Professional Intimacy</small></h4>
                      PT. Indonesia Kendaraan Terminal memiliki karakter yakni hubungan komunikasi yang dibangun bedasarkan profesionalisme kerja.
                      </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-2">
                          <img src="{{ url('img/8_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 5px 0">
                      </div>
                      <div class="col-md-10">
                      <p>
                      <h4>More Modern<br><small>Werld Class Company, Technology Based &amp Customer Centric</small></h4>
                      PT. Indonesia Kendaraan Terminal memiliki karakter perusahaan berkelas dunia, yang berbasis IT dan fokus terhadap kepuasan pelanggan.
                      </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-2">
                          <img src="{{ url('img/9_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 5px 0">
                      </div>
                      <div class="col-md-10">
                      <p>
                      <h4>More Friendly<br><small>World Class Service</small></h4>
                      PT. Indonesia Kendaraan Terminal memiliki karakter pelayanan optimal, berkelas dunia dan memiliki hubungan yang dekat dengan pelanggan.
                      </p>
                      </div>
                    </div>
                    </div>
                    <!-- //menu2 -->
                    <!-- menu3 -->
                    <div id="menu3" class="tab-pane fade">
                    <h3 class="mg-b-30 roboBold">Landasan/Dasar dalam Melaksanaan Tugas dan Kewajiban Perusahaan</h3>
                    <img src="{{ url('img/landasan_pelaksanaan.png')}}" class="img-responsive">
                    </div>
                    <!-- //menu3 -->
                    <!-- menu4 -->
                    <div id="menu4" class="tab-pane fade">
                    <img src="{{ url('img/signature.png')}}" class="img-responsive">
                    </div>
                    <!-- //menu4 -->
                    <!-- menu5 -->
                    <div id="menu5" class="tab-pane fade">
                    <h3 class="mg-b-30 roboBold">Karakter Perusahaan</h3>
                    <div class="col-md-12">
                      <div class="col-md-2">
                        <img src="{{ url('img/6_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 5px 0">
                      </div>
                      <div class="col-md-10">
                      <p>
                      <h4>Less Bureaucratic<br><small>Decision Making Process</small></h4>
                      PT. Indonesia Kendaraan Terminal memiliki karakter cepat, tepat dan akurat dalam proses pengambilan keputusan.
                      </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-2">
                          <img src="{{ url('img/7_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 5px 0">
                      </div>
                      <div class="col-md-10">
                      <p>
                      <h4>Less Feudalism<br><small>Professional Intimacy</small></h4>
                      PT. Indonesia Kendaraan Terminal memiliki karakter yakni hubungan komunikasi yang dibangun bedasarkan profesionalisme kerja.
                      </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-2">
                          <img src="{{ url('img/8_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 5px 0">
                      </div>
                      <div class="col-md-10">
                      <p>
                      <h4>More Modern<br><small>Werld Class Company, Technology Based &amp Customer Centric</small></h4>
                      PT. Indonesia Kendaraan Terminal memiliki karakter perusahaan berkelas dunia, yang berbasis IT dan fokus terhadap kepuasan pelanggan.
                      </p>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="col-md-2">
                          <img src="{{ url('img/9_corporate_culture.png') }}" class="img-responsive" style="width: 100px; height: auto; margin: 5px 0">
                      </div>
                      <div class="col-md-10">
                      <p>
                      <h4>More Friendly<br><small>World Class Service</small></h4>
                      PT. Indonesia Kendaraan Terminal memiliki karakter pelayanan optimal, berkelas dunia dan memiliki hubungan yang dekat dengan pelanggan.
                      </p>
                      </div>
                    </div>
                    </div>
                    <!-- //menu5 -->
                    
                    
                  </div>
                </div>
              </section>
            </div>
          </section>
        </div>
    </section>
    <!---->
@endsection
