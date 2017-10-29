@extends('layout.app')

@section('title','News List | IPC Car Terminal')

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
          @foreach($news as $key)
          @php
          $readers = $key->view_count;
          $key = $key->translate($currentLocale);
          @endphp
          <div class="col-md-4 col-sm-4">
            <section class="newsList">
                <figure>
                  <img src="{{ url('storage') . '/' . $key->filename }}" style="background-image: url('{{ url('storage') . '/' . $key->filename }}');">
                  <div class="overlay"></div>
                  <a href="{{ route('news.detail', $key->slug) }}">
                    <figcaption>Selengkapnya</figcaption>
                  </a>
                </figure>
                <p class="black small mg-t-20"><span>{{ \Carbon\Carbon::parse($key->created_at)->toFormattedDateString() }}</span> / <span>{{ $readers }} readers</span></p>
                <a href="{{ route('news.detail', $key->slug) }}"><h4 class="roboMedium">{{ $key->title }}</h4></a>
                <p class="black">{!! substr(strip_tags($key->content), 0, 500) !!}</p>
            </section>
          </div>
          @endforeach
        </section>
      </div>
    </section>
    <!--/RECENT NEWS-->
    <!--NEWS LIST-->
    <section id="news-list">
      <div class="container-fluid wow fadeInUpBig pd-bt-30">
        <section class="row mg-lr-20">
          <div class="col-md-9">
            @foreach($newsPaginated as $key)
              @php
                  $readers = $key->view_count;
                  $key = $key->translate($currentLocale);
              @endphp
              <section class="row newsListSec">
                <div class="col-md-6 col-sm-6">
                  <figure>
                    <img src="{{ url('storage') . '/' . $key->filename }}" style="background-image: url('{{ url('storage') . '/' . $key->filename }}');">
                  </figure>
                </div>
                <div class="col-md-6 col-sm-6 textForNewsList">
                  <p class="black small mg-t-20"><span>{{ \Carbon\Carbon::parse($key->created_at)->toFormattedDateString() }}</span> / <span>{{ $readers }} readers</span></p>
                  <h4 class="roboMedium">{{ $key->title }}</h4>
                  <p class="black">{!! substr(strip_tags($key->content), 0, 500) !!}</p>
                  <a href="{{ route('news.detail', $key->slug) }}">Baca Selengkapnya</a>
                </div>
              </section>
            @endforeach
            <section class="row mg-t-30">
              <div class="alignCenter mg-t-20">
                {{ $newsPaginated->links() }}
              </div>
            </section>
          </div>
          <div class="col-md-3">
            <aside>
              <section class="asideSec">
                <h4 class="roboBold">Popular Post</h4>
                @foreach($popularPosts as $key)
                  @php
                      $readers = $key->view_count;
                      $key = $key->translate($currentLocale);
                  @endphp
                  <a href="{{ route('news.detail', $key->slug) }}">
                  <section class="row mg-bt-20">
                      <div class="col-md-4 col-sm-2 col-xs-6">
                        <figure>
                          <img src="{{ url('storage') . '/' . $key->filename }}" style="background-image: url('{{ url('storage') . '/' . $key->filename }}');">
                        </figure>
                      </div>
                      <div class="col-md-8 col-sm-10 noPad">
                        <h5 class="roboMedium mg-bt-5">{{ $key->title }}</h5>
                        <p class="black small"><span>{{ \Carbon\Carbon::parse($key->created_at)->toFormattedDateString() }}</span></p>
                      </div>
                  </section>
                  </a>
                @endforeach
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
