@extends('layout.app')

@section('title','Press Release Detail | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/blog02.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Eam no eripuit noluisse intellegebat</h2>
          <p class="alignCenter wh mg-t-20"><span>20 June 2017</span> / <span>1k readers</span></p>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!--DETAIL -->
    <section id="news-detail">
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-t-20">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <p>Lorem ipsum dolor sit amet, quas integre sit no, mei velit virtute oportere cu. Aeque adipisci instructior sit ne, equidem imperdiet ullamcorper cum no. Cu est integre democritum, mediocrem democritum ullamcorper no sit. Minim latine vix ut.</p>
            <p>Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus, in eum singulis posidonium. Nec reque saepe ea, esse veniam definitionem est ei.</p>
            <p>Eam no eripuit noluisse intellegebat. Nominavi mnesarchum ad eam, pro dico recteque id, cu dicant audiam mel. At eum mazim dolore aliquid, id sed quas saepe doming. Atomorum assentior ne pri, ut cum fugit facilis electram.</p>
            <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro. Justo corpora suscipit quo et, vim te noluisse praesent scriptorem, pro ea incorrupte intellegam mediocritatem. Hinc laoreet mediocrem te nec, petentium iracundia ut cum. Fabulas ornatus iudicabit an pri, qui at decore legimus voluptatibus. Ei semper adipisci constituto eum, ad reque dicam nec.</p>
            <p>Delenit utroque vivendo est ea. Vim autem virtute concludaturque id. Cu ferri oblique has. At sed impedit apeirian ullamcorper, eum cu amet viris. Duo alia causae vituperatoribus ea, salutatus adolescens conclusionemque qui an. Illum euripidis eu vix.</p>
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
              <h5 class="fullWidth big">You might also like</h5>
              <p class="roboMedium big">One of the following</p>
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
            </section>
          </div>
        </section>
      </div>
    </section>
    <!--/DETAIL -->
    <!--footer-->
    <!-- <div class="hiddenSec"></div> -->
    <footer class="footer-1">
    <section id="contact" class="wow fadeInLeft">
    <section class="row noMag">
      <div class="col-md-4">
        <section class="contactInfo">
          <h4 class="roboBold">Kontak Kami</h4>
          <section class="row mg-lr-15 mg-t-30">
            <i class="fa fa-map-marker fa-2x or floatLeft mg-r-20"></i>
            <p class="small">JL Sindang Laut, Cilincing Jakarta Utara, 14110</p>
          </section>
          <section class="row mg-lr-15 mg-t-10">
            <i class="fa fa-envelope-o fa-lg or floatLeft mg-r-20"></i>
            <p class="small">info@indonesiacarterminal.co.id</p>
          </section>
          <section class="row mg-lr-15 mg-t-10">
            <i class="fa fa-phone fa-lg or floatLeft mg-r-20"></i>
            <p class="small">+62 21 4393 2251</p>
          </section>
          <section class="row">
            <div class="socialMedia text-center">
              <ul class="noPad">
                <li><a class="fb" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="tw" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="ig" href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </section>
        </section>
      </div>
      <div class="col-md-8 noPad hidden-400">
        <div class="map">
          <div class="overlay-map"></div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1833851621095!2d106.91224451476846!3d-6.105991995578615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe329d8258290e493!2sTanjung+Priok+Car+Terminal+(TPT)!5e0!3m2!1sen!2sid!4v1501491377262" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </section>
  </section>
    </footer>
    <!--/footer-->
    @endsection
