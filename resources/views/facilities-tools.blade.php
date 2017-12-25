@extends('layout.app-with-footer')

@section('title','Peralatan | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/wide4.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Peralatan</h2>
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
              <hr class="hrSpec hrSpecOrange">
                <h3 class="mg-b-30 roboBold">Peralatan</h3> 
              <!-- <div class="col-md-3">
                  <ul class="nav nav-pills nav-stacked">
                      <li class="active">
                          <a data-toggle="pill" href="#home">
                              <div class="be-flex">
                                  <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Head Truck</span>
                              </div>
                          </a>
                      </li>
                  <li class="">
                    <a data-toggle="pill" href="#menu0">
                      <div class="be-flex">
                        <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Car Carrier Trailer</span>
                      </div>
                    </a>
                  </li>
                  <li class="">
                    <a data-toggle="pill" href="#menu1">
                      <div class="be-flex">
                        <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Roll Pengangkutan Cargo Statistik</span>
                      </div>
                    </a>
                  </li>
                  <li class="">
                    <a data-toggle="pill" href="#menu2">
                      <div class="be-flex">
                      <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Chassis</span>
                      </div>
                    </a>
                  </li>
                    <li class="">
                        <a data-toggle="pill" href="#menu3">
                            <div class="be-flex">
                                <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Forklift</span>
                            </div>
                        </a>
                    </li>
                    <li class="">
                        <a data-toggle="pill" href="#menu4">
                            <div class="be-flex">
                                <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Tug Master</span>
                            </div>
                        </a>
                    </li>
                </ul>
              </div>
              <div class="col-md-9">
                <div class="tab-content">
                  <div id="home" class="tab-pane fade in active">
                      <p>Deskripsi Konten: 4</p>
                  </div>
                  <div id="menu0" class="tab-pane fade">
                      <p>Deskripsi Konten: 2</p>
                  </div>
                  <div id="menu1" class="tab-pane fade">
                      <p>Deskripsi Konten: 4</p>
                  </div>
                  <div id="menu2" class="tab-pane fade">

                      <p>Deskripsi Konten: 2</p>
                  </div>
                  <div id="menu3" class="tab-pane fade">
                      <p>Deskripsi Konten: 3</p>
                  </div>
                  <div id="menu4" class="tab-pane fade">
                      <p>Deskripsi Konten: 2</p>
                  </div>
                </div>
              </div> -->
              <div class="col-md-8 col-md-offset-2">
                <div class="grid">
                  <div class="grid-sizer"></div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_tug.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_truck.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_roll_trailers.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_taxi.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_doly.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_forklift.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_shuttle.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_golf.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_fire_resque.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_yard.jpg') }}">
                  </div>
                  <div class="grid-item">
                    <img class="" style="width: 150%; height: auto;" src="{{ url('img/tool_road.jpg') }}">
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
