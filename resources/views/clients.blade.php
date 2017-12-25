@extends('layout.app-with-footer')

@section('title','Clients')

@section('content')
<!--HERO-->
<section id="heroTitle">
  <div class="heroTitle" style="background-image: url('{{  url('img/2.jpg') }}');">
    <div class="overlay"></div>
    <section class="container-fluid pd-30">
      <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Pelanggan Kami</h2>
      <h4 class="alignCenter wh mg-t-20">PT. Indonesia Kendaraan Terminal</h4>
    </section>
  </div>
</section>
<!--/HERO-->
<!--CLIENTS-->
<section>
  <section class="row pd-bt-30">
    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
      <div class="container-fluid wow fadeInUpBig pd-30">
        <hr class="hrSpec hrSpecOrange">
        <h3 class="roboBold">Shipping Line</h3>
        <section class="row pd-bt-10 bg-img-contain img-grayscale-anim">
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/NYKLINE.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/KLINE.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/agungline.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/JZK.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/TFS.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/MOL.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/HA.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/WWL.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/ECL.jpg') }}')">
            </figure>
          </div>
        </section>

        <hr class="hrSpec hrSpecOrange">
        <h3 class="roboBold">Stevedoring Companies</h3>
        <section class="row pd-bt-10 bg-img-contain img-grayscale-anim">
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/BKJ.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/APS.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/ABH.png') }}')">
            </figure>
          </div>
        </section>

        <hr class="hrSpec hrSpecOrange">
        <h3 class="roboBold">Automaker</h3>
        <section class="row pd-bt-10 bg-img-contain img-grayscale-anim">
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/1.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/2.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/3.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/4.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/5.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/6.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/7.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/8.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/8.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/9.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/10.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/11.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/12.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/13.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/14.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/15.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/16.gif') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/17.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/18.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/19.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/20.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/21.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/22.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/23.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/24.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/25.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/26.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/27.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/28.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/29.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/30.png') }}')">
            </figure>
          </div>
        </section>
        <hr class="hrSpec hrSpecOrange">
        <h3 class="roboBold">Logistics Companies</h3>
        <section class="row pd-bt-10 bg-img-contain img-grayscale-anim">
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/log_1.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/log_2.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/log_3.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/log_4.jpg') }}')">
            </figure>
          </div>
        </section>
        <hr class="hrSpec hrSpecOrange">
        <h3 class="roboBold">Heavy Equipment And Static Cargoes Companies</h3>
        <section class="row pd-bt-10 bg-img-contain img-grayscale-anim">
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes1.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes2.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes3.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes4.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes5.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes6.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes7.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes8.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes9.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes10.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes11.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes12.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes13.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes14.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes15.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes16.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes17.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes18.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes19.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes19a.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes21.png') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes22.jpg') }}')">
            </figure>
          </div>
          <div class="col-md-2 col-sm-3">
            <figure class="pd-15">
              <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/hes22.jpg') }}')">
            </figure>
          </div>


        </div>
      </div>
    </section>
  </section>
  <!--/CLIENTS-->
  @endsection
