@extends('layout.app-with-footer')

@section('title','IPC')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ trans('vission-mission.head-title') }}</h2>
          <h4 class="alignCenter wh mg-t-20">{{ trans('vission-mission.sub-title') }}</h4>
        </section>
      </div>
        
    </section>
    <!--/HERO-->
    <!-- -->
    <section>
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-t-20">
          <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 pd-bt-30">
          {!! trans('vission-mission.content') !!}
            <section class="row mg-lr-10 mg-t-30">
              <h4 class="roboMedium text-center">Share this post : </h4>
              <div class="socialMedia text-center">
                <ul class="noPad">
                  <li><a class="fb" href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
                  <li><a class="tw" href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
                  <li><a class="ig" href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
                </ul>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!---->
@endsection
