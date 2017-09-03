@extends('layout.app')

@section('title','Press Release')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Press Releases</h2>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!-- LIST-->
    <section>
      <section class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="container-fluid wow fadeInUpBig pd-bt-30">
            <section class="row mg-lr-20">
              <div class="col-md-9">
                <div class="row mg-t-10 mg-bt-20">
                  <p class="col-md-2 col-sm-3 col-xs-2 black roboMedium"><span class="bigger">20 June </span> <br>2017</p>
                  <section class="col-md-10 col-sm-9 col-xs-10">
                    <h4 class="roboMedium">Delenit utroque vivendo est ea</h4>
                    <a href="{{ url('press-release/detail')}}">Baca Selengkapnya</a>
                  </section>
                </div>
                <div class="row mg-t-10 mg-bt-20">
                  <p class="col-md-2 col-sm-3 col-xs-2 black roboMedium"><span class="bigger">20 June </span> <br>2017</p>
                  <section class="col-md-10 col-sm-9 col-xs-10">
                    <h4 class="roboMedium">Egyptian Ministerial event drives new consensus on Africa and Middle East aviation security</h4>
                    <a href="{{ url('press-release/detail')}}">Baca Selengkapnya</a>
                  </section>
                </div>
                <div class="row mg-t-10 mg-bt-20">
                  <p class="col-md-2 col-sm-3 col-xs-2 black roboMedium"><span class="bigger">20 Agt </span> <br>2017</p>
                  <section class="col-md-10 col-sm-9 col-xs-10">
                    <h4 class="roboMedium">Egyptian Ministerial event drives new consensus on Africa and Middle East aviation security</h4>
                    <a href="{{ url('press-release/detail')}}">Baca Selengkapnya</a>
                  </section>
                </div>
                <section class="row mg-t-30">
                  <div class="alignCenter mg-t-20">
                    <a href="#" class="btn btn-blue"><span>Load more</span></a>
                  </div>
                </section>
              </div>
              <div class="col-md-3">
                <aside>
                  <section class="asideSec">
                    <h4 class="roboBold">Popular Press Release</h4>
                    <section class="row mg-bt-20">
                      <div class="col-md-12">
                        <a href="#"><h5 class="roboBold mg-bt-5">Delenit utroque vivendo est ea</h5></a>
                        <p class="black small"><span>20 June 2017</span></p>
                      </div>
                    </section>
                    <section class="row mg-bt-20">
                      <div class="col-md-12">
                        <a href="#"><h5 class="roboBold mg-bt-5">Lorem ipsum dolor sit ...</h5></a>
                        <p class="black small"><span>20 June 2017</span></p>
                      </div>
                    </section>
                    <section class="row mg-bt-20">
                      <div class="col-md-12">
                        <a href="#"><h5 class="roboBold mg-bt-5">Cu ferri oblique has ...</h5></a>
                        <p class="black small"><span>20 June 2017</span></p>
                      </div>
                    </section>
                  </section>
                  <section class="asideSec">
                    <h4 class="roboBold">Tags</h4>
                    <ul class="tags">
                      <li><a href="#">Company</a></li>
                      <li><a href="#">Storage</a></li>
                      <li><a href="#">Receiving &amp Delievering</a></li>
                      <li><a href="#">Justo</a></li>
                    </ul>
                  </section>
                </aside>
              </div>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!--/ LIST-->
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
