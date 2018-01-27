@extends('layout.app-with-footer')

@section('title','Fasilitas Internasional | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/headerinternasional.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Fasilitas Internasional</h2>
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
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Dermaga</span>
                        </div>
                      </a>
                    </li>
                    <li class="">
                      <a data-toggle="pill" href="#menu1">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Penumpukan</span>
                        </div>
                       </a>
                     </li>

                    <!-- <li class="">
                      <a data-toggle="pill" href="#menu3">
                        <div class="be-flex">
                          <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Kesehatan Sosial dan Lingkungan</span>
                        </div>

                       </a>
                     </li> -->
                  </ul>
                </div>
                <div class="col-md-9">
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                    <hr class="hrSpec hrSpecOrange">
                    <h3>Fasilitas Dermaga :</h3>
                    <div style="height:50px;"></div>
                      <div class="row">
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                              <h4 class="card-title">
                                <a href="#">Kanal</a>
                              </h4>
                              <p>Panjang : - </p>
                              <p>Kedalaman : -14 m LWS</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                              <h4 class="card-title">
                                <a href="#">Dermaga 1</a>
                              </h4>
                              <p>Panjang : 88 m'</p>
                              <p>Kedalaman : -6 m LWS</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body" >
                              <h4 class="card-title">
                                <a href="#">Dermaga 2</a>
                              </h4>
                              <p>Panjang : 220 m'</p>
                              <p>Kedalaman : -11 m LWS</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive" hidden>
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Panjang</th>
                              <th>Kedalaman</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Kanal</td>
                              <td></td>
                              <td>-14 m LWS</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Dermaga 1</td>
                              <td>88 m'</td>
                              <td>-6 m LWS</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Dermaga 2</td>
                              <td>220 m'</td>
                              <td>-11 m LWS</td>
                            </tr> 
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                    <hr class="hrSpec hrSpecOrange">
                      <h3>Fasilitas Penumpukan :</h3>
                    <div style="height:50px;"></div>

                      <hr class="hrSpec hrSpecOrange">
                      <h4>Ekspor</h4>
                      <div class="row">
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                              <h4 class="card-title">
                                <a href="#">Lapangan A</a>
                              </h4>
                              <p>Kapasitas : 1.036 Slot</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body">
                            <h4 class="card-title">
                            <a href="#">Lapangan B</a>
                          </h4>
                          <p>Kapasitas : 240 Slot</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body" >
                            <h4 class="card-title">
                            <a href="#">Lapangan C (Buffer)</a>
                          </h4>
                          <p>Kapasitas : 250 Slot</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body" >
                            <h4 class="card-title">
                            <a href="#">Lapangan H</a>
                          </h4>
                          <p>Kapasitas : 1.120 Slot</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body" >
                            <h4 class="card-title">
                            <a href="#">Lapangan O</a>
                          </h4>
                          <p>Kapasitas : 166 Slot</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body" >
                            <h4 class="card-title">
                            <a href="#">Gedung Parkir 5 Lantai</a>
                          </h4>
                          <p>Kapasitas : 2.766 Slot</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="table-responsive" hidden>
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Kapasitas</th>
                            </tr>
                          </thead>  
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Lapangan A</td>
                              <td>1.036 Slot</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Lapangan B</td>
                              <td>240 Slot</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Lapangan C (Buffer)</td>
                              <td>250 Slot</td>
                            </tr> 
                            <tr>
                              <td>4</td>
                              <td>Lapangan H</td>
                              <td>1.120 Slot</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Lapangan O</td>
                              <td>166 Slot</td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Gedung Parkir 5 Lantai</td>
                              <td>2.766 Slot</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div style="height:50px;"></div>
                      <hr class="hrSpec hrSpecOrange">
                      
                      <h4>Impor</h4>
                      <div class="row">
                      <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                            <div class="card-body" >
                            <h4 class="card-title">
                            <a href="#">Lapangan E</a>
                          </h4>
                          <p>Kapasitas : 3.489 Slot</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive" hidden>
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Kapasitas</th>
                            </tr>
                          </thead>  
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Lapangan E</td>
                              <td>3.489 Slot</td>
                            </tr>
                          </tbody>
                        </table>
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
@endsection
