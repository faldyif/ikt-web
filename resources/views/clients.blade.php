@extends('layout.app')

@section('title','Clients')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('./img/2.jpg');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh" data-wow-delay="0.4s">Pelanggan Kami</h2>
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
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/NYKLINE.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/KLINE.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/agungline.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/JZK.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/TFS.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/MOL.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/HA.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/WWL.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/ECL.jpg') }}')">
                </figure>
              </div>
            </section>

            <hr class="hrSpec hrSpecOrange">
            <h3 class="roboBold">Stevedoring Companies</h3>
            <section class="row pd-bt-10 bg-img-contain img-grayscale-anim">
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/BKJ.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/APS.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/ABH.png') }}')">
                </figure>
              </div>
            </section>

            <hr class="hrSpec hrSpecOrange">
            <h3 class="roboBold">Automaker</h3>
            <section class="row pd-bt-10 bg-img-contain img-grayscale-anim">
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/1.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/2.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/3.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/4.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/5.jpg') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/6.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/7.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/8.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/8.jpg') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/9.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/10.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/11.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/12.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/13.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/14.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/15.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/16.gif') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/17.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/18.jpg') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/19.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/20.jpg') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/21.jpg') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/22.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/23.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/24.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/25.jpg') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/26.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/27.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/28.jpg') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/29.png') }}')">
                </figure>
              </div>
              <div class="col-md-2 col-sm-3">
                <figure class="pd-20">
                  <img src="{{ url('img/bg-img.png') }}" alt="" style="background-image: url('{{ url('img/clients/30.png') }}')">
                </figure>
              </div>
            </section>

          </div>
        </div>
      </section>
    </section>
    <!--/CLIENTS-->
    <!--footer-->
    <!-- <div class="hiddenSec"></div> -->
    <footer class="footer-1">
      <section class="row">
        <div class="col-md-3 col-sm-3">
          <figure class="logoFooter">
            <img src="{{ url('img/ikt-logo.png') }}">
          </figure>
          <p class="small">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
        </div>
        <div class="col-md-2 col-md-offset-4 col-sm-3 col-sm-offset-3 mg-t-30">
          <h5 class="roboBold mg-b-30">Useful Links</h5>
          <ul class="noPad">
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Helpdesk</a></li>
            <li><a href="#">Storages</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-3 mg-t-30">
          <h5 class="roboBold mg-b-30">Locate Us</h5>
          <p class="small">JL Sindang Laut, Cilincing Jakarta Utara, 14110</p>
          <p class="small">+62 21 4393 2251<br>info@indonesiacarterminal.co.id</p>
        </div>
      </section>
    </footer>
    <!--/footer-->
@endsection
