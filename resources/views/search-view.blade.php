@extends('layout.app')

@section('title','Search View')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold alignCenter wh" data-wow-delay="0.4s">Hasil Pencarian :<br> <span class="small roboLight wh">{{ $q }}</span>
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
                <div class="alert alert-info" role="alert">
                  {{ $newsResults->count() }} entri berita ditemukan
                </div>
                @foreach($newsResults as $key)
                  <section class="row newsListSec">
                    <div class="col-md-6 col-sm-6">
                      <figure>
                        <img src="{{ url('storage') . '/' . $key->filename }}" style="background-image: url('{{ url('storage') . '/' . $key->filename }}');">
                      </figure>
                    </div>
                    <div class="col-md-6 col-sm-6 textForNewsList">
                      <p class="black small mg-t-20"><span>{{ \Carbon\Carbon::parse($key->created_at)->toFormattedDateString() }}</span> / <span>{{ $key->view_count }} readers</span></p>
                      <h4 class="roboMedium">{{ $key->title }}</h4>
                      <p class="black">{!! substr(strip_tags($key->content), 0, 30) !!}</p>
                      <a href="{{ route('news.detail', $key->slug) }}">Baca Selengkapnya</a>
                    </div>
                  </section>
                @endforeach
                <section class="row mg-t-30">
                  <div class="alignCenter mg-t-20">
                    {{ $newsResults->links() }}
                  </div>
                </section>
              </div>
            </section>
            <hr>
            <section class="mg-lr-20">
              <hr class="hrSpec hrSpecOrange">
              <h3 class="roboBold">Press Release</h3>
              <div>
                <div class="alert alert-info" role="alert">
                  {{ $pressReleaseResults->count() }} entri press release ditemukan
                </div>
                @foreach($pressReleaseResults as $key)
                  <div class="row mg-t-10 mg-bt-20">
                    <p class="col-md-2 col-sm-3 col-xs-2 black roboMedium mg-t-10"><span class="bigger">{{ \Carbon\Carbon::parse($key->date_time)->toFormattedDateString() }} </span> <br>{{ \Carbon\Carbon::parse($key->date_time)->toTimeString() }}</p>
                    <section class="col-md-7 col-sm-6 col-xs-10">
                      <h4 class="roboMedium">{{ $key->title }}</h4>
                      {!! $key->description !!}
                    </section>
                    <section class="col-md-3 col-sm-3">
                      <p class="roboMedium hidden-768 mg-t-5 or">{{ $key->location }}</p>
                    </section>
                  </div>
                @endforeach
                <section class="row mg-t-30">
                  <div class="alignCenter mg-t-20">
                    {{ $pressReleaseResults->links() }}
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
