@extends('layout.app-with-footer')

@section('title','Pre-Delivery Inspection | IPC Car Terminal')

@section('content')
    <!--HERO-->
    <section id="heroTitle">
        <div class="heroTitle" style="background-image: url('{{ url('img/car3.jpg') }}');">
            <div class="overlay"></div>
            <section class="container-fluid pd-30">
                <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">{{ trans('pdi.title') }}</h2>
                <h4 class="alignCenter wh mg-t-20">PT Indonesia Kendaraan Terminal</h4>
            </section>
        </div>
    </section>
    <!--/HERO-->
    <!-- -->
    <section>
        <div class="container-fluid wow fadeInUpBig">
            <section class="row pd-t-20">
                <div class="col-md-9 col-sm-10 col-sm-offset-1 pd-bt-30">
                {!! trans('pdi.content') !!}
                </div>
            </section>
        </div>
    </section>
    <!---->
@endsection