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
            <div class="grid-item grid-item--height2 grid-item--width2">
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
