@extends('layout.app-with-footer') @section('title','Fasilitas Penunjang | IPC Car Terminal') @section('content')
<!--HERO-->
<section id="heroTitle">
    <div class="heroTitle" style="background-image: url('{{ url('img/headerfasilitas.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
            <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Fasilitas Penunjang</h2>
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
                                <a data-toggle="pill" href="#menu2">
                                    <div class="be-flex">
                                        <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Penunjang</span>
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


                        <div id="menu2" class="tab-pane fade in active">
                            <!-- <h3 class="roboBlack">3 Lorem ipsum dolor sit amet</h3> -->
                            <!-- <h3 class="roboBlack">Lapangan O</h3> -->
                            <hr class="hrSpec hrSpecOrange">
                            <h3>Fasilitas Penunjang :</h3>
                            <div style="height:50px;"></div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/CENTRAL INSPECTION FACILITY.JPG')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Central Inspection Facility</a>
                                            </h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/WAREHOUSE.JPG')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Warehouse</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/gate.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Gate In/Out</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/cartos.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Control Room	</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/receiving_2.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Car Terminal Operating System	</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/golfcar.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Golf Cart	</a>
                                            </h4>
                                            <p>Jumlah : 3 unit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/headtruck.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Head Truck</a>
                                            </h4>
                                            <p>Jumlah : 4 unit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/YARDSWEEPER.png')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Yard Sweeper</a>
                                            </h4>
                                            <p>Jumlah : 3 unit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/roadsweeper.png')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Road Sweeper</a>
                                            </h4>
                                            <p>Jumlah : 1 unit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/rolltrailers.png')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Roll Trailers</a>
                                            </h4>
                                            <p>Jumlah : 4 unit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/tugmaster.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Tug Master	</a>
                                            </h4>
                                            <p>Jumlah : 2 Unit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/doly.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Doly	</a>
                                            </h4>
                                            <p>Jumlah : 2 Unit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/chasis.png')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Chasis</a>
                                            </h4>
                                            <p>Jumlah : 4 unit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/shuttle.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Shuttle Service</a>
                                            </h4>
                                            <p>Jumlah : 2 unit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/taxicar.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Taxi Car	</a>
                                            </h4>
                                            <p>Jumlah : 8 unit</p>
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/firerescue.png')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Fire Rescue Truck</a>
                                            </h4>
                                            <p>Jumlah : 1 unit</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 portfolio-item mg-bt-10">
                                    <div class="card h-100">
                                        <a href="#"><img class="card-img-top img-responsive img-responsive" src="{{url('img/forklit.jpg')}}" alt=""></a>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="#">Forklift</a>
                                            </h4>
                                            <p>Jumlah : 3 unit</p>
                                        </div>
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
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Warehouse (Gudang)</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Car Wash</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Office & Workshop</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Gate In/Out</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Yard Sweeper</td>
                                            <td>3 Unit</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Tug Master</td>
                                            <td>2 Unit</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Chasis</td>
                                            <td>4 Unit</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Taxi Car</td>
                                            <td>8 Unit</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Fire Resque Truck</td>
                                            <td>1 Unit</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Shuttle Service</td>
                                            <td>2 Unit</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Car Terminal Operating System</td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                                <td>Warehouse (Gudang)</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Office & Workshop</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Gate In/Out</td>
                                                <td>2 Line</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Control Room</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Waiting Room</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Car Terminal Operating System</td>
                                                <td></td>
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