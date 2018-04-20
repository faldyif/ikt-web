<link rel="stylesheet" type="text/css" href="{{ url('css/foundation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/styles_foundation.css') }}">
@extends('layout.app-with-footer')

@section('title','Value Added Services - IPC Car Terminal')

@section('content')
<!--HERO-->
<section id="heroTitle">
<div class="heroTitle" style="background-image: url('{{ url('img/vasheader.png') }}');">
    <div class="overlay"></div>
    <section class="container-fluid pd-30">
        <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Value Added Service</h2>
        <h4 class="alignCenter wh mg-t-20">PT Indonesia Kendaraan Terminal</h4>
    </section>
</div>
</section>
<!--/HERO-->
<!-- -->
<section>
<div class="container-fluid wow fadeInUpBig">
  <!-- div st service -->
                <div class="col-md-12 pd-bt-20">
                  <!-- div col-12 -->
                  <div class="col-md-12">
                    <hr class="hrSpec hrSpecOrange">
                    <h3 class="mg-b-30 roboBold">Value Added Services</h3>

                    <!-- section-content -->
                    <div class="section-content m-t-60">

                      <!-- equalizer -->
                      <div class="rows small-up-1 medium-up-2 large-up-3 block-service" data-equalizer data-equalize-by-row="true" style="padding-top:15px;">
                        <!-- Loops through "images" array -->

                        <!-- 1 -->
                        <div class="column m-b-30">
                          <div class="block-service_item " data-equalizer-watch>
                            <div class="block-service_item-icon">
                              <img class="img-responsive" src="{{ url("img/vas_mr.png") }}">
                            </div>
                            <div class="block-service_item-title">
                              <h3>Minor Repairing</h3>
                            </div>
                            <div class="block-service_item-desc">
                              <p>Perbaikan Ringan</p>
                            </div>
                            <div class="block-service_item-bgicon">
                              <img class="img-responsive" style="width: 200px; height: auto" src=" {{url("img/vas_mr.png") }}" aria-hidden="">
                            </div>
                          </div>
                        </div>
                        <!-- //1 -->

                        <!-- 2 -->
                        <div class="column m-b-30">
                          <div class="block-service_item " data-equalizer-watch>
                            <div class="block-service_item-icon">
                              <img class="img-responsive" src="{{url("img/vas_paint.png")}}">
                            </div>
                            <div class="block-service_item-title">
                              <h3>Painting</h3>
                            </div>
                            <div class="block-service_item-desc">
                              <p>Pengecatan</p>
                            </div>
                            <div class="block-service_item-bgicon">
                              <img class="img-responsive" style="width: 200px; height: auto" src="{{url("img/vas_paint.png")}}" aria-hidden="">
                            </div>
                          </div>
                        </div>
                        <!-- //2 -->

                        <!-- 3 -->
                        <div class="column m-b-30">
                          <div class="block-service_item " data-equalizer-watch>
                            <div class="block-service_item-icon">
                              <img class="img-responsive" src="{{ url("img/vas_er.png") }}">
                            </div>
                            <div class="block-service_item-title">
                              <h3>Engine Repair</h3>
                            </div>
                            <div class="block-service_item-desc">
                              <p>Perbaikan Mesin</p>
                            </div>
                            <div class="block-service_item-bgicon">
                              <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/vas_er.png") }}" aria-hidden="">
                            </div>
                          </div>
                        </div>
                        <!-- //3 -->

                        <!-- 4 -->
                        <div class="column m-b-30">
                          <div class="block-service_item " data-equalizer-watch>
                            <div class="block-service_item-icon">
                              <img class="img-responsive" src="{{ url("img/vas_gear.png") }}">
                            </div>
                            <div class="block-service_item-title">
                              <h3>Accessories Installation</h3>
                            </div>
                            <div class="block-service_item-desc">
                              <p>Pemasangan Aksesoris</p>
                            </div>
                            <div class="block-service_item-bgicon">
                              <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/vas_gear.png") }}" aria-hidden="">
                            </div>
                          </div>
                        </div>
                        <!-- //4 -->

                        <!-- 5 -->
                        <div class="column m-b-30">
                          <div class="block-service_item " data-equalizer-watch>
                            <div class="block-service_item-icon">
                              <img class="img-responsive" src="{{ url("img/vas_bus.png") }}">
                            </div>
                            <div class="block-service_item-title">
                              <h3>Washing</h3>
                            </div>
                            <div class="block-service_item-desc">
                              <p>Pencucian</p>
                            </div>
                            <div class="block-service_item-bgicon">
                              <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/vas_bus.png") }}" aria-hidden="">
                            </div>
                          </div>
                        </div>
                        <!-- //5 -->

                        <!-- 6 -->
                        <div class="column m-b-30">
                          <div class="block-service_item " data-equalizer-watch>
                            <div class="block-service_item-icon">
                              <img class="img-responsive" src="{{ url("img/vas_lcd.png") }}">
                            </div>
                            <div class="block-service_item-title">
                              <h3>Sparepart Management</h3>
                            </div>
                            <div class="block-service_item-desc">
                              <p>Manajemen Suku Cadang</p>
                            </div>
                            <div class="block-service_item-bgicon">
                              <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/vas_lcd.png") }}" aria-hidden="">
                            </div>
                          </div>
                        </div>
                        <!-- //6 -->

                        <!-- 7 -->
                        <div class="column m-b-30">
                          <div class="block-service_item " data-equalizer-watch>
                            <div class="block-service_item-icon">
                              <img class="img-responsive" src="{{ url("img/vas_bar.png") }}">
                            </div>
                            <div class="block-service_item-title">
                              <h3>Marking & Labelling</h3>
                            </div>
                            <div class="block-service_item-desc">
                              <p>Pemberian Marker dan Label</p>
                            </div>
                            <div class="block-service_item-bgicon">
                              <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/vas_bar.png") }}" aria-hidden="">
                            </div>
                          </div>
                        </div>
                        <!-- //7 -->

                        <!-- 8 -->
                        <div class="column m-b-30">
                          <div class="block-service_item " data-equalizer-watch>
                            <div class="block-service_item-icon">
                              <img class="img-responsive" src="{{ url("img/vas_magnifier.png") }}">
                            </div>
                            <div class="block-service_item-title">
                              <h3>Pre-Delivery Inspection</h3>
                            </div>
                            <div class="block-service_item-desc">
                              <p>Inspeksi Jelang Pengiriman</p>
                            </div>
                            <div class="block-service_item-bgicon">
                              <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/vas_magnifier.png") }}" aria-hidden="">
                            </div>
                          </div>
                        </div>
                        <!-- //8 -->

                        <!-- 9 -->
                        <div class="column m-b-30">
                          <div class="block-service_item " data-equalizer-watch>
                            <div class="block-service_item-icon">
                              <img class="img-responsive" src="{{ url("img/vas_car2.png") }}">
                            </div>
                            <div class="block-service_item-title">
                              <h3>Pre-Port Stock, Port to Dear</h3>
                            </div>
                            <div class="block-service_item-desc">
                              <p>Port Stock</p>
                            </div>
                            <div class="block-service_item-bgicon">
                              <img class="img-responsive" style="width: 200px; height: auto" src="{{ url("img/vas_car2.png") }}" aria-hidden="">
                            </div>
                          </div>
                        </div>
                        <!-- //9 -->
                      </div>
                      <!-- //equalizer -->
                    </div>
                    <!-- //section-content -->
                  </div>
                  <!-- //div col-12 -->
                </div>
                <!-- //div st service -->
</div>
</section>
<!---->
@endsection
