@extends('layout.app-with-footer')

@section('title','IPC')

@section('content')
  <!--HERO-->
  <section id="heroTitle">
    <div class="heroTitle" style="background-image: url('./img/2.jpg');">
      <div class="overlay"></div>
      <section class="container-fluid pd-30">
        <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ trans('stevedoring.head-title') }}</h2>
        <h4 class="alignCenter wh mg-t-20">{{ trans('stevedoring.sub-title') }}</h4>
      </section>
    </div>
  </section>
  <!--/HERO-->
  <!-- -->
  <section>
    <div class="container-fluid wow fadeInUpBig">
      <section class="row pd-t-20">
        <div class="col-md-8 col-sm-10 col-sm-offset-1 pd-bt-30">
          <div class="col-md-8">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">{!! trans('stevedoring.title') !!}</h3>
            <!-- Content starts here -->
            {!! trans('stevedoring.content') !!}
          </div>
          <div class="col-md-4">
            <img src="{{ url('img/stevedooring-argodooring-01.jpg') }}" class="service-media">
          </div>
          <!-- End content -->
        </div>
      </section>
    </div>
  </section>
  <!---->
@endsection