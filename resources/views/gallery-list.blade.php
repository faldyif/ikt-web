@extends('layout.app')

@section('title','Gallery List | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
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
            <a href="{{ url('gallery/detail') }}">
              <figure class="galleryList" class="wow fadeInRight">
                <img src="./img/bg-img.png" style="background-image: url('./img/port01.jpg');">
                <div class="overlay"></div>
                <figcaption class="figcaptionTop"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                <figcaption class="figcaptionBottom">Delenit utroque vivendo ...<br><span class="wh">12 July 2017</span></figcaption>
              </figure>
            </a>
          </div>
          <div class="col-md-4 col-sm-4">
            <a href="{{ url('gallery/detail') }}">
              <figure class="galleryList">
                <img src="./img/bg-img.png" style="background-image: url('./img/port02.jpg');">
                <div class="overlay"></div>
                <figcaption class="figcaptionTop"><i class="fa fa-camera-retro fa-2x"></i></figcaption>
                <figcaption class="figcaptionBottom">Delenit utroque vivendo est<br><span class="wh">12 July 2017</span></figcaption>
              </figure>
            </a>
          </div>
          <div class="col-md-4 col-sm-4">
            <a href="{{ url('gallery/detail') }}">
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
          <hr class="hrSpec hrSpecOrange">
          <h3 class="roboBold">Company Album</h3>
        </section>
        <section class="row mg-bt-20 mg-lr-10 img-ikt img-ikt-top">
          <!-- masonry -->
          <div class="grid">
            <div class="grid-sizer"></div>
            @foreach($albums as $key)
              @php
                $firstPhoto = \App\AlbumPhoto::where('album_id', $key->id)->first();
              @endphp
              <div class="grid-item">
                <!-- newAlbumList -->
                <div class="col-md-12 mg-b-20">
                  <section>
                    <div class="card">
                      <figure>
                        <img class="card-img-top" src="{{ url('storage/' . $firstPhoto->filename) }}" style="background-image: url('{{ url('storage/' . $firstPhoto->filename) }}')"  alt="Card image cap">
                        <a href="{{ route('gallery.detail', $key->slug) }}">
                          <div class="overlay"></div>
                          <figcaption><i class="fa fa-search-plus fa-2x"></i></figcaption>
                        </a>
                      </figure>
                      <div class="card-body">
                        <hr class="hrSpec hrSpecOrange">
                        <h4 class="card-title roboBold">{{ $key->title }}</h4>
                      </div>
                    </div>
                  </section>
                </div>
                <!-- /newAlbumList -->
              </div>
            @endforeach
          </div>
          <!-- /masonry -->
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

@section('bottom')
    <script src="{{ url('js/masonry.js') }}"></script>
    <script src="{{ url('js/imagesloaded.js') }}"></script>
    <script src="{{ url('js/custom.gallery.js') }}"></script>
@endsection
