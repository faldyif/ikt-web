@extends('layout.app-with-footer')

@section('title',trans('Maklumat Pelayanan') .' | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/3.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Maklumat Pelayanan</h2>
          <h4 class="alignCenter wh mg-t-20">PT Indonesia Kendaraan Terminal</h4>
        </section>
      </div>
    </section>
    <!--/HERO-->
    <!-- -->
    <section>
      <div class="container-fluid wow fadeInUpBig">
        <section class="row pd-t-20">
          <div class="col-md-10 col-sm-10 col-sm-offset-1 pd-bt-30">
            <section class="pd-lr-30">
                <hr class="hrSpec hrSpecOrange">
                <h3 class="mg-b-30 roboBold">Maklumat</h3>
            </section>
            <section class="content">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{ url('img/maklumat1c.jpg') }}" alt="Bad Connection" class="img-responsive">  
                </div>
                <div class="col-md-6">
                  <img src="{{ url('img/maklumat2c.jpg') }}" alt="Bad Connection" class="img-responsive">  
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
    </section>
    <!---->
@endsection