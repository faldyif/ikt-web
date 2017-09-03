@extends('layout.app')

@section('title', $news->title . ' | Indonesia Car Terminal')

@section('content')
<!--HERO-->
@php
$news->view_count++;
$news->save();
@endphp
<section id="heroTitle">
  <div class="heroTitle" style="background-image: url('{{ url('storage') . '/' . $news->filename }}');">
    <div class="overlay"></div>
    <section class="container-fluid pd-30">
      <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ $news->title }}</h2>
      <p class="alignCenter wh mg-t-20"><span>{{ \Carbon\Carbon::parse($news->created_at)->toFormattedDateString() }}</span> / <span>{{ $news->view_count }} readers</span></p>
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