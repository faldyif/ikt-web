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
                      </div>
                    <div id="menu1" class="tab-pane fade">
                        <p>Konten sedang disiapkan...</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <p>Konten sedang disiapkan...</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <p>Konten sedang disiapkan...</p>
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
