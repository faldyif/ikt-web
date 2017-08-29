@extends('layout.app')

@section('title','IPC')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('./img/2.jpg');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh" data-wow-delay="0.4s">Gallery</h2>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!--RECENT GALLERY-->
    <!-- <section id="gallery">
      <div class="container-fluid wow fadeInUpBig">
        <section class="pd-lr-20">
          <hr class="hrSpec hrSpecOrange">
          <h3 class="mg-b-30 roboBold">Gallery Terbaru</h3>
        </section>
        <section class="row mg-bt-30 mg-lr-10">
          <div class="col-md-4 col-sm-4">
            <a href="gallery-detail.html">
              <figure class="galleryList" class="wow fadeInRight">
                <img src="./img/bg-img.png" style="background-image: url('./img/port01.jpg');">
                <div class="overlay"></div>
                <figcaption class="figcaptionTop"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                <figcaption class="figcaptionBottom">Delenit utroque vivendo ...<br><span class="wh">12 July 2017</span></figcaption>
              </figure>
            </a>
          </div>
          <div class="col-md-4 col-sm-4">
            <a href="gallery-detail.html">
              <figure class="galleryList">
                <img src="./img/bg-img.png" style="background-image: url('./img/port02.jpg');">
                <div class="overlay"></div>
                <figcaption class="figcaptionTop"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                <figcaption class="figcaptionBottom">Delenit utroque vivendo est<br><span class="wh">12 July 2017</span></figcaption>
              </figure>
            </a>
          </div>
          <div class="col-md-4 col-sm-4">
            <a href="gallery-detail.html">
              <figure class="galleryList">
                <img src="./img/bg-img.png" style="background-image: url('./img/port03.jpg');">
                <div class="overlay"></div>
                <figcaption class="figcaptionTop"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                <figcaption class="figcaptionBottom">Delenit utroque vivendo ...<br><span class="wh">12 July 2017</span></figcaption>
              </figure>
            </a>
          </div>
        </section>
      </div>
    </section> -->
    <!--/RECENT GALLERY-->
    <!--GALLERY-->
    <section id="gallery-list" class="mg-bt-30">
      <div class="container-fluid wow fadeInUpBig">
        <section class="mg-lr-20">
          <h3 class="roboBold">Gallery</h3>
          <p class="">Vix eu etiam mediocrem. Qui debet essent omnium ut. Ne qui recusabo temporibus</p>
        </section>
        <!-- masonry -->
          <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item grid-item--width2">
                <figure>
                  <img src="./img/port02.jpg">
                  <a href="./img/port02.jpg" data-rel="lightcase"><div class="overlay"></div></a>
                  <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                  <figcaption class="figcaptionBottom"><a href="#">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                </figure>
            </div>
            <div class="grid-item grid-item--height2">
                <figure>
                  <img src="./img/blog02.jpg">
                  <a href="./img/blog02.jpg" data-rel="lightcase"><div class="overlay"></div></a>
                  <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                  <figcaption class="figcaptionBottom"><a href="#">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                </figure>
            </div>
            <div class="grid-item">
                <figure>
                  <img src="./img/blog01.jpg">
                  <a href="./img/blog01.jpg" data-rel="lightcase"><div class="overlay"></div></a>
                  <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                  <figcaption class="figcaptionBottom"><a href="#">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                </figure>
            </div>
            <div class="grid-item">
                <figure>
                  <img src="./img/blog04.jpg">
                  <a href="./img/blog04.jpg" data-rel="lightcase"><div class="overlay"></div></a>
                  <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                  <figcaption class="figcaptionBottom"><a href="#">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                </figure>
            </div>
            <div class="grid-item">
                <figure>
                  <img src="./img/port01.jpg">
                  <div class="overlay"></div>
                  <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                  <figcaption class="figcaptionBottom"><a href="gallery-detail.html">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                </figure>
            </div>
            <div class="grid-item grid-item--width2">
                <figure>
                  <img src="./img/port01.jpg">
                  <div class="overlay"></div>
                  <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                  <figcaption class="figcaptionBottom"><a href="gallery-detail.html">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                </figure>
            </div>
            <div class="grid-item grid-item--height2">
                <figure>
                  <img src="./img/port01.jpg">
                  <div class="overlay"></div>
                  <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                  <figcaption class="figcaptionBottom"><a href="gallery-detail.html">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                </figure>
            </div>
            <div class="grid-item grid-item--height2 grid-item--width2">
                <figure>
                  <img src="./img/port01.jpg">
                  <div class="overlay"></div>
                  <figcaption class="figcaptionTop hidden-768"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                  <figcaption class="figcaptionBottom"><a href="gallery-detail.html">Delenit utroque vivendo est ea</a><br>12 July 2017</figcaption>
                </figure>
            </div>
          </div>
        <!-- /masonry -->
        <section class="row mg-t-30">
              <div class="alignCenter mg-t-20">
                <a href="#" class="btn btn-blue"><span>Load more</span></a>
              </div>
            </section>
      </div>
    </section>
    <!--/GALLERY-->
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