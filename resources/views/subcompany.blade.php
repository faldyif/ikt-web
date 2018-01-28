@extends('layout.app-with-footer')

@section('title','Anak Perusahaan | IPC Car Terminal')

@section('content')
<!--HERO-->
<link rel="stylesheet" href="{{ url('homepage/css/bootstrap/bootstrap.min.css')}}">

<section id="heroTitle">
  <div class="heroTitle" style="background-image: url('{{ url('img/3.jpg') }}');">
    <div class="overlay"></div>
    <section class="container-fluid pd-30">
      <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Anak Perusahaan</h2>
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
        <section class="row flex-row-center be-block-768">

          <div class="col-md-12">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">Manajemen Kerjasama Operasi - Maspion Terminal Kendaraan Indonesia</h3>

            <div class="col-md-12">
              <div class="col-md-6 pd-bt-5 col-xs-12">
                <div class="col-md-12" style="margin-bottom: 5%">
                  <img src="{{ url('img/maspionmtki.png') }}" class="img-responsive maspion">
                </div>
              </div>

              <div class="col-md-6 col-xs-12">
                
                  <p class="text-justify dropcaps">Sejalan dengan program yang dicanangkan oleh pemerintah yaitu program Tol Laut di Indonesia untuk meningkatkan kapasitas pelabuhan dan juga sejalan dengan program kerja IPC yaitu Pendulum Nusantara, maka PT Indonesia Kendaraan Terminal bekerjasama dengan PT Maspion Group turut serta dalam mengembangkan infrastruktur kepelabuhanan dengan melakukan pengembangan ke wilayah timur Indonesia. </br>
                  Atas dasar itulah, pada tanggal 2 Desember 2014 telah dilakukan kesepakatan kerjasama antara IPC dalam hal ini diwakili oleh PT Indonesia Kendaraan Terminal dengan PT Maspion Industrial Estate untuk menyiapkan pembangunan dan pengoperasian terminal kendaraan di Maspion Industrial Estate yang berlokasi di Gresik yang akan menjadi terminal kendaraan pertama dan modern di Jawa Timur.</p>  
              </div>
            </div>
            <div class="col-md-12 pd-bt-20">
              <center>
                <!-- <button type="button" class="btn btn-primary">Website MKO - MTKI</button> -->
                <a href="http://maspioncarterminal.co.id" class="btn btn-primary" target="_blank">Website MKO - MTKI</a>
              </center>  
            </div>
            <!-- Button gallery maspion -->
<!--             <div class="col-md-12">
              <button class="btn btn-primary center-block">Lihat lainnya</button>
            </div> -->

            <!-- section-content -->
            <br/><br/><br/>
            <h3 style="color: red;">Nilai lebih dari MKO MKTI Car Terminal</h3>
            <div class="section-content m-t-60">

              <!-- equalizer -->
              <div class="rows small-up-1 medium-up-2 large-up-4 block-service" data-equalizer data-equalize-by-row="true" style="padding-top:15px;">
                <!-- Loops through "images" array -->

                <!-- 1 -->
                <div class="column m-b-30">
                  <div class="block-service_item " data-equalizer-watch>
                    <div class="block-service_item-icon">
                      <img class="img-responsive" src="{{ url("img/mko1.png") }}">
                    </div>
                    <div class="block-service_item-title">
                      <h3>Berthing Window System</h3>
                    </div>
                    <div class="block-service_item-desc">
                      <p></p>
                    </div>
                    <div class="block-service_item-bgicon">
                      <img class="img-responsive" style="width: 200px; height: auto" src=" {{url("img/mko1.png") }}" aria-hidden="">
                    </div>
                  </div>
                </div>
                <!-- //1 -->

                <!-- 2 -->
                <div class="column m-b-30">
                  <div class="block-service_item " data-equalizer-watch>
                    <div class="block-service_item-icon">
                      <img class="img-responsive" src="{{url("img/mko2.png")}}">
                    </div>
                    <div class="block-service_item-title">
                      <h3>Potential Reversal Cargo</h3>
                    </div>
                    <div class="block-service_item-desc">
                      <p></p>
                    </div>
                    <div class="block-service_item-bgicon">
                      <img class="img-responsive" style="width: 200px; height: auto" src="{{url("img/mko2.png")}}" aria-hidden="">
                    </div>
                  </div>
                </div>
                <!-- //2 -->

                <!-- 3 -->
                <div class="column m-b-30">
                  <div class="block-service_item " data-equalizer-watch>
                    <div class="block-service_item-icon">
                      <img class="img-responsive" src="{{ url("img/mko3.png") }}">
                    </div>
                    <div class="block-service_item-title">
                      <h3>Service standards by way of a terminal in Jakarta</h3>
                    </div>
                    <div class="block-service_item-desc">
                      <p></p>
                    </div>
                    <div class="block-service_item-bgicon">
                      <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/mko3.png") }}" aria-hidden="">
                    </div>
                  </div>
                </div>
                <!-- //3 -->

                <!-- 4 -->
                <div class="column m-b-30">
                  <div class="block-service_item " data-equalizer-watch>
                    <div class="block-service_item-icon">
                      <img class="img-responsive" src="{{ url("img/mko4.png") }}">
                    </div>
                    <div class="block-service_item-title">
                      <h3>Using a reliable information system</h3>
                    </div>
                    <div class="block-service_item-desc">
                      <p></p>
                    </div>
                    <div class="block-service_item-bgicon">
                      <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/mko4.png") }}" aria-hidden="">
                    </div>
                  </div>
                </div>
                <!-- //4 -->

                <!-- 5 -->
                <div class="column m-b-30">
                  <div class="block-service_item " data-equalizer-watch>
                    <div class="block-service_item-icon">
                      <img class="img-responsive" src="{{ url("img/mko5.png") }}">
                    </div>
                    <div class="block-service_item-title">
                      <h3>Having facilities Port Stock and Workshop</h3>
                    </div>
                    <div class="block-service_item-desc">
                      <p></p>
                    </div>
                    <div class="block-service_item-bgicon">
                      <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/mko5.png") }}" aria-hidden="">
                    </div>
                  </div>
                </div>
                <!-- //5 -->

                <!-- 6 -->
                <div class="column m-b-30">
                  <div class="block-service_item " data-equalizer-watch>
                    <div class="block-service_item-icon">
                      <img class="img-responsive" src="{{ url("img/mko6.png") }}">
                    </div>
                    <div class="block-service_item-title">
                      <h3>Highway access is already available</h3>
                    </div>
                    <div class="block-service_item-desc">
                      <p></p>
                    </div>
                    <div class="block-service_item-bgicon">
                      <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/mko6.png") }}" aria-hidden="">
                    </div>
                  </div>
                </div>
                <!-- //6 -->

                <!-- 7 -->
                <div class="column m-b-30">
                  <div class="block-service_item " data-equalizer-watch>
                    <div class="block-service_item-icon">
                      <img class="img-responsive" src="{{ url("img/mko7.png") }}">
                    </div>
                    <div class="block-service_item-title">
                      <h3>Land is still available can be a hub of logistics</h3>
                    </div>
                    <div class="block-service_item-desc">
                      <p></p>
                    </div>
                    <div class="block-service_item-bgicon">
                      <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/mko7.png") }}" aria-hidden="">
                    </div>
                  </div>
                </div>
                <!-- //7 -->

                <!-- 8 -->
                <div class="column m-b-30">
                  <div class="block-service_item " data-equalizer-watch>
                    <div class="block-service_item-icon">
                      <img class="img-responsive" src="{{ url("img/mko8.png") }}">
                    </div>
                    <div class="block-service_item-title">
                      <h3>Distance cruise more closer, thus saving fuel</h3>
                    </div>
                    <div class="block-service_item-desc">
                      <p></p>
                    </div>
                    <div class="block-service_item-bgicon">
                      <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/mko8.png") }}" aria-hidden="">
                    </div>
                  </div>
                </div>
                <!-- //8 -->
              </div>
              <!-- //equalizer -->
            </div>
            <!-- //section-content -->

          </div>
        </section>
        <br/><br/><br/>
        <section> 
          <div class="row">
            
            <div class="col-md-6">
              <div class="col-md-12">
                <hr class="hrSpec hrSpecOrange">
                <h3 class="mg-b-30 roboBold">RORO Short Sea Shipping Memorandum of Understanding</h3>
              </div>
              <div class="col-md-12 pd-bt-5">
                <div class="col-md-12" style="margin-bottom: 5%">
                  <img src="{{ url('img/roroconf.png') }}" class="img-responsive">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="col-md-12">
                <hr class="hrSpec hrSpecOrange">
                <h3 class="mg-b-30 roboBold">RORO Short Sea Shipping Activity</h3>
              </div>
              <div class="col-md-12">
                <div class="col-md-12" style="margin-bottom: 5%">
                  <img src="{{ url('img/rorok.png') }}" class="img-responsive">
                </div>
              </div>
            </div>
            
            
          </div>


          <div class="col-md-12">

            <div class="col-md-6">
            </div>

            <div class="">
              <div class="col-md-6 pd-bt-5">

              </div>

            </div>
          </div>
        </section>    
      </div>
    </section>
  </div>
</section>
<!--/ABOUT-->
@endsection

@section('bottom')
<link href="{{ url('css/foundation.css') }}" rel="stylesheet"></link>
<link href="{{ url('css/styles_foundation3.css') }}" rel="stylesheet"></link>