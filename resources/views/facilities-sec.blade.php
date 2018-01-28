@extends('layout.app-with-footer')

@section('title','Fasilitas Domestik | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/headerdomestik.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Fasilitas Domestik</h2>
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
                            <a href="#"><img class="card-img-top img-responsive" src="{{url('img/kanaldomestik.JPG')}}" alt=""></a>
                            <div class="card-body">
                              <h4 class="card-title">
                                <a href="#">Kanal</a>
                              </h4>
                              
                              <p>Kedalaman : -12 m LWS</p>
                              <p></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top img-responsive" src="{{url('img/dermaga1dom.jpg')}}" alt=""></a>
                            <div class="card-body">
                              <h4 class="card-title">
                                <a href="#">Dermaga 1</a>
                              </h4>
                              <p>Panjang : 304 m'</p>
                              <p>Kedalaman : -12 m LWS</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top img-responsive" src="{{url('img/dermaga2dom.png')}}" alt=""></a>
                            <div class="card-body" >
                              <h4 class="card-title">
                                <a href="#">Dermaga 2</a>
                              </h4>
                              <p>Panjang : 148 m'</p>
                              <p>Kedalaman : -8 m LWS</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top img-responsive" src="{{url('img/dermaga3dom.jpg')}}" alt=""></a>
                            <div class="card-body" >
                              <h4 class="card-title">
                                <a href="#">Dermaga 3 (Beaching Point)</a>
                              </h4>
                              <p>Panjang : 15 m'</p>
                              <p>Kedalaman : -8 m LWS</p>
                            </div>
                          </div>
                        </div>
                        
                      
                    </div>
                    <div id="menu1" class="tab-pane fade">
                    <hr class="hrSpec hrSpecOrange">
                    <h3>Fasilitas Penumpukan :</h3>
                    <div style="height:50px;"></div>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top img-responsive" src="{{url('img/lapanganG.jpg')}}" alt=""></a>
                            <div class="card-body">
                              <h4 class="card-title">
                                <a href="#">Lapangan G1</a>
                              </h4>
                              <p>Kapasitas : 1.350 Slot</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top img-responsive" src="{{url('img/lapanganG.jpg')}}" alt=""></a>
                            <div class="card-body">
                              <h4 class="card-title">
                                <a href="#">Lapangan G2</a>
                              </h4>
                              <p>Kapasitas : 1.400 Slot</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top img-responsive" src="{{url('img/lapanganG.jpg')}}" alt=""></a>
                            <div class="card-body" >
                              <h4 class="card-title">
                                <a href="#">Lapangan G3</a>
                              </h4>
                              <p>Kapasitas : 825 Slot</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                          <div class="card h-100">
                            <a href="#"><img class="card-img-top img-responsive" src="{{url('img/lapanganG.jpg')}}" alt=""></a>
                            <div class="card-body" >
                              <h4 class="card-title">
                                <a href="#">Lapangan G4</a>
                              </h4>
                              <p>Kapasitas : 405 Slot</p>
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
                              <td>Lapangan G1</td>
                              <td>1.350 Slot</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Lapangan G2</td>
                              <td>1.400 Slot</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Lapangan G3</td>
                              <td>825 Slot</td>
                            </tr> 
                            <tr>
                              <td>4</td>
                              <td>Lapangan G4</td>
                              <td>405 Slot</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Gerbang Kompleks</td>
                              <td>50 Slot</td>
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
