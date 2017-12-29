@extends('layout.app-with-footer')

@section('title','Fasilitas Internasional | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
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
                    <li class="">
                      <a data-toggle="pill" href="#menu2">
                        <div class="be-flex">
                         <i class="fa fa-th mg-r-15 mg-t-5"></i> <span>Sistem Informasi dan Lain-Lain</span>
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
                      <div class="table-responsive">
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
                      <h4>Ekspor</h4>
                      <div class="table-responsive">
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

                      <hr class="hrSpec hrSpecOrange">
                      <h4>Impor</h4>
                      <div class="table-responsive">
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
                    <div id="menu2" class="tab-pane fade">
                      <!-- <h3 class="roboBlack">3 Lorem ipsum dolor sit amet</h3> -->
                      <!-- <h3 class="roboBlack">Lapangan O</h3> -->
                      <div class="table-responsive">
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
