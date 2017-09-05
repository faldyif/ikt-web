@extends('layout.app')

@section('title','Gallery Detail')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Eam no eripuit noluisse intellegebat</h2>
          <p class="alignCenter wh mg-t-20"><span>20 June 2017</span> / <span>1k viewers</span></p>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!--GALLERY-->
    <section id="gallery-list">
      <div class="container-fluid wow fadeInUpBig pd-30">
        <!-- masonry -->
          <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item">
                <figure>
                  <img src="{{ url('img/port01.jpg') }}">
                  <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
            </div>
              <div class="grid-item grid-item--width2">
                  <figure>
                      <img src="{{ url('img/port01.jpg') }}">
                      <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                          <div class="overlay"></div>
                          <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                      </a>
                  </figure>
              </div>
              <div class="grid-item grid-item--width2">
                  <figure>
                      <img src="{{ url('img/port01.jpg') }}">
                      <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                          <div class="overlay"></div>
                          <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                      </a>
                  </figure>
              </div>
              <div class="grid-item grid-item--width2">
                  <figure>
                      <img src="{{ url('img/port01.jpg') }}">
                      <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                          <div class="overlay"></div>
                          <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                      </a>
                  </figure>
              </div>
              <div class="grid-item grid-item--width2">
                  <figure>
                      <img src="{{ url('img/port01.jpg') }}">
                      <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                          <div class="overlay"></div>
                          <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                      </a>
                  </figure>
              </div>
              <div class="grid-item grid-item--width2">
                  <figure>
                      <img src="{{ url('img/port01.jpg') }}">
                      <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                          <div class="overlay"></div>
                          <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                      </a>
                  </figure>
              </div>
              <div class="grid-item grid-item--width2">
                  <figure>
                      <img src="{{ url('img/port01.jpg') }}">
                      <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                          <div class="overlay"></div>
                          <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                      </a>
                  </figure>
              </div>
              <div class="grid-item grid-item--width2">
                  <figure>
                      <img src="{{ url('img/port01.jpg') }}">
                      <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                          <div class="overlay"></div>
                          <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                      </a>
                  </figure>
              </div>
              <div class="grid-item grid-item--width2">
                  <figure>
                      <img src="{{ url('img/port01.jpg') }}">
                      <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                          <div class="overlay"></div>
                          <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                      </a>
                  </figure>
              </div>
            <div class="grid-item grid-item--height2">
                <figure>
                  <img src="{{ url('img/port02.jpg') }}">
                  <a href="{{ url('img/port02.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
            </div>
            <div class="grid-item grid-item--width2">
                <figure>
                  <img src="{{ url('img/port01.jpg') }}">
                  <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
            </div>
            <div class="grid-item">
                <figure>
                  <img src="{{ url('img/port01.jpg') }}">
                  <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
            </div>
            <div class="grid-item grid-item--height2">
                <figure>
                  <img src="{{ url('img/port01.jpg') }}">
                  <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
            </div>
            <div class="grid-item grid-item--width2">
                <figure>
                  <img src="{{ url('img/port01.jpg') }}">
                  <a href="{{ url('img/port01.jpg') }}" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
            </div>
          </div>
        <!-- /masonry -->
        <section class="row mg-bt-30">
          <div class="alignCenter mg-t-20">
            <a href="#" class="btn btn-blue"><span>Load more</span></a>
          </div>
        </section>
        <hr>
        <section class="row">
          <div class="col-md-8 col-md-offset-2">
            <section class="mg-t-30">
              <div id="showToggle-r" class="alignCenter mg-t-20">
                <p class="btn btn-gray-full wd-100"><span>Leave a comment</span></p>
              </div>
              <div id="thisToggle-r">
                <form method="" action="" class="mg-t-20">
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
            <section class="mg-bt-30">
              <hr class="hrSpec hrSpecOrange">
              <h4 class="roboBold fullWidth">Comments</h4>
              <section class="row pd-t-10">
                <figure class="col-md-1 col-md-1 col-sm-1 bg-img mg-t-10">
                  <img src="{{ url('img/bg-square.png') }}" alt="user" style="background-image: url('{{ url('img/port02.jpg') }}');" class="rounded">
                </figure>
                <div class="col-md-9 col-sm-10 col-sm-10">
                  <h5 class="big roboBold">Someone</h5>
                  <p class="text-muted">15 Agustus 2017</p>
                  <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro.</p>
                </div>
                <div class=" alignRight col-md-2 col-sm-1 col-xs-1 mg-t-10">
                  <a href="#" class="roboBold big"><i class="fa fa-reply mg-r-10"></i> Reply</a>
                </div>
              </section>
              <hr>
              <section class="row pd-t-10">
                <figure class="col-md-1 col-md-1 col-sm-1 bg-img mg-t-10">
                  <img src="{{ url('img/bg-square.png') }}" alt="user" style="background-image: url('{{ url('img/port02.jpg') }}');" class="rounded">
                </figure>
                <div class="col-md-9 col-sm-10 col-sm-10">
                  <h5 class="big roboBold">Someone</h5>
                  <p class="text-muted">15 Agustus 2017</p>
                  <p>Aliquam principes deterruisset cum et, vel an eius equidem. Id quando legimus inermis eum, cibo consul democritum cum te, cu cum suas laudem graeci. Bonorum gloriatur signiferumque an pro.</p>
                </div>
                <div class=" alignRight col-md-2 col-sm-1 col-xs-1 mg-t-10">
                  <a href="#" class="roboBold big"><i class="fa fa-reply mg-r-10"></i> Reply</a>
                </div>
              </section>
              <hr>
            </section>
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
