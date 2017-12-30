<link rel="stylesheet" type="text/css" href="{{ url('css/foundation.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/styles_foundation.css') }}"> 
@extends('layout.app-with-footer')

@section('title', trans('cargodoring.head-title') . ' | IPC Car Terminal')

@section('content')
  <!--HERO-->
  <section id="heroTitle">
    <div class="heroTitle" style="background-image: url('{{ url('img/stevedoring_6.jpg') }}');">
      <div class="overlay"></div>
      <section class="container-fluid pd-30">
        <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ trans('cargodoring.head-title') }}</h2>
        <h4 class="alignCenter wh mg-t-20">{{ trans('cargodoring.sub-title') }}</h4>
      </section>
    </div>
  </section>
  <!--/HERO-->
  <!-- -->
  <section>
    <div class="container-fluid wow fadeInUpBig">
      <section class="row pd-t-20">
        <div class="col-md-10 col-sm-10 col-sm-offset-1 pd-bt-30">
            <!-- Content starts here -->
            {!! trans('cargodoring.content') !!}
          <!-- End content -->
        </div>
      </section>
    </div>
  </section>
  <!---->
@endsection