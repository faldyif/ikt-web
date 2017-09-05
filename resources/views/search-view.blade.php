@extends('layout.app')

@section('title','Search View')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold alignCenter wh" data-wow-delay="0.4s">Hasil Pencarian :<br> <span class="small roboLight wh">Apa yang dicari</span>
        </section>
      </div>
    </section>
    <!--/HERO-->

    <!-- LIST-->
    <section id="news-list">
      <section class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
          <div class="container-fluid wow fadeInUpBig pd-bt-30">
            <section class="mg-lr-20">
              <hr class="hrSpec hrSpecOrange">
              <h3 class="roboBold">News</h3>
              <div>
                <section class="row newsListSec">
                  <div class="col-md-4 col-sm-4">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog01.jpg') }}');">
                    </figure>
                  </div>
                  <div class="col-md-8 col-sm-8 textForNewsList">
                    <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
                    <h4 class="roboMedium">Delenit utroque vivendo est ea</h4>
                    <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
                    <a href="news-detail.html">Baca Selengkapnya</a>
                  </div>
                </section>
                <section class="row newsListSec">
                  <div class="col-md-4 col-sm-4">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog02.jpg') }}');">
                    </figure>
                  </div>
                  <div class="col-md-8 col-sm-8 textForNewsList">
                    <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
                    <h4 class="roboMedium">Delenit utroque vivendo est ea</h4>
                    <p class="black">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                    <a href="#">Baca Selengkapnya</a>
                  </div>
                </section>
                <section class="row newsListSec">
                  <div class="col-md-4 col-sm-4">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog03.jpg') }}');">
                    </figure>
                  </div>
                  <div class="col-md-8 col-sm-8 textForNewsList">
                    <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
                    <h4 class="roboMedium">Delenit utroque vivendo est ea</h4>
                    <p class="black">Lorem ipsum dolor sit amet, quas integre sit no, mei velit virtute oportere cu. Aeque adipisci instructior sit ne, equidem imperdiet ullamcorper cum no. Cu est integre democritum, mediocrem democritum ullamcorper no sit. Minim latine vix ut.</p>
                    <a href="news-detail.html">Baca Selengkapnya</a>
                  </div>
                </section>
                <section class="row mg-t-30">
                  <div class="alignCenter mg-t-20">
                    <a href="#" class="btn btn-blue"><span>Load more</span></a>
                  </div>
                </section>
              </div>
            </section>
            <hr>
            <section class="mg-lr-20">
              <hr class="hrSpec hrSpecOrange">
              <h3 class="roboBold">Press Release</h3>
              <div>
                <div class="row mg-t-10 mg-bt-20">
                  <p class="col-md-2 col-sm-3 col-xs-2 black roboMedium mg-t-10"><span class="bigger">20 June </span> <br>2017</p>
                 <section class="col-md-7 col-sm-6 col-xs-10">
                    <h4 class="roboMedium">Delenit utroque vivendo est ea</h4>
                    <a href="{{ url('press-release/detail')}}">Baca Selengkapnya</a>
                  </section>
                  <section class="col-md-3 col-sm-3">
                    <p class="roboMedium hidden-768 mg-t-5 or">Yogyakarta</p>
                  </section>
                </div>
                <div class="row mg-t-10 mg-bt-20">
                  <p class="col-md-2 col-sm-3 col-xs-2 black roboMedium mg-t-10"><span class="bigger">20 June </span> <br>2017</p>
                  <section class="col-md-7 col-sm-6 col-xs-10">
                    <h4 class="roboMedium">Egyptian Ministerial event drives new consensus on Africa and Middle East aviation security</h4>
                    <a href="{{ url('press-release/detail')}}">Baca Selengkapnya</a>
                  </section>
                  <section class="col-md-3 col-sm-3">
                    <p class="roboMedium hidden-768 mg-t-5 or">Yogyakarta, Indonesia</p>
                  </section>
                </div>
                <div class="row mg-t-10 mg-bt-20">
                  <p class="col-md-2 col-sm-3 col-xs-2 black roboMedium mg-t-10"><span class="bigger">20 Agt </span> <br>2017</p>
                  <section class="col-md-7 col-sm-6 col-xs-10">
                    <h4 class="roboMedium">Egyptian Ministerial event drives new consensus on Africa and Middle East aviation security</h4>
                    <a href="{{ url('press-release/detail')}}">Baca Selengkapnya</a>
                  </section>
                  <section class="col-md-3 col-sm-3">
                    <p class="roboMedium hidden-768 mg-t-5 or">Tanjung Priok, Indonesia </p>
                  </section>
                </div>
                <section class="row mg-t-30">
                  <div class="alignCenter mg-t-20">
                    <a href="#" class="btn btn-blue"><span>Load more</span></a>
                  </div>
                </section>
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
