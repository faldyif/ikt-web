@extends('layout.app')

@section('title','IPC')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('./img/blog02.jpg');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Eam no eripuit noluisse intellegebat</h2>
          <p class="alignCenter wh mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!--DETAIL NEWS-->
    <section id="news-detail">
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-t-20">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <p>Lorem ipsum dolor sit amet, quas integre sit no, mei velit virtute oportere cu. Aeque adipisci instructior sit ne, equidem imperdiet ullamcorper cum no. Cu est integre democritum, mediocrem democritum ullamcorper no sit. Minim latine vix ut.</p>
            <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
            <p>Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. Atomorum assentior ne pri, ut cum fugit facilis electram.</p>
            <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro. Justo corpora suscipit quo et, vim te noluisse praesent scriptorem, pro ea incorrupte intellegam mediocritatem. Hinc laoreet mediocrem te nec, petentium iracundia ut cum. Fabulas ornatus iudicabit an pri, qui at decore legimus voluptatibus. Ei semper adipisci constituto eum, ad reque dicam nec.</p>
            <p>Delenit utroque vivendo est ea. Vim autem virtute concludaturque id. Cu ferri oblique has. At sed impedit apeirian ullamcorper, eum cu amet viris. Duo alia causae vituperatoribus ea, salutatus adolescens conclusionemque qui an. Illum euripidis eu vix.</p>
            <figure class="mg-bt-30">
              <img src="./img/blog02.jpg">
              <figcaption class="caption">salutatus adolescens conclusionemque qui an. Illum euripidis eu vix.</figcaption>
            </figure>
            <p>Delenit utroque vivendo est ea. Vim autem virtute concludaturque id. Cu ferri oblique has. At sed impedit apeirian ullamcorper, eum cu amet viris. Duo alia causae vituperatoribus ea, salutatus adolescens conclusionemque qui an. Illum euripidis eu vix.</p>
            <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro. Justo corpora suscipit quo et, vim te noluisse praesent scriptorem, pro ea incorrupte intellegam mediocritatem. Hinc laoreet mediocrem te nec, petentium iracundia ut cum. Fabulas ornatus iudicabit an pri, qui at decore legimus voluptatibus. Ei semper adipisci constituto eum, ad reque dicam nec.</p>
            <setion class="row">
              <ul class="tags">
                <li><a href="#">Company</a></li>
                <li><a href="#">Storage</a></li>
              </ul>
            </setion> 
            <section class="row mg-lr-10 mg-t-30">
              <h4 class="roboMedium text-center">Share this post : </h4>
              <div class="socialMedia text-center">
                <ul class="noPad">
                  <li><a class="fb" href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                  <li><a class="tw" href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                  <li><a class="ig" href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                </ul>
            </div>
            </section>
            <section class="mg-t-30">
              <div id="showToggle" class="alignCenter mg-t-20">
                <p class="btn btn-gray-full wd-100"><span>Leave a comment</span></p>
              </div>
              <div id="thisToggle">
                <form method="" action="">
                  <div class="form-group">
                    <textarea class="form-control" rows="5" id="" placeholder="Your comment ..."></textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Full Name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-blue-full fullWidth">Sent</button>
                  </div>
                </form>
              </div>
            </section>
            <section class="mg-t-30">
              <h5 class="alignCenter fullWidth">You might also like</h5>
              <p class="roboMedium alignCenter">One of the following</p>
              <section class="recent-news row mg-t-30">
                <div class="col-md-4 col-sm-4">
                  <section class="newsList">
                      <figure>
                        <img src="./img/bg-img.png" style="background-image: url('./img/port02.jpg');">
                        <div class="overlay"></div>
                        <a href="#">
                          <figcaption>Selengkapnya</figcaption>
                        </a>
                      </figure>
                      <a href="#"><h5 class="alignCenter roboMedium">Delenit utroque vivendo est ea</h5></a>
                      <p class="black small noMag alignCenter"><span>20 June 2017</span> / <span>1k readers</span></p>
                  </section>
                </div>
                <div class="col-md-4 col-sm-4">
                  <section class="newsList">
                      <figure>
                        <img src="./img/bg-img.png" style="background-image: url('./img/port01.jpg');">
                        <div class="overlay"></div>
                        <a href="#">
                          <figcaption>Selengkapnya</figcaption>
                        </a>
                      </figure>
                      <a href="#"><h5 class="alignCenter roboMedium">Delenit utroque vivendo est ea</h5></a>
                      <p class="black small noMag alignCenter"><span>20 June 2017</span> / <span>1k readers</span></p>
                  </section>
                </div>
                <div class="col-md-4 col-sm-4">
                  <section class="newsList">
                      <figure>
                        <img src="./img/bg-img.png" style="background-image: url('./img/blog04.jpg');">
                        <div class="overlay"></div>
                        <a href="#">
                          <figcaption>Selengkapnya</figcaption>
                        </a>
                      </figure>
                      <a href="#"><h5 class="alignCenter roboMedium">Delenit utroque vivendo est ea</h5></a>
                      <p class="black small noMag alignCenter"><span>20 June 2017</span> / <span>1k readers</span></p>
                  </section>
                </div>
              </section>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!--/DETAIL NEWS-->
    <!--footer-->
    <!-- <div class="hiddenSec"></div> -->
    <footer class="footer-1">
      <section class="row">
        <div class="col-md-3 col-sm-3">
          <figure class="logoFooter">
            <img src="./img/ikt-logo.png">
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