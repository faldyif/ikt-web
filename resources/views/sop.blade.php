@extends('layout.app-with-footer')

@section('title','Standard Operating Procedure | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Standard Operating Procedure</h2>
                <h4 class="alignCenter wh mg-t-20">PT Indonesia Kendaraan Terminal</h4>
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
                                    <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Prosedur Bongkar Terminal Internasional</span>
                                </div>
                            </a>
                        </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu0">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Prosedur Delivery Terminal Internasional</span>
                        </div>
                      </a>
                    </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu1">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Prosedur Muat Terminal Internasional</span>
                        </div>
                       </a>
                     </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu2">
                        <div class="be-flex">
                         <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Prosedur Receiving Terminal Internasional</span>
                        </div>
                       </a>
                     </li>
                      {{--<li class="">--}}
                          {{--<a data-toggle="pill" href="#menu3">--}}
                              {{--<div class="be-flex">--}}
                                  {{--<i class="fa fa-th mg-r-15 mg-t-5"></i> <span>BOC</span>--}}
                              {{--</div>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                      {{--<li class="">--}}
                          {{--<a data-toggle="pill" href="#menu4">--}}
                              {{--<div class="be-flex">--}}
                                  {{--<i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Keterbukaan Informasi</span>--}}
                              {{--</div>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                      {{--<li class="">--}}
                          {{--<a data-toggle="pill" href="#menu5">--}}
                              {{--<div class="be-flex">--}}
                                  {{--<i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Board Manual</span>--}}
                              {{--</div>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                      {{--<li class="">--}}
                          {{--<a data-toggle="pill" href="#menu6">--}}
                              {{--<div class="be-flex">--}}
                                  {{--<i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Code of Conduct</span>--}}
                              {{--</div>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                      {{--<li class="">--}}
                          {{--<a data-toggle="pill" href="#menu7">--}}
                              {{--<div class="be-flex">--}}
                                  {{--<i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Whistleblowing System</span>--}}
                              {{--</div>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                      {{--<li class="">--}}
                          {{--<a data-toggle="pill" href="#menu8">--}}
                              {{--<div class="be-flex">--}}
                                  {{--<i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Pengelolaan Gratifikasi</span>--}}
                              {{--</div>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                      {{--<li class="">--}}
                          {{--<a data-toggle="pill" href="#menu9">--}}
                              {{--<div class="be-flex">--}}
                                  {{--<i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Pedoman Kepatuhan LHKPN</span>--}}
                              {{--</div>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                      {{--<li class="">--}}
                          {{--<a data-toggle="pill" href="#menu10">--}}
                              {{--<div class="be-flex">--}}
                                  {{--<i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Internal Auditor</span>--}}
                              {{--</div>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                      {{--<li class="">--}}
                          {{--<a data-toggle="pill" href="#menu11">--}}
                              {{--<div class="be-flex">--}}
                                  {{--<i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Auditor Independent</span>--}}
                              {{--</div>--}}
                          {{--</a>--}}
                      {{--</li>--}}
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <hr class="hrSpec hrSpecOrange">
                      <h4 class="card-title roboBold">Prosedur Bongkar Terminal Internasional</h4>
                        <img class="img-responsive" src="{{ url('img/prosedur/p_bongkar_terminal_internasional/1.jpg') }}" alt="">
                        <img class="img-responsive" src="{{ url('img/prosedur/p_bongkar_terminal_internasional/2.jpg') }}" alt="">
                    </div>
                    <div id="menu0" class="tab-pane fade">
                        <hr class="hrSpec hrSpecOrange">
                        <h4 class="card-title roboBold">Prosedur Delivery Terminal Internasional</h4>
                        <img class="img-responsive" src="{{ url('img/prosedur/p_delivery_terminal_internasional/1.jpg') }}" alt="">
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <hr class="hrSpec hrSpecOrange">
                        <h4 class="card-title roboBold">Prosedur Muat Terminal Internasional</h4>
                        <img class="img-responsive" src="{{ url('img/prosedur/p_muat_terminal_internasional/1.jpg') }}" alt="">
                        <img class="img-responsive" src="{{ url('img/prosedur/p_muat_terminal_internasional/2.jpg') }}" alt="">
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <hr class="hrSpec hrSpecOrange">
                        <h4 class="card-title roboBold">Prosedur Receiving Terminal Internasional</h4>
                        <img class="img-responsive" src="{{ url('img/prosedur/p_receiving_terminal_internasional/1.jpg') }}" alt="">
                        <img class="img-responsive" src="{{ url('img/prosedur/p_receiving_terminal_internasional/2.jpg') }}" alt="">
                    </div>
                    {{--<div id="menu3" class="tab-pane fade">--}}
                        {{----}}
                        {{--<div class="col-md-12">--}}
        {{----}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<hr class="hrSpec hrSpecOrange">--}}
                                        {{--<h4 class="card-title roboBold">BOC 2016</h4>--}}
                                        {{--<div class="row">--}}
                                            {{--<!--First review-->--}}
                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/Dede R. Martin - Komisaris Utama.jpg')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-title">Dede R Martin</h4>--}}
                                                    {{--<p>Komisaris Utama</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<!--Second review-->--}}
                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/Abdul Hakam - Komisaris.jpg')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body ">--}}
                                                    {{--<h4 class="media-title">Abdul Hakam</h4>--}}
                                                    {{--<p>Komisaris</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<!--Second review-->--}}
                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/Fachry Ali - Komisaris.jpg')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-title">Fachry Ali</h4>--}}
                                                    {{--<p>Komisaris</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/Wahyu Hidayat - Komisaris.jpg')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-title">Wahyu Hidayat</h4>--}}
                                                    {{--<p>Komisaris</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{----}}
                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/Dian Lesmana - Komisaris.jpg')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-title">Dian Lesmana</h4>--}}
                                                    {{--<p>Komisaris</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                        {{----}}
                                        {{--</div>--}}
                                        {{--<!-- /.row -->--}}
                                    {{--</div>--}}
                    {{----}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<hr class="hrSpec hrSpecOrange">--}}
                                        {{--<h4 class="card-title roboBold">BOC 2017</h4>--}}
                                        {{--<div class="row grid-divider">--}}
                                            {{--<!--First review-->--}}
                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/ELVYNGMASASSYA.png?1')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-title">Elvyn G Masassya                                                    </h4>--}}
                                                    {{--<p>Komisaris Utama</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/Abdul Hakam - Komisaris.jpg')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-title">Abdul Hakam--}}
                                                    {{--</h4>--}}
                                                    {{--<p>Komisaris Bidang SDM & GCG--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/defaultavatar.png')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-title">Marta Hardisarwono--}}
                                                    {{--</h4>--}}
                                                    {{--<p>Komisaris Bidang Keuangan--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/defaultavatar.png')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-title">Fathoni Akbar--}}
                                                    {{--</h4>--}}
                                                    {{--<p>Komisaris Bidang Manajemen Resiko--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            {{--<hr><div class="media">--}}
                                                {{--<a class="media-left waves-light">--}}
                                                    {{--<img class="rounded-circle" style="width:140px; height:120px; border: 2px solid; padding:10px; border-color:#63636350;" src="{{url('img/Dian Lesmana - Komisaris.jpg')}}" alt="Generic placeholder image">--}}
                                                {{--</a>--}}
                                                {{--<div class="media-body">--}}
                                                    {{--<h4 class="media-title">Dian Lesmana</h4>--}}
                                                    {{--<p>Komisaris Bidang Teknik--}}
                                                    {{--</p>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                        {{----}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{----}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="menu4" class="tab-pane fade">--}}
                        {{--<hr class="hrSpec hrSpecOrange">--}}
                        {{--<h4 class="card-title roboBold">Keterbukaan Informasi</h4>--}}
                        {{--<p>Konten sedang disiapkan...</p>--}}
                    {{--</div>--}}
                    {{--<div id="menu5" class="tab-pane fade">--}}
                        {{--<hr class="hrSpec hrSpecOrange">--}}
                        {{--<h4 class="card-title roboBold">Board Manual</h4>--}}
                        {{--<div class="col-md-12">--}}
                          {{--<p class="text-justify">Tata  laksana Kerja Dewan Komisaris dan Direksi <i>(Board Manual)</i> adalah panduan bagi Dewan Komisaris dan Direksi yang menjelaskan tahapan aktivitas secara terstruktur, sistematis, mudah dipahami, dan dapat dijalankan dengan konsisten, sehingga dapat menjadi acuan bagi Dewan Komisaris dan Direksi dalam melaksanakan tugas masing-masing untuk mencapai visi dan misi perusahaan.</p>--}}
                          {{--<p class="text-justify">Tata laksana Kerja Dewan Komisaris dan Direksi disusun berdasarkan prinsip-prinsip hukum korporasi, peraturan perundang-undangan yang berlaku, ketentuan Anggaran Dasar, keputusan-keputusan serta arahan Rapat Umum Pemegang Saham, dan prinsip-prinsip <i>Good Corporate Governance</i>, yaitu Transparansi, Akuntabilitas, Responsibilitas (Tanggung Jawab), Independensi (Kemandirian), <i>Fairness</i> (Kewajaran) dan <i>Trusted</i> (terpercaya).</p>--}}
                          {{--<p class="text-justify">Tata laksana Kerja Dewan Komisaris dan Direksi ini dimaksudkan untuk menjelaskan hubungan kerja Dewan Komisaris dan Direksi dalam melaksanakan tugas agar tercipta pengelolaan Perusahaan secara profesional, transparan dan efisien.</p>--}}
                          {{--<p class="text-justify">Prinsip-prinsip Hubungan Kerja Direksi dengan Dewan Komisaris :</p>--}}
                          {{--<div class="bullet">--}}
                            {{--<ol>--}}
                              {{--<li>Dewan Komisaris menghormati tugas dan wewenang Direksi dalam mengelola Perusahaan sebagaimana telah diatur dalam peraturan perundang-undangan dan Anggaran Dasar Perusahaan.</li>--}}
                              {{--<li>Direksi menghormati tugas dan wewenang Dewan Komisaris untuk melakukan pengawasan dan memberikan nasihat terhadap kebijakan pengelolaan Perusahaan sesuai dengan ketentuan Anggaran Dasar.</li>--}}
                              {{--<li>Setiap hubungan kerja antara Direksi dengan Dewan Komisaris merupakan hubungan yang bersifat formal kelembagaan, dalam arti senantiasa dilandasi oleh suatu mekanisme baku atau korespondensi yang dapat dipertanggungjawabkan.</li>--}}
                              {{--<li>Hubungan Kerja Informal tidak dapat dijadikan sebagai dasar pengambilan keputusan.</li>--}}
                              {{--<li>Dewan Komisaris berhak memperoleh informasi Perusahaan secara tepat waktu, lengkap, terukur dan akurat.</li>--}}
                            {{--</ol>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="menu6" class="tab-pane fade">--}}
                        {{--<hr class="hrSpec hrSpecOrange">--}}
                        {{--<h4 class="card-title roboBold">Code of Conduct</h4>--}}
                        {{--<div class="col-md-12">--}}
                        {{--<p class="text-justify">Kode Etik Bisnis adalah seperangkat panduan yang berisi prinsip-prinsip yang mengatur bagaimana kita menjalankan nilai-nilai dalam sehari-hari mengaspirasi kita untuk mencapai visi PT Indonesia Kendaraan Terminal. Kode Etik Bisnis PT Indonesia Kendaraan Terminal dibangun di atas fondasi yang kuat dari Visi dan <i>Corporate Values</i> yang kami junjung di seluruh fungsi serta seluruh wilayah geografis operasional kami.</p>--}}
                        {{--<p class="text-justify">Kode Etik Bisnis mencerminkan tindakan dan nilai-nilai yang kami pegang dalam berinteraksi dengan semua <i>stakeholders</i> PT Indonesia Kendaraan Terminal karyawan, Pelanggan, Pemerintah, vendor dan komunitas untuk membangun hubungan jangka panjang dengan mereka. Tujuan dari kode etik ini adalah untuk memberikan informasi, kesadaran, pelatihan serta cara untuk melaporkan setiap pelanggaran atau ketidakjelasan terkait dengan etika profesional dan etika kerja.</p>--}}
                        {{--<p class="text-justify">Insan PT Indonesia Kendaraan Terminal diharapkan untuk :</p>--}}
                        {{--<div class="bullet-number">--}}
                          {{--<ol>--}}
                            {{--<li>Menunjukkan secara nyata kejujuran, kedisiplinan dan menerapkan keterampilan, pengetahuan, keahlian dan inovasi.</li>--}}
                            {{--<li>Menolak dengan tegas semua perilaku Korupsi, Kolusi dan Nepotisme karena akan sangat merugikan pertumbuhan perusahaan.</li>--}}
                            {{--<li>Memberikan perhatian penuh pada Hak Asasi Manusia dan kewajiban sesuai dengan hukum yang berlaku dan melarang pelanggaran Hak Asasi Manusia dalam bentuk apapun.</li>--}}
                          {{--</ol>--}}
                        {{--</div>--}}
                        {{--<p class="text-justify">KERAGAMAN</p>--}}
                        {{--<div class="bullet-number">--}}
                          {{--<ol>--}}
                            {{--<li>Menghormati sesama rekan kerja dan membangun ikatan saling percaya.</li>--}}
                            {{--<li>Menghindari percakapan dan kegiatan yang menyinggung perasaan orang lain.</li>--}}
                            {{--<li>Membentuk jaringan yang kolaboratif untuk mempromosikan semangat tim dan inklusivitas.</li>--}}
                          {{--</ol>--}}
                        {{--</div>--}}
                        {{--<p class="text-justify">KESEMPATAN YANG SETARA</p>--}}
                        {{--<div class="bullet-number">--}}
                          {{--<ol>--}}
                            {{--<li>Berperilaku dengan penuh rasa hormat dan tidak mendiskriminasi rekan kerja berdasarkan hal-hal yang telah disebutkan di atas.</li>--}}
                            {{--<li>Segera laporkan kepada atasan, atasan daripada atasan, atau SDM apabila menghadapi atau melihat adanya diskriminasi yang terjadi karena hal tersebut melanggar hukum serta aturan di PT Indonesia Kendaraan Terminal.</li>--}}
                          {{--</ol>--}}
                        {{--</div>--}}
                        {{--<p class="text-justify">MERITOKRASI dan KINERJA</p>--}}
                        {{--<div class="bullet-number">--}}
                          {{--<ol>--}}
                            {{--<li>Suatu fungsi akan dibuat ketika muncul kebutuhan akan suatu pekerjaan.</li>--}}
                            {{--<li>Setiap fungsi membutuhkan kompetensi yang tepat serta moral yang baik.</li>--}}
                            {{--<li>Setiap penugasan pekerjaan diberikan berdasarkan kriteria yang jelas dan dilakukan melalui prosedur yang adil dan transparan.</li>--}}
                            {{--<li>Setiap fungsi membutuhkan peningkatan kompetensi melalui pembelajaran serta pengembangan yang berkelanjutan.</li>--}}
                          {{--</ol>--}}
                        {{--</div>--}}
                        {{--<p class="text-justify">ZAT-ZAT, OBAT-OBATAN TERLARANG DAN TINDAKAN ASUSILA</p>--}}
                        {{--<p class="text-justify">Kami berkomitmen untuk menciptakan lingkungan kerja bebas penyalahgunaan zat-zat dan obat-obatan terlarang serta tindakan asusila. Kami secara tegas menentang segala bentuk penjualan, distribusi, kepemilikan atau penggunaan obat-obatan terlarang dan alkohol oleh insan PT Indonesia Kendaraan Terminal di lingkungan kerja atau di fasilitas kerja lainnya, serta tindakan yang bertentangan dengan norma kesusilaan. Peraturan ini secara tegas berlaku baik saat rehat maupun saat periode bekerja selama insan PT Indonesia Kendaraan Terminal bertanggung jawab terhadap pekerjaan tersebut. Perusahaan memiliki hak untuk melakukan pencarian dan pengujian untuk membuktikan penggunaan obat-obatan terlarang, alkohol dan tindak asusila sesuai dengan hukum yang berlaku kapanpun dibutuhkan.</p>--}}
                        {{--<p class="text-justify">Sebagai insan PT Indonesia Kendaraan Terminal yang bertanggung jawab, semua insan PT Indonesia Kendaraan Terminal harus mematuhi Peraturan yang telah tertulis di atas. Setiap pelanggaran terhadap peraturan penyalahgunaan obat-obatan terlarang dan tindakan asusila akan mengarah pada tindakan tegas termasuk pemutusan hubungan kerja bagi yang bersangkutan sesuai dengan proses yang berlaku.</p>--}}
                        {{--<p class="text-justify">TATA CARA BERPAKAIAN</p>--}}
                        {{--<div class="bullet-number">--}}
                          {{--<ol>--}}
                            {{--<li>Insan PT Indonesia Kendaraan Terminal diharapkan untuk berpakaian rapi dan pantas serta sesuai dengan budaya perusahaan dan pekerjaan masing-masing.</li>--}}
                            {{--<li>Segala bentuk pakaian yang tidak pantas serta dapat mempermalukan perusahaan dan mempertaruhkan reputasi perusahaan, secara tegas perlu dihindari.</li>--}}
                            {{--<li>Insan PT Indonesia Kendaraan Terminal diharapkan untuk menggunakan pakaian seragam sesuai dengan peraturan yang telah ditetapkan dan sesuai dengan unit pekerjaan masing-masing.</li>--}}
                          {{--</ol>--}}
                        {{--</div>--}}
                        {{--<p class="text-justify">LINGKUNGAN KERJA AMAN DAN BEBAS DARI PELECEHAN</p>--}}
                        {{--<div class="bullet-number">--}}
                          {{--<ol>--}}
                            {{--<li>Insan PT Indonesia Kendaraan Terminal tidak diperkenankan berperilaku kasar, otoriter, intimidatif, menghina, menekan, menyinggung, atau tidak sesuai dengan norma yang berlaku di masyarakat.</li>--}}
                            {{--<li>Insan PT Indonesia Kendaraan Terminal tidak diperkenankan mengeluarkan pernyataan dan lelucon yang mengarah pada kekerasan dan dapat melukai perasaan seseorang.</li>--}}
                            {{--<li>Insan PT Indonesia Kendaraan Terminal tidak diperkenankan membiarkan atau mentolerir segala bentuk pelecehan seperti tindakan-tindakan, komentar, kontak fisik, gangguan, atau pembicaraan yang tidak pantas.</li>--}}
                          {{--</ol>--}}
                        {{--</div>--}}
                        {{--<p class="text-justify">TANGGUNG JAWAB DALAM PENGGUNAAN ASET DAN WAKTU PERUSAHAAN</p>--}}
                        {{--<p class="text-justify">Aset PT Indonesia Kendaraan Terminal bukan hanya tangible assets (aset berwujud) tetapi juga intangible assets seperti waktu kerja insan PT Indonesia Kendaraan Terminal, Hak Kekayaan Intelektual, informasi yang dilindungi oleh hak kepemilikian, desain produk dan sejenisnya.</p>--}}
                        {{--<div class="bullet-number">--}}
                          {{--<ol>--}}
                            {{--<li>Kemampuan untuk menentukan skala prioritas demi keuntungan optimal Perusahaan.</li>--}}
                            {{--<li>Kebiasaan untuk menghindari ketidakefisienan terutama dalam hal keuangan, sumber daya, dan waktu perusahaan.</li>--}}
                          {{--</ol>--}}
                        {{--</div>--}}
                        {{--<p class="text-justify">PENGGUNAAN KOMUNIKASI ELEKTRONIK</p>--}}
                        {{--<div class="bullet-number">--}}
                          {{--<ol>--}}
                            {{--<li>Penggunaan yang masuk akal dan tidak mengakibatkan penambahan biaya maupun pemakaian waktu kerja.</li>--}}
                            {{--<li>Penggunaan yang tidak ilegal dan tidak merusak reputasi PT Indonesia Kendaraan Terminal dalam segala bentuk.</li>--}}
                            {{--<li>Biaya untuk melakukan percakapan/ penggunaan yang bersifat personal akan ditanggung oleh individu yang bersangkutan. Segala bentuk kesalahan dalam penggunaan fasilitas perusahaan adalah pelanggaran dan dikenakan hukuman.</li>--}}
                            {{--<li>Menggunakan sistem komunikasi elektronik sesuai prosedur peruntukkannya.</li>--}}
                            {{--<li>Menjaga sistem komunikasi elektronik dari setiap kemungkinan penyalahgunaan, penyadapan dan perusakan data oleh pihak lain.</li>--}}
                            {{--<li>Bersikap hati-hati dalam menyimpan, mencatat dan menggunakan password.</li>--}}
                          {{--</ol>--}}
                        {{--</div>--}}
                        {{--<p class="text-justify">KESEHATAN, KESELAMATAN KERJA DAN LINGKUNGAN MASYARAKAT</p>--}}
                        {{--<div class="bullet-number">--}}
                          {{--<ol>--}}
                            {{--<li>Mematuhi standar, kebijakan dan berbagai prosedur Health Safety and Environment (HSE) di dalam lingkungan pekerjaan.</li>--}}
                            {{--<li>Berpartisipasi aktif dalam setiap program HSE dan pelestarian lingkungan di lingkungan kerja.</li>--}}
                            {{--<li>Memenuhi atau melampaui standar peraturan pemerintah mengenai lingkungan hidup.</li>--}}
                            {{--<li>Peka dan menghormati nilai dan hak tradisional masyarakat setempat disetiap daerah operasi pelabuhan.</li>--}}
                          {{--</ol>--}}
                        {{--</div>--}}
                      {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="menu7" class="tab-pane fade">--}}
                        {{--<hr class="hrSpec hrSpecOrange">--}}
                        {{--<h4 class="card-title roboBold">Whistleblowing System</h4>--}}
                        {{--<div class="col-md-12">--}}
                          {{--<p class="text-justify"><b>Pedoman Sistem Pelaporan Pelanggaran (SPP) atau <i>Whistleblowing System</i> (WBS)</b> adalah suatu sistem dan prosedur yang dirancang untuk menerima, menelaah dan menindaklanjuti pengaduan, penyimpangan dan pelanggaran yang disampaikan oleh Insan PT Indonesia Kendaraan Terminal atau pihak lainnya.</p>--}}
                          {{--<p class="text-justify">Salah satu penyebab terjadinya penyimpangan dan pelanggaran disetiap perusahaan sehingga menimbulkan perbuatan korupsi, kolusi dan nepotisme, karena adanya penyalahgunaan wewenang yang dilakukan oleh insan perusahaan dengan membuat keputusan atau tindakan yang tidak sesuai dengan tujuan atau melampaui batas wewenangnya yang diberikan oleh peraturan perundang-undangan dan/atau ketentuan internal perusahaan.</p>--}}
                          {{--<div class="bullet">--}}
                            {{--<ol>--}}
                              {{--<li>Ruang lingkup Pedoman Sistem Pelaporan Pelanggaran PT Indonesia Kendaraan Terminal, adalah:--}}
                              {{--<div class="bullet-number">--}}
                                {{--<ol>--}}
                                  {{--<li>Perbuatan yang dapat menimbulkan kerugian finansial atau non finansial terhadap perusahaan akibat terjadinya Korupsi, Kolusi dan Nepotisme.</li>--}}
                                  {{--<li>Pelanggaran peraturan perundang-undangan baik yang berkaitan dengan penyelenggaraan program PT Indonesia Kendaraan Terminal maupun yang berkaitan dengan peraturan perundang-undangan lainnya.</li>--}}
                                  {{--<li>Peraturan internal yang berpotensi menimbulkan kerugian bagi Perusahaan.</li>--}}
                                  {{--<li>Permasalahan Akuntansi dan pengendalian intern atas Laporan keuangan yang berpotensi mengakibatkan salah saji secara material dalam laporan keuangan.</li>--}}
                                  {{--<li>Permasalahan yang menyangkut independensi audit, baik oleh Internal Audit maupun oleh Eksternal Audit.</li>--}}
                                  {{--<li>Perilaku Insan PT Indonesia Kendaraan Terminal yang tidak terpuji yang berpotensi mencemarkan reputasi perusahaan dan/atau yang mengakibatkan kerugian bagi perusahaan.</li>--}}
                                {{--</ol>--}}
                              {{--</div>--}}
                              {{--</li>--}}
                              {{--<li>Mekanisme pelaporan pelanggaran diatur sebagai berikut :--}}
                                {{--<div class="bullet-number">--}}
                                  {{--<ol>--}}
                                    {{--<li>Pelapor menyampaikan dugaan pelanggaran oleh insan PT Indonesia Kendaraan Terminal atau terlapor melalui saluran pelaporan yang telah ditetapkan oleh perusahaan.</li>--}}
                                    {{--<li>Satuan Pengawasan Intern menerima dan menyeleksi pengaduan yang diterima dan melaporkan kepada Direktur Utama.</li>--}}
                                    {{--<li>Pelapor dapat menyampaikan dugaan pelanggaran dalam hal terlapor adalah direksi kepada dewan komisaris.</li>--}}
                                    {{--<li>Direktur Utama menetapkan terlapor dan menindaklanjuti laporan pelanggaran kepada :--}}
                                      {{--<div class="bullet">--}}
                                        {{--<ul>--}}
                                          {{--<li>Pemegang Saham apabila terlapor Dewan Komisaris.</li>--}}
                                          {{--<li>Dewan Komisaris apabila terlapor Direksi.</li>--}}
                                          {{--<li>Satuan Pengawasan Intern apabila terlapor Karyawan.</li>--}}
                                        {{--</ul>--}}
                                      {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>Pemegang Saham dan Dewan Komisaris menindaklanjuti laporan pelanggaran sesuai dengan kewenangan masing-masing.</li>--}}
                                    {{--<li>Satuan Pengawas Intern melaksanakan Investigasi apabila terlapor karyawan :--}}
                                      {{--<div class="bullet">--}}
                                        {{--<ul>--}}
                                          {{--<li>Melakukan interview kepada pelapor dan memastikan kecukupan bukti untuk ditindaklanjuti.</li>--}}
                                          {{--<li>Melakukan pemeriksaan kepada terlapor dan menyampaikan laporan hasil pemeriksaan kepada Direktur Utama.</li>--}}
                                          {{--<li>Direktur Utama dan/atau Direksi menindaklanjuti laporan hasil pemeriksaan Satuan Pengawasan Intern.</li>--}}
                                        {{--</ul>--}}
                                      {{--</div>--}}
                                    {{--</li>--}}
                                    {{--<li>Satuan Pengawasan Intern membuat laporan posisi tindak lanjut pelanggaran Karyawan kepada Direktur Utama yang meliputi antara lain jumlah pengaduan, saluran pelaporan yang digunakan oleh pelapor dan tindak lanjut yang telah dilaksanakan.</li>--}}
                                  {{--</ol>--}}
                                {{--</div>--}}
                              {{--</li>--}}
                              {{--<li>SALURAN PELAPORAN PELANGGARAN--}}
                                {{--<p>Perusahaan menyediakan fasilitas saluran laporan pelanggaran melalui :</p>--}}
                                {{--<div class="bullet-number">--}}
                                  {{--<ol>--}}
                                    {{--<li>Telepon Direct : 021-43932250</li>--}}
                                    {{--<li>SMS  : 0811 9339930</li>--}}
                                    {{--<li>Facsimile  : 021-43932251</li>--}}
                                    {{--<li>Surat  : PT INDONESIA KENDARAAN TERMINAL, Jl. Sindang Laut No.101, Cilincing, Jakarta 14110</li>--}}
                                  {{--</ol>--}}
                                {{--</div>--}}
                              {{--</li>--}}
                            {{--</ol>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="menu8" class="tab-pane fade">--}}
                        {{--<hr class="hrSpec hrSpecOrange">--}}
                        {{--<h4 class="card-title roboBold">Pengelolaan Gratifikasi</h4>--}}
                        {{--<div class="col-md-12">--}}
                          {{--<p class="text-justify">Sebagai perusahaan yang profesional, independen, berintegritas dan berkelanjutan isu anti Korupsi Kolusi dan Nepotisme (KKN) menjadi prioritas bagi manajemen Perusahaan. Dalam semangat tersebut, Manajemen Perseroan terus melakukan upaya-upaya untuk membersihkan diri dari praktik KKN, termasuk didalamnya upaya pengendalian praktik Gratifikasi.</p>--}}
                          {{--<p class="text-justify">Pedoman Pengelolaan Gratifikasi ini diharapkan akan memperkokoh penegakan GCG perusahaan dan menjadi acuan bagi seluruh insan PT Indonesia Kendaraan Terminal dalam menyikapi gratifikasi ketika berhubungan dengan pihak ketiga perusahaan. Pedoman ini merupakan salah satu rangkaian dokumen penegakan GCG perusahaan dimana konten dalam pedoman ini selaras dengan Pedoman GCG, Kode Etik Bisnis dan juga Tata laksana Kinerja Direksi dan Dewan Komisaris PT Indonesia Kendaraan Terminal.</p>--}}
                          {{--<p class="text-justify">PRINSIP DASAR</p>--}}
                            {{--<div class="bullet-number">--}}
                              {{--<ol>--}}
                                {{--<!-- 1 -->--}}
                                {{--<li>Pemberian hadiah/cindera mata dan hiburan--}}
                                  {{--<p class="text-justify">Insan PT Indonesia Kendaraan Terminal <b>DILARANG</b> secara langsung atau tidak langsung memberi Hadiah/Cinderamata dan/atau Hiburan kepada setiap pihak yang memiliki hubungan bisnis atau pesaing PT Indonesia Kendaraan Terminal yang bertujuan untuk mendapatkan informasi, atau sesuatu hal yang tidak dibenarkan oleh ketentuan perundang-undangan yang berlaku, atau untuk mempengaruhi pihak dimaksud untuk melakukan dan/atau tidak melakukan suatu hal berkaitan dengan kedudukan/jabatannya.</p>--}}
                                {{--</li>--}}
                                {{--<!-- 2 -->--}}
                                {{--<li>Penerimaan hadiah/cindera mata dan hiburan--}}
                                  {{--<p class="text-justify">Insan PT Indonesia Kendaraan Terminal yang karena jabatannya dan/ atau anggota keluarganya (keluarga inti), <b>DILARANG</b> untuk menerima atau meminta secara langsung atau tidak langsung Hadiah/Cinderamata dan/ atau Hiburan dari setiap pihak yang memiliki hubungan bisnis atau pesaing PT Indonesia Kendaraan Terminal, yang bertujuan untuk mendapatkan informasi, atau sesuatu hal yang tidak dibenarkan oleh ketentuan perundang-undangan yang berlaku, atau untuk mempengaruhi pihak dimaksud untuk melakukan dan/atau tidak melakukan suatu hal berkaitan dengan kedudukan/jabatannya. Insan PT Indonesia Kendaraan Terminal apabila ditawarkan/diberikan Hadiah/Cinderamata dan/ atau Hiburan yang tidak sesuai dengan ketentuan yang diatur dalam Pedoman ini, wajib <b>MELAKUKAN PENOLAKAN</b> dengan cara santun terhadap tawaran/pemberian dimaksud, dengan memberikan penjelasan terhadap kebijakan dan aturan ini kepada Pihak Ketiga</p>--}}
                                {{--</li>--}}
                                {{--<!-- 3 -->--}}
                                {{--<li>Gratifikasi yang termasuk kategori suap--}}
                                  {{--<p class="text-justify">Suatu Gratifikasi akan berubah menjadi tindak pidana suap apabila memenuhi unsur-unsur sebagai berikut :</p>--}}
                                  {{--<div class="bullet">--}}
                                    {{--<ul>--}}
                                      {{--<li>Gratifikasi tersebut berhubungan dengan wewenang/jabatan insan PT Indonesia Kendaraan Terminal di Perusahaan.</li>--}}
                                      {{--<li>Gratifikasi yang berupa penerimaan Hadiah/Cinderamata dan Hiburan tidak dilaporkan kepada KPK dalam Jangka waktu 30 hari kerja sejak tanggal diterimanya.</li>--}}
                                      {{--<li>Gratifikasi tersebut berlawanan dengan kewajiban dan atau tugas insan PT Indonesia Kendaraan Terminal.</li>--}}
                                    {{--</ul>--}}
                                  {{--</div>--}}
                                {{--</li>--}}
                              {{--</ol>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="menu9" class="tab-pane fade">--}}
                        {{--<hr class="hrSpec hrSpecOrange">--}}
                        {{--<h4 class="card-title roboBold">Pedoman Kepatuhan LHKPN</h4>--}}
                        {{--<div class="col-md-12">--}}
                          {{--<p class="text-justify">Untuk menujukkan komitmen terhadap penerapan GCG di perusahaan, Pedoman Kepatuhan Laporan Harta Kekayaan Penyelenggara Negara (LHKPN) ini akan diterapkan secara konsisten di semua aktivitas bisnis perusahaan. Karena itu PT Indonesia Kendaraan Terminal  dalam menjaga kepercayaan dan kredibilitas perusahaan dengan masyarakat, pemegang saham, pemerintah, mitra kerja dan pemangku kepentingan lainnya selalu mengedepankan integritas dan komitmen yang tinggi untuk mengelola LHKPN.</p>--}}
                          {{--<p class="text-justify">Sebagai salah satu anak perusahaan Badan Usaha Milik Negara, PT Indonesia Kendaraan Terminal menyusun, menetapkan dan mengimplementasi pedoman kepatuhan Laporan Harta Kekayaan Penyelenggara Negara sebagai wujud kepatuhan perusahaan dalam melaksanakan berbagai peraturan perundang-undangan khususnya terkait dengan pelaporan harta kekayaan yang dimiliki oleh pejabat wajib lapor PT Indonesia Kendaraan Terminal.</p>--}}
                          {{--<p class="text-justify">Pengelolaan LHKPN juga merupakan komitmen bersama Insan PT Indonesia Kendaraan Terminal sebagai pejabat wajib lapor untuk melaksanakan tugas dan tanggung jawabnya dalam rangka mencapai visi, misi dan tata nilai perusahaan.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div id="menu10" class="tab-pane fade">--}}
                        {{--<hr class="hrSpec hrSpecOrange">--}}
                        {{--<h4 class="card-title roboBold">Internal Auditor</h4>--}}
                        {{--<p>Konten sedang disiapkan...</p>--}}
                    {{--</div>--}}
                    {{--<div id="menu11" class="tab-pane fade">--}}
                        {{--<hr class="hrSpec hrSpecOrange">--}}
                        {{--<h4 class="card-title roboBold">Auditor Independent</h4>--}}
                        {{--<div class="col-md-12">--}}
                          {{--<div class="table-responsive">--}}
                            {{--<table class="table table-striped table-hover">--}}
                              {{--<thead>--}}
                                {{--<tr>--}}
                                  {{--<th>No</th>--}}
                                  {{--<th>Tahun</th>--}}
                                  {{--<th>Audit</th>--}}
                                  {{--<th>Opini</th>--}}
                                {{--</tr>--}}
                              {{--</thead>--}}
                              {{--<tbody>--}}
                                {{--<tr>--}}
                                  {{--<td>1</td>--}}
                                  {{--<td>2013</td>--}}
                                  {{--<td>Hadori Sugiarto Adi & Rekan, HLB</td>--}}
                                  {{--<td>Wajar Tanpa Pengecualian</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                  {{--<td>2</td>--}}
                                  {{--<td>2014</td>--}}
                                  {{--<td>Purwantono, Suherman & Surja, EY</td>--}}
                                  {{--<td>Wajar Tanpa Pengecualian</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                  {{--<td>3</td>--}}
                                  {{--<td>2015</td>--}}
                                  {{--<td>Purwantono, Sungkoro & Surja, EY</td>--}}
                                  {{--<td>Wajar Tanpa Pengecualian</td>--}}
                                {{--</tr> --}}
                                {{--<tr>--}}
                                  {{--<td>4</td>--}}
                                  {{--<td>2016</td>--}}
                                  {{--<td>Purwantono, Sungkoro & Surja, EY</td>--}}
                                  {{--<td>Wajar Tanpa Pengecualian</td>--}}
                                {{--</tr> --}}
                              {{--</tbody>--}}
                            {{--</table>--}}
                          {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                  </div>
                </div>
              </section>
            </div>
          </section>
        </div>
    </section>
    <!---->
@endsection
