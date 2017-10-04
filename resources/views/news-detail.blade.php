@extends('layout.app')

@php
    $news->view_count++;
    $news->save();
    $readers = $news->view_count;
    $news = $news->translate($currentLocale);
@endphp

@section('title', $news->title . ' | Indonesia Car Terminal')

@section('content')
    <!--HERO-->
<section id="heroTitle">
  <div class="heroTitle" style="background-image: url('{{ url('storage') . '/' . $news->filename }}');">
    <div class="overlay"></div>
    <section class="container-fluid pd-30">
      <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ $news->title }}</h2>
      <p class="alignCenter wh mg-t-20"><span>{{ \Carbon\Carbon::parse($news->created_at)->toFormattedDateString() }}</span> / <span>{{ $readers }} readers</span></p>
    </section>
  </div>
</section>
<!--/HERO-->
<!--DETAIL NEWS-->
<section id="news-detail">
  <div class="container-fluid wow fadeInUpBig">
    <section class="row pd-t-20">
      <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 news-detail-content">
        {!! $news->content !!}
          <section class="row mg-lr-10 mg-t-30">
              <h4 class="roboMedium text-center">Share this post : </h4>
              <div class="socialMedia text-center">
                  <ul class="noPad">
                      <li><a id="shareBtn" class="fb" href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                      <li><a class="tw" href="https://twitter.com/intent/tweet?text={{ $news->title }}%20%23ikt%20{{ url('news') }}/{{ $news->slug }}" data-size="large"><i class="fa fa-lg fa-twitter"></i></a></li>
                  </ul>
              </div>
          </section>
          <section class="mg-t-30">
              @if (count($errors) > 0)
                  <div class="callout callout-warning">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <div id="showToggle-r" class="alignCenter mg-t-20">
                  <p class="btn btn-gray-full wd-100"><span>Leave a comment</span></p>
              </div>
              <div id="thisToggle-r">
                  {!! Form::open(array('route' => 'news-comment.post', 'enctype' => 'multipart/form-data')) !!}
                      <input type="hidden" name="news_id" value="{{ $news->id }}">
                      <div class="form-group">
                          <textarea name="comment" class="form-control" rows="5" id="" placeholder="Your comment ..."></textarea>
                      </div>
                      <div class="form-group">
                          <input name="name" type="text" class="form-control" id="" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                          <input name="email" type="text" class="form-control" id="" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <button type="submit" class="btn btn-blue-full fullWidth">Sent</button>
                      </div>
                  {!! Form::close() !!}
              </div>
          </section>
          <section class="mg-bt-30">
              <hr class="hrSpec hrSpecOrange">
              <h4 class="roboBold fullWidth">Comments</h4>
              @foreach($newsComment as $key)
              <section class="row pd-t-10">
                  <figure class="col-md-1 col-md-1 col-sm-1 bg-img mg-t-10">
                      <img src="{{ url('img/bg-square.png') }}" alt="user" style="background-image: url('{{ url('img/port02.jpg') }}');" class="rounded">
                  </figure>
                  <div class="col-md-9 col-sm-10 col-sm-10">
                      <h5 class="big roboBold">{{ $key->name }}</h5>
                      <p class="text-muted">{{ $key->created_at }}</p>
                      <p>{{ $key->comment }}</p>
                  </div>
                  <div class=" alignRight col-md-2 col-sm-1 col-xs-1 mg-t-10">
                      <a href="#" class="roboBold big"><i class="fa fa-reply mg-r-10"></i> Reply</a>
                  </div>
              </section>
              <hr>
              @endforeach
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

@section('head')
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '2067509959941405',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v2.10'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));
</script>
@endsection

@section('bottom')
<script>
    document.getElementById('shareBtn').onclick = function() {
        FB.ui({
            method: 'share',
            display: 'popup',
            href: '{{ url('news') }}/{{ $news->slug }}',
        }, function(response){});
    }
</script>
@endsection