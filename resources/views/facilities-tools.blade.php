@extends('layout.app-with-footer')

@section('title','Fasilitas Utama | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
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
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            
              <hr class="hrSpec hrSpecOrange">
                <h3 class="mg-b-30 roboBold">Peralatan</h3>
                <div class="col-md-12">
                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <!-- <h3 class="roboBlack">Lorem ipsum dolor sit amet</h3> -->
                      <ul>
                      <li>4 Unit Head Truck</li>
                      <li>2 Unit Car Carrier Trailer untuk Pengangkutan CBU</li>
                      <li>4 Roll Units untuk Pengangkutan Cargo Statistik</li>
                      <li>2 Unit Chassis</li>
                      <li>3 Unit Forklift</li>
                      <li>2 Unit Tug Master</li>
                      </ul>
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
