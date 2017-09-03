@extends('layout.app')

@section('title','IPC')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh" data-wow-delay="0.4s">Berita Perusahaan</h2>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!--RECENT NEWS-->
    <section id="recent-news">
      <div class="container-fluid wow fadeInUpBig pd-t-30">
        <section class="pd-lr-30">
          <hr class="hrSpec hrSpecOrange">
          <h3 class="mg-b-30 roboBold">Berita Terbaru</h3>
        </section>
        <section class="recent-news row pd-t-20">
          <div class="col-md-4 col-sm-4">
            <section class="newsList">
                <figure>
                  <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/port02.jpg') }}');">
                  <div class="overlay"></div>
                  <a href="{{ url('news/detail') }}">
                    <figcaption>Selengkapnya</figcaption>
                  </a>
                </figure>
                <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
                <a href="{{ url('news/detail') }}"><h4 class="roboMedium">Delenit utroque vivendo est ea</h4></a>
                <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
            </section>
          </div>
          <div class="col-md-4 col-sm-4">
            <section class="newsList">
                <figure>
                  <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/port01.jpg') }}');">
                  <div class="overlay"></div>
                  <a href="{{ url('news/detail') }}">
                    <figcaption>Selengkapnya</figcaption>
                  </a>
                </figure>
                <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
                <a href="{{ url('news/detail') }}"><h4 class="roboMedium">Delenit utroque vivendo est ea</h4></a>
                <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
            </section>
          </div>
          <div class="col-md-4 col-sm-4">
            <section class="newsList">
                <figure>
                  <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog04.jpg') }}');">
                  <div class="overlay"></div>
                  <a href="{{ url('news/detail') }}">
                    <figcaption>Selengkapnya</figcaption>
                  </a>
                </figure>
                <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
                <a href="{{ url('news/detail') }}"><h4 class="roboMedium">Delenit utroque vivendo est ea</h4></a>
                <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!--/RECENT NEWS-->
    <!--NEWS LIST-->
    <section id="news-list">
      <div class="container-fluid wow fadeInUpBig pd-bt-30">
        <section class="row mg-lr-20">
          <div class="col-md-9">
            <section class="row newsListSec">
              <div class="col-md-6 col-sm-6">
                <figure>
                  <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog01.jpg') }}');">
                </figure>
              </div>
              <div class="col-md-6 col-sm-6 textForNewsList">
                <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
                <h4 class="roboMedium">Delenit utroque vivendo est ea</h4>
                <p class="black">Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. </p>
                <a href="{{ url('news/detail') }}">Baca Selengkapnya</a>
              </div>
            </section>
            <section class="row newsListSec">
              <div class="col-md-6 col-sm-6">
                <figure>
                  <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog02.jpg') }}');">
                </figure>
              </div>
              <div class="col-md-6 col-sm-6 textForNewsList">
                <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
                <h4 class="roboMedium">Delenit utroque vivendo est ea</h4>
                <p class="black">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
                <a href="#">Baca Selengkapnya</a>
              </div>
            </section>
            <section class="row newsListSec">
              <div class="col-md-6 col-sm-6">
                <figure>
                  <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog03.jpg') }}');">
                </figure>
              </div>
              <div class="col-md-6 col-sm-6 textForNewsList">
                <p class="black small mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
                <h4 class="roboMedium">Delenit utroque vivendo est ea</h4>
                <p class="black">Lorem ipsum dolor sit amet, quas integre sit no, mei velit virtute oportere cu. Aeque adipisci instructior sit ne, equidem imperdiet ullamcorper cum no. Cu est integre democritum, mediocrem democritum ullamcorper no sit. Minim latine vix ut.</p>
                <a href="{{ url('news/detail') }}">Baca Selengkapnya</a>
              </div>
            </section>
            <section class="row mg-t-30">
              <div class="alignCenter mg-t-20">
                <a href="#" class="btn btn-blue"><span>Load more</span></a>
              </div>
            </section>
          </div>
          <div class="col-md-3">
            <aside>
              <section class="asideSec">
                <h4 class="roboBold">Popular Post</h4>
                <section class="row mg-bt-20">
                  <div class="col-md-4 col-sm-2 col-xs-6">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog02.jpg') }}');">
                    </figure>
                  </div>
                  <div class="col-md-8 col-sm-10 noPad">
                    <h5 class="roboMedium mg-bt-5">Delenit utroque vivendo est ea</h5>
                    <p class="black small"><span>20 June 2017</span></p>
                  </div>
                </section>
                <section class="row mg-bt-20">
                  <div class="col-md-4 col-sm-2 col-xs-6">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog01.jpg') }}');">
                    </figure>
                  </div>
                  <div class="col-md-8 col-sm-10 noPad">
                    <h5 class="roboMedium mg-bt-5">Lorem ipsum dolor sit ...</h5>
                    <p class="black small"><span>20 June 2017</span></p>
                  </div>
                </section>
                <section class="row mg-bt-20">
                  <div class="col-md-4 col-sm-2 col-xs-6">
                    <figure>
                      <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('img/blog04.jpg') }}');">
                    </figure>
                  </div>
                  <div class="col-md-8 col-sm-10 noPad">
                    <h5 class="roboMedium mg-bt-5">Cu ferri oblique has ...</h5>
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
    </section>
    <!--/NEWS LIST-->
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
