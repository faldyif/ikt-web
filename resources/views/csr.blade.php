@extends('layout.app')

@section('title','CSR | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">CSR IPC Car Terminal - Rangkul Warga</h2>
                <h4 class="alignCenter wh mg-t-20">PT. Indonesia Kendaraan Terminal</h4>
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
                                  <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Rangkul Warga</span>
                              </div>
                          </a>
                      </li>
                      <li class="">
                          <a data-toggle="pill" href="#menu0">
                              <div class="be-flex">
                                  <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Pendidikan & Keagamaan</span>
                              </div>
                          </a>
                      </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu1">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Olahraga, Seni & Budaya</span>
                        </div>
                       </a>
                     </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu2">
                        <div class="be-flex">
                         <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Pemuda & Wirausaha</span>
                        </div>
                       </a>
                     </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu3">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Kesehatan Sosial dan Lingkungan</span>
                        </div>

                       </a>
                     </li>
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                          <div class="row">
                              <div class="col-md-6 col-md-offset-3">
                                  <img src="{{ url('img/csr_rangkul_warga.png') }}" class="img-responsive">
                              </div>
                          </div>
                          <br>
                          <p>Sebagai bagian dari keikutsertaan dalam memelihara hubungan baik dan bentuk kepedulian social dengan masyarakat di lingkungan sekitar IPC Car Terminal sekaligus menjaga stabilitas sinergi dalam hubungan bisnis yang dijalankan, PT Indonesia Kendaraan Terminal senantiasa berkewajiban untuk menjaga harmonisasi tersebut melalui program kerja CSR yang juga merupakan tanggung jawab social dan lingkungan kepada masyarakat sekitar. Tema yang diambil dalam kegiatan CSR di PT IKT tersebut bernama RANGKUL WARGA. Dimana dua kata tersebut mengandung makna filosofis dan psikologis yang diterjemahkan sebagai upaya korporasi dalam menjaga hubungan baik dengan masyarakat sekitar.</p>
                          <p>Rangkul Warga adalah symbol kebersamaan dalam hubungan interpersonal antara perusahaan dan masyarakat sekitar. Membangun kebersamaan, mewujudkan keberpihakan korporat dan memberi kontribusi nyata dalam hubungan social kepada masyarakat yang pada akhirnya ikut mendukung program pemerintah untuk membantu dan memberdayakan masyarakat Indonesia secara umum.</p>
                          <p>Konsep Rangkul Warga dalam program kerja CSR di PT IKT dimaksudkan sebagai penajaman dari program CSR yang sudah berjalan sebelumnya. Sementara untuk pola distribusi bantuan, pembinaan, dan dukungan yang dilakukan, Rangkul Warga terdiri dari 4 segmen distribusi yaitu:</p>
                          <ol>
                              <li>1. Education & Religion</li>
                              <li>2. Sport, Art & Culture</li>
                              <li>3. Youth & Entrepreneurship</li>
                              <li>4. Health, Social & Environment</li>
                          </ol>
                      </div>
                      <div id="menu0" class="tab-pane fade in">
                          <p>Konten sedang disiapkan...</p>
                          <div class="col-md-12">
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button class="btn btn-primary center-block">Lihat lainnya</button>
                          </div>
                      </div>
                    <div id="menu1" class="tab-pane fade">
                        <p>Konten sedang disiapkan...</p>
                        <div class="col-md-12">
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button class="btn btn-primary center-block">Lihat lainnya</button>
                          </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <p>Konten sedang disiapkan...</p>
                        <div class="col-md-12">
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button class="btn btn-primary center-block">Lihat lainnya</button>
                          </div>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <p>Konten sedang disiapkan...</p>
                        <div class="col-md-12">
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                            <div class="col-md-4" style="margin-bottom: 5%">
                                <img src="{{ url('img/thumb.jpg') }}" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button class="btn btn-primary center-block">Lihat lainnya</button>
                          </div>
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
