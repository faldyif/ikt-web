@extends('layout.app-with-footer')

@section('title','About | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/wen1.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Profil Perusahaan</h2>
          <h4 class="alignCenter wh mg-t-20">PT Indonesia Kendaraan Terminal</h4>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!--ABOUT-->
    <section>
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-bt-30">
          <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <div class="col-md-5 col-sm-12">
              <h3 class="roboLight" style="line-height: 1.4em; margin-top:70px;">PT Indonesia Kendaraan Terminal merupakan perusahaan kendaraan terminal yang beroperasi di Tanjung Priok Jakarta Indonesia, memberikan pelayanan <i> Cargodoring , Stevedoring, Receiving & Delivery </i> serta berbagai pelayanan terbaik untuk pelanggan kami.</h3>
            </div>
            <div class="col-md-7 col-sm-12" style="text-align: justify">
                <hr class="hrSpec hrSpecOrange">
                <h3 class="mg-b-30 roboBold">Tentang Kami</h3>
                <p>PT Indonesia Kendaraan Terminal merupakan terminal yang secara khusus diusahakan secara komersial untuk memberikan jasa pelayanan terminal kendaraan. Adapun pelayanan jasanya meliputi Stevedoring, Cargodoring, dan Receiving Delivery. Selain itu juga melayani pelayanan jasa lainnya Vehicle Processing Center (VPC) dan Equipment Processing Center (EPC).</p>
                <p>PT Indonesia Kendaraan Terminal didirikan sebagai entitas bisnis tersendiri pada tanggal 5 November 2012 dengan prosentase kepemilikan saham PT Pelabuhan Indonesia II (Persero) sebesar 99% dan PT Multi Terminal Indonesia sebesar 1%. Sebelum menjadi entitas bisnis tersendiri, PT Indonesia Kendaraan Terminal hanya sebuah <i> strategic business </i> unit yang bernama Tanjung Priok Car Terminal (TPT) yang pengelolaannya di bawah Kantor Pusat dan  beroperasi sejak Juni 2007.</p>
                <p>Saat ini PT Indonesia Kendaraan Terminal juga dikenal dengan nama IPC Car Terminal.</p>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!--/ABOUT-->
    <!-- VISION -->
    <section>
      <div class="col-md-12">
          <h2 class="text-center mg-b-20">VISI</h2>
        <img class="img-responsive" style="width:100%;" src="{{url('img/visi.png?a')}}">
      </div>
    </section>
    <section>
      <div class="container-fluid lightWhiteSec wow fadeInUpBig">
        <section class="row pd-bt-30">
          <div class="col-md-8 col-lg-6 col-md-offset-2 col-lg-offset-3">
            <div class="col-md-offset-5 col-md-offset-right-5">
            <div class="col-md-offset-4">
              <hr class="hrSpec hrSpecOrange">
            </div>
            </div>
            <img class="img-responsive" src="{{ url('img/image1.png') }}">
          </div>
        </section>
      </div>
    </section>
    <section>
      <section class="row mg-lr-0 img-ikt">
        <div class="col-md-4 col-sm-4 pd-0">
          <figure class="noMag">
            <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/4.jpg') }}')">
            <a href="{{ url('img/4.jpg') }}" data-rel="lightcase:aboutCollection">
              <div class="overlay"></div>
              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
            </a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 pd-0">
          <figure class="noMag">
            <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/2.jpg') }}')">
            <a href="{{ url('img/2.jpg') }}" data-rel="lightcase:aboutCollection">
              <div class="overlay"></div>
              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
            </a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 pd-0">
          <figure class="noMag">
            <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/3.jpg') }}')">
            <a href="{{ url('img/3.jpg') }}" data-rel="lightcase:aboutCollection">
              <div class="overlay"></div>
              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
            </a>
          </figure>
        </div>
      </section>
    </section>
    <!-- /VISION -->
    <!-- MISSION -->
    <section>
      <div class="container-fluid wow fadeInUpBig pd-t-30">
      <div class="col-md-offset-5 col-md-offset-right-5">
            <div class="col-md-offset-5">
              <hr class="hrSpec hrSpecOrange">
            </div>
            <h2 class="roboBold text-center">MISI</h2>

            </div>
        <section class="row pd-bt-30">
          <div class="col-md-8 col-md-offset-2">
            <section class="row">
              <div class="col-md-12 text-center mg-b-30">
                  <h3>Sebagai pengelola terminal kendaraan yang memaksimalkan nilai tambah bagi seluruh kepentingan (stakeholders) secara berkesinambungan dalam rangka meningkatkan perekonomian nasional</h3>
              </div>
              <div class="col-md-6 text-center mg-b-30">
                <center><img class="img-responsive" src="{{ url('img/1_corporate_culture.png') }}" style="width: 80px; height: auto; margin: 10px"></center>
                <h3 class="mg-b-20">Pelanggan &amp Mitra</h3>
                <p>Menyediakan, membangun dan mengoperasikan pelayanan terminal dan logistik secara terintegrasi, berkualitas dan handal untuk memenuhi kepuasan pelanggan dan mitra</p>
              </div>
              <div class="col-md-6 text-center mg-b-30">
              <center><img class="img-responsive" src="{{ url('img/2.png') }}" style="width: 80px; height: auto; margin: 10px"></center>
                <h3 class="mg-b-20">Pemegang Saham</h3>
                <p>Memaksimalkan nilai perusahaan bagi pemegang saham dan meningkatkan kesehatan perusahaan secara profesional dengan memenuhi aspek-aspek tatakelola perusahaan yang baik</p>
              </div>
              <div class="col-md-6 text-center mg-b-30">
              <center><img class="img-responsive" src="{{ url('img/3.png') }}" style="width: 80px; height: auto; margin: 10px"></center>
                <h3 class="mg-b-20">Karyawan</h3>
                <p>Menciptakan lingkungan kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, bertintegritas, bangga kepada perusahaan dan budayanya, serta memberikan kesejahteraan dan kepuasan kepada karyawan</p>
              </div>
              <div class="col-md-6 text-center mg-b-30">
              <center><img class="img-responsive" src="{{ url('img/4.png') }}" style="width: 80px; height: auto; margin: 10px"></center>
                <h3 class="mg-b-20">Masyarakat &amp Negara</h3>
                <p>Menciptakan lingkungan kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, bertintegritas, bangga kepada perusahaan dan budayanya, serta memberikan kesejahteraan dan kepuasan kepada karyawan</p>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!-- /MISSION -->
    <!-- ROLE MODEL -->
    <section class="lightWhiteSec">
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-bt-30 mg-bt-10">
          <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <!-- <section class="row flex-row-center be-block-768"> -->
              <div class="col-md-5 col-sm-12">
                <div class="col-md-12">
                  <hr class="hrSpec hrSpecOrange">
                  <h3 class="mg-b-20 roboBold">Role Model</h3>
                  <h5 class="lh-15em" style="text-align: justify">Seluruh pejabat struktural di lingkungan PT IKT merupakan Role Model. Dimana Role Model bertanggungjawab untuk mengkan ajaran kepemimpinan yang dilahirkan oleh Ki Hajar Dewantoro, yaitu Ing ngarso sung tulodho, ing madyo mangun karso, tut wuri handayani. Selain itu, Role Model harus dapat mempengaruhi lingkungannya untuk bergerak melakukan perubahan positif yang membantu manajemen dalam mencapai visi dan misi perusahaan.</h5>
                </div>
                <div class="col-md-12 mg-b-20">
                  <hr class="hrSpec hrSpecOrange">
                  <h3 class="mg-b-20 roboBold">Change Agent</h3>
                  <h5 class="lh-15em" style="text-align: justify">Seluruh staf/officer di lingkungan PT IKT adalah Change Agent. Ini dimaksudkan untuk memberikan ruang inovasi, kreativitas, dan kontribusi kepada seluruh staf/officer untuk membuat segala sesuatu menjadi lebih baik sesuai tugas, tanggung jawab, dan perannya masing-masing. Change Agent adalah pribadi yang menjadi pengubah lingkungan dan merestorasi mental serta membantu percepatan proses bisnis di IKT.</h5>
                </div>
              </div>
              <div class="col-md-7 col-sm-12">
                <!-- <section class="row"> -->
                <div class="col-md-12">
                  <hr class="hrSpec hrSpecOrange">
                  <h3 class="mg-b-20 roboBold">Representasi Filosofis</h3>
                  <div class="col-md-12">
                    <section class="be-flex">
                      <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                      <section>
                        <h5 class="roboBold">Ing Ngarso Sung Tulodho</h5>
                        <p style="text-align: justify">Setiap pemimpin harus selalu menjadi contoh dalam setiap sepak terjangnya, kiprahnya dan langkah-langkah dalam kehidupannya</p>
                      </section>
                    </section>
                  </div>
                  <div class="col-md-12">
                    <section class="be-flex">
                      <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                      <section>
                        <h5 class="roboBold">Ing Madyo Mangun Karso</h5>
                        <p style="text-align: justify">Pemimpin harus berada ditengah rakyat yang dipimpinnya untuk memberikan semangat</p>
                      </section>
                    </section>
                  </div>
                  <div class="col-md-12">
                    <section class="be-flex">
                      <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                      <section>
                        <h5 class="roboBold">Tut Wuri Handayani</h5>
                        <p style="text-align: justify">Seorang pemimpin harus selalu memberikan motivasi dan dorongan dari belakang</p>
                      </section>
                    </section>
                  </div>
                </div>
                <!-- </section> -->
              </div>
            <!-- </section> -->
          </div>
        </section>
      </div>
    </section>
    <!-- /ROLE MODEL -->
    <!-- LOGO -->
    <section>
      <div class="container-fluid wow fadeInUpBig" style="text-align: justify">
        <section class="row pd-bt-30 mg-bt-10">
          <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
            <section class="row">
              <div class="col-md-7">
                <hr class="hrSpec hrSpecOrange">
                <h3 class="roboBlack">Logo Perusahaan</h3>
                
                <h4 class="mg-t-20 roboBlack">Bentuk Logo</h4>
                <p>Bentuk Logo perusahaan yang melengkung menandakan dinamis dan tangkas yang dirancang untuk mewakili ambisi perusahaan menjadi Operator Terminal Kendaraan yang berkelas Dunia.</p>
                <h4 class="mg-t-20 roboBlack">Warna Abu-abu</h4>
                <p>Warna abu-abu pada tulisan IPC dan Terminal menggambarkan kehangatan dan keramahan wujud pelayanan kepada pemangku kepentingan. Logo menggambarkan identitas modern, percaya diri, dan profesional dihadapan semua pemangku kepentingan.</p>
                <h4 class="mg-t-20 roboBlack">Warna Jingga</h4>
                <p>Warna Jingga pada tulisan Car dan gambar melengkung bagian atas menggambarkan semangat perubahan, kekuatan, optimisme, serta kebanggan setiap karyawan, untuk bersama-sama berdiri di garis terdepan dalam mencapai tujuan organisasi.</p>
                <h4 class="mg-t-20 roboBlack">Warna Biru</h4>
                <p>Warna Biru pada gambar melengkung bagian bawah menggambarkan kesiapan memasuki era baru yang dinamis dan fleksibiltas setiap komponen dalam perusahaan menghadapi berbagai tantangan guna mencapai tujuan perusahaan sebagai world-class port operator.</p>

                <h4 class="mg-t-20 roboBlack">We Will <font color="#E1373F">S</font><font color="#35A5D7">H</font><font color="#ADCD49">I</font><font color="#D9853A">N</font><font color="#D35A9D">E</font> With You</h4>
                <p>Dengan tagline tersebut memberikan motivasi dan spirit bagi kita semuanya untuk berkontribusi kepada masa depan Bangsa Indonesia yang lebih baik melalui kolaborasi dan sinergi para pihak dalam mewujudkan PT IKT sebagai terminal kendaraan berkelas dunia yang unggul dalam operasional dan pelayanan. Selain itu, kelak PT IKT akan menjadi salah satu kebanggaan Bangsa Indonesia.</p>
              </div>
              <div class="col-md-5">
                <figure class="pd-lr-30">
                  <img src="{{ url('img/ikt-logo.png') }}" class="pd-lr-30" alt="PT Indonesia Kendaraan Terminal">
                  <figcaption class="caption" style="margin: 0;">
                    Logo PT Indonesia Kendaraan Terminal bermakna friendly, spirit, energy dan agility.
                  </figcaption>
                  <img src="{{ url('img/ikt-profil.png') }}" class="pd-30" alt="PT Indonesia Kendaraan Terminal">
                  <ul style="padding-left: 0;">
                    <section class="be-flex">
                      <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                      <section>
                        <h5>Mutual respect, mutual trust, mutual understanding, mutual benefit</h5>
                      </section>
                    </section>
                    <section class="be-flex">
                      <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                      <section>
                        <h5>Happy employee, happy family, happy customer, happy country</h5>
                      </section>
                    </section>
                    <section class="be-flex">
                      <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                      <section>
                        <h5>Hear you, understand you, grow together</h5>
                      </section>
                    </section>
                  </ul>
                </figure>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!-- /LOGO -->
    <!-- WORKER QUALIFICATION -->
<section id="res" class="lightWhiteSec">
  <div class="container-fluid wow fadeInUpBig">
    <section class="row pd-bt-30 mg-bt-10">
      <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <section class="row">
          <div class="col-md-5">
            <!-- Untuk gambar -->

          </div>
          <div class="col-md-7">
            <hr class="hrSpec hrSpecOrange">
            <h2 class="roboBlack">Worker Qualification</h2>
            <!-- Untuk tulisan -->
            <div class="col-md-12">
              <div class="col-md-12">
                <section class="be-flex">
                  <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                  <section>
                    <h4 class="roboBold">Experienced</h4>
                    <p>Berpengalaman</p>
                  </section>
                </section>
              </div>
              <div class="col-md-12">
                <section class="be-flex">
                  <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                  <section>
                    <h4 class="roboBold">Certified</h4>
                    <p>Tersertifikasi</p>
                  </section>
                </section>
              </div>
              <div class="col-md-12">
                <section class="be-flex">
                  <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                  <section>
                    <h4 class="roboBold">High Production</h4>
                    <p>Produktivitas tinggi (200 unit/ship/hour)</p>
                  </section>
                </section>
              </div>
              <div class="col-md-12">
                <section class="be-flex">
                  <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                  <section>
                    <h4 class="roboBold">200 Proper & Educated Drivers Available</h4>
                    <p>Tersedia 200 driver yang terlatih dan terdidik dengan baik</p>
                  </section>
                </section>
              </div>
              <div class="col-md-12">
                <section class="be-flex">
                  <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                  <section>
                    <h4 class="roboBold">Zero Damage & Zero Accident</h4>
                    <p>Tanpa Kerusakan & Kecelakaan</p>
                  </section>
                </section>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
  </div>
</section>
<!-- /WORKER QUALIFICTION -->
 <!-- BENEFIT OF RORO -->
<section id="res-roro" class="">
  <div class="container-fluid wow fadeInUpBig">
    <section class="row pd-bt-30 mg-bt-10">
      <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <section class="row">
          <div class="col-md-7">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="roboBlack">Benefit Roro</h3>
            <h4 class="roboLight">(Short Sea Shipping)</h4>
            <!-- Untuk tulisan -->
            <div class="col-md-12">
              <div class="col-md-12 bullet">
                <section class="be-flex">
                  <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                  <section>
                    <h4 class="roboBold">Pemerintah</h4>
                    <ul>
                      <li><p>Mendukung konektifitas di pulau Jawa dan antar pulau</p></li>
                      <li><p>Meringankan anggaran pemeliharaan dan perbaikan Jalur Pantura mencapai IDR 1 trilyun per tahun</p></li>
                      <li><p>Menghindari kecelakaan maut akibat kecelakaan truk yang <i>overloaded</i> di jalan raya yang mengakibatkan kemacetan Jalur Pantura</p></li>
                    </ul>
                  </section>
                </section>
              </div>
              <div class="col-md-12 bullet">
                <section class="be-flex">
                  <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                  <section>
                    <h4 class="roboBold">Cargo Owner</h4>
                    <ul>
                      <li><p>Mengurangi ekonomi biaya tinggi di Jalur Pantura</p></li>
                      <li><p>Kepastian dan keamanan cargo terjamin</p></li>
                      <li><p><b>Fastest lead time with regular service</b> Menciptakan efisiensi melalui <i>management</i> yang efektif</p></li>
                    </ul>
                  </section>
                </section>
              </div>
              <div class="col-md-12 bullet">
                <section class="be-flex">
                  <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                  <section>
                    <h4 class="roboBold">Perusahaan Logistik</h4>
                    <ul>
                      <li>                    <p>Supply chain management yang efisien mendorong inventory management yang efektif</p>
                      </li>
                      <li>                    <p>Kepastian dan keamanan caargo terjamin</p>
                      </li>
                      
                    </ul>
                  </section>
                </section>
              </div>
              <div class="col-md-12 bullet">
                <section class="be-flex">
                  <i class="fa fa-check-circle mg-t-10 bl fa-lg mg-r-10"></i>
                  <section>
                    <h4 class="roboBold">Perusahaan Trucking</h4>
                    <ul>
                        <li>                    <p>Menghindari kemacetan yang mengakibatkan biaya operasional tinggi</p>
                        </li>
                        <li>                    <p>Menghindari biaya pengawalan dan pungli jalanan di banyak titik</p>
                        </li>
                        <li>                    <p>Mengurangi konsumsi bahan bakar truk</p>
                        </li>
                        <li>                    <p>Menghindari resiko kecelakaan di jalan raya</p>
                        </li>
                        <li>                    <p>Mengurangi biaya pemeliharaan armada truk (suku cadang, ban, dll)</p>
                        </li>
                        <li>                    <p>Meningkatkan produktifitas dan efektifitas pengemudi</p>
                        </li>
                      </ul>
                  </section>
                </section>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <!-- Untuk gambar -->
            
          </div>
        </section>
      </div>
    </section>
  </div>
</section>
<!-- /BENEFIT OF RORO -->
<!-- Sertification -->
<section>
    <div class="container-fluid wow fadeInUpBig" style="text-align: justify">
      
      <h2 class="roboBold text-center">SERTIFIKASI</h2>
      <section class="row pd-bt-30 mg-bt-10">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
           <!-- newAlbumList -->
           <div class="col-md-4 mg-b-20">
              <section>
                  <div class="card">
                      <figure>
                          <img class="card-img-top" src="{{url('img/ISO9001.jpg?a')}}" style="background-image: url('{{url('img/ISO9001.jpg?a')}}')"  alt="Card image cap">
                          <a href="{{url('img/ISO9001.jpg?a')}}" data-rel="lightcase:galleryCollection" title="Nama Album 2">
                              <div class="overlay"></div>
                              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                          </a>
                      </figure>
                      <div class="card-body">
                          <hr class="hrSpec hrSpecOrange">
                          <h3> Sistem Standar Mutu Operasional ISO 9001:2015</h3>
                      </div>
                  </div>
                  
              </section>
          </div>
          <!-- /newAlbumList -->
           <!-- newAlbumList -->
           <div class="col-md-4 mg-b-20">
              <section>
                  <div class="card">
                      <figure>
                          <img class="card-img-top" src="{{url('img/ISO14001.jpg?a')}}" style="background-image: url('{{url('img/ISO14001.jpg?a')}}')"  alt="Card image cap">
                          <a href="{{url('img/ISO14001.jpg?a')}}" data-rel="lightcase:galleryCollection" title="Nama Album 2">
                              <div class="overlay"></div>
                              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                          </a>
                      </figure>
                      <div class="card-body">
                          <hr class="hrSpec hrSpecOrange">
                          <h3> Sistem Standar Lingkungan ISO 14001:2015</h3>
                      </div>
                  </div>
                  
              </section>
          </div>
          <!-- /newAlbumList -->
           <!-- newAlbumList -->
           <div class="col-md-4 mg-b-20">
              <section>
                  <div class="card">
                      <figure>
                          <img class="card-img-top" src="{{url('img/OHSAS18001.jpg')}}" style="background-image: url('{{url('img/OHSAS18001.jpg')}}')"  alt="Card image cap">
                          <a href="{{url('img/OHSAS18001.jpg')}}" data-rel="lightcase:galleryCollection" title="Nama Album 2">
                              <div class="overlay"></div>
                              <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                          </a>
                      </figure>
                      <div class="card-body">
                          <hr class="hrSpec hrSpecOrange">
                          <h3> Sistem Standar K3 OHSAS 18001:2007</h3>
                      </div>
                  </div>
                  
              </section>
          </div>
          <!-- /newAlbumList -->
          
        </div>
      </section>
    </div>
  </section>
<!-- PETA LOKASI -->
<section>
  <div class="container-fluid wow fadeInUpBig">
    <section class="row pd-bt-30 mg-bt-10">
      <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
        <section class="row">
          <div class="col-md-12">
            <hr class="hrSpec hrSpecOrange">
            <h2 class="roboBlack">Peta Lokasi</h2>
            <div class="map">
              <div class="overlay-map"></div>
              <iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ08qLBScgai4RsNf3uWUX7Bg&key=AIzaSyBUi9E0ENiu40ga5gMfRc96XvbRc1zIi5o" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </section>
      </div>
    </section>
  </div>
</section>
<!-- /PETA LOKASI -->
@endsection