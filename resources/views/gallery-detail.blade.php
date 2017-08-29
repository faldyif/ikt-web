@extends('layout.app')

@section('title','IPC')

@section('content')
<!--NAV-->
      <nav id="navbar" class="navbar navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed floatRight" data-toggle="collapse" data-target="#Navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.html">
              <img class="" src="./img/ikt-logo.png">
            </a>
          </div>

          <div class="collapse navbar-collapse" id="Navbar">
            <ul class="nav navbar-nav navbar-nav-dropdown navbar-right">
              <li><a href="./index.html#hero">BERANDA</a></li>
              <li class="has-children"><a>TENTANG</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Tentang Kami</a></li>
                  <li><a href="#">Sejarah Perusahaan</a></li>
                  <li><a href="agenda.html">Acara Perusahaan</a></li>
                  <li class="has-children dropdown-submenu"><a href="#">Berthing Plan</a>
                    <ul class="dropdown-menu level-2">
                      <li><a href="#">International</a></li>
                      <li><a href="#">Domestic</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-children"><a href="#">LAYANAN</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Gambaran Fasilitas</a></li>
                  <li><a href="#">Stevedoring &amp Cardodoring</a></li>
                  <li><a href="#">Receiving &amp Delivering</a></li>
                  <li><a href="#">Storages</a></li>
                </ul>
              </li>
              <li><a href="./news-list.html">BERITA</a></li>
              <li class="active"><a href="./gallery-list.html">GALLERY</a></li>
              <li><a href="#">PROCUREMENT</a></li>
              <li class="has-children has-children-right"><a href="#">BATUAN</a>
                <ul class="dropdown-menu">
                  <li><a href="#">Customer Service</a></li>
                  <li><a href="#">Help Desk</a></li>
                  <li><a href="#">CCTV</a></li>
                </ul>
              </li>
              <li><a href="#" id="languageButton"><i class="fa fa-language fa-lg"></i></a></li>
              <li class=""><a href="#" id="searchButton"><i class="fa fa-search"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!--/NAV-->
    <!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('./img/2.jpg');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Eam no eripuit noluisse intellegebat</h2>
          <p class="alignCenter wh mg-t-20"><span>20 June 2017</span> / <span>1k viewers</span></p>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!--GALLERY-->
    <section id="gallery">
      <div class="container-fluid wow fadeInUpBig pd-30">
        <!-- masonry -->
          <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item">
                <figure>
                  <img src="./img/port01.jpg">
                  <a href="./img/port01.jpg" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
            </div>
            <div class="grid-item grid-item--width2">
                <figure>
                  <img src="./img/port01.jpg">
                  <a href="./img/port01.jpg" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
            </div> 
            <div class="grid-item grid-item--height2">
                <figure>
                  <img src="./img/port02.jpg">
                  <a href="./img/port02.jpg" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
                    <div class="overlay"></div>
                    <figcaption><i class="fa fa-plus fa-2x"></i></figcaption>
                  </a>
                </figure>
            </div>
            <div class="grid-item grid-item--height2 grid-item--width2">
                <figure>
                  <img src="./img/port01.jpg">
                  <a href="./img/port01.jpg" data-rel="lightcase:galleryCollection" title="Vix eu etiam mediocrem">
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