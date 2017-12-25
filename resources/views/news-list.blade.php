@extends('layout.app-with-footer')

@section('title','News List | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Berita Perusahaan</h2>
                <h4 class="alignCenter wh mg-t-20">PT. Indonesia Kendaraan Terminal</h4>
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
                                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('storage') . '/' . $key->filename }}');">
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
                                    <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('storage') . '/' . $key->filename }}');">
                                </figure>
                            </div>
                            <div class="col-md-6 col-sm-6 textForNewsList">
                                <p class="black small mg-t-20"><span>{{ \Carbon\Carbon::parse($key->created_at)->toFormattedDateString() }}</span> / <span>{{ $readers }} readers</span></p>
                                <h4 class="roboMedium">{{ $key->title }}</h4>
                                <p class="black">{!! substr(strip_tags($key->content), 0, 200) !!}</p>
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
                                                <img src="{{ url('img/bg-img.png') }}" style="background-image: url('{{ url('storage') . '/' . $key->filename }}');">
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
@endsection
