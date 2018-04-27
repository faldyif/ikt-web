@extends('layout.app-with-footer')

@section('title','Customers Questionnaire | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Kuesioner Customer</h2>
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
            <div class="col-md-12">
            <hr class="hrSpec hrSpecOrange">
            <h3 class="mg-b-30 roboBold">Kuesioner Customer</h3>
              <div class="row">
                <div id="ar-2016" class="col-md-12 annual pd-bt-20 mg-bt-10 flex-row-center">
                  <div class="col-md-3">
                    <!-- foto -->
                    <img src="{{ url('img/cover_kuesioner.png') }}" class="annual-img img-responsive">
                  </div>
                  <div class="col-md-9">
                    <!-- konten -->
                    <div class="col-md-7">
                    <p>Kuesioner Automaker PT Indonesia Kendaraan Terminal 2018</p>
                    <p>Halaman: 6 Halaman</p>
                    <p>Tahun: 2018</p>
                    </div>
                    <div class="col-md-5">
                      <p>Deskripsi: </p>
                      <a href="{{ url('img/pdf/kuesioner_automaker_PT_IKT.pdf')}}" id="dwn" class="btn btn-primary" download="">Download</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 annual pd-bt-20 mg-bt-10 flex-row-center">
                  <div class="col-md-3">
                    <!-- foto -->
                    <img src="{{ url('img/cover_kuesioner.png') }}" class="annual-img img-responsive">
                  </div>
                  <div class="col-md-9">
                    <!-- konten -->
                    <div class="col-md-7">
                    <p>Kuesioner Logistik PT Indonesia Kendaraan Terminal 2018</p>
                    <p>Halaman: 6 Halaman</p>
                    <p>Tahun: 2018</p>
                    </div>
                    <div class="col-md-5">
                    <p>Deskripsi: Coming Soon</p>
                    <a href="{{ url('img/pdf/kuesioner_logistik_PT_IKT.pdf')}}" id="dwn" class="btn btn-primary" download="">Download</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 annual pd-bt-20 mg-bt-10 flex-row-center">
                  <div class="col-md-3">
                    <!-- foto -->
                    <img src="{{ url('img/cover_kuesioner.png') }}" class="annual-img img-responsive">
                  </div>
                  <div class="col-md-9">
                    <!-- konten -->
                    <div class="col-md-7">
                    <p>Kuesioner Shipping Line PT Indonesia Kendaraan Terminal 2018</p>
                    <p>Halaman: 5 Halaman</p>
                    <p>Tahun: 2018</p>
                    </div>
                    <div class="col-md-5">
                    <p>Deskripsi: Coming Soon</p>
                    <a href="{{ url('img/pdf/kuesioner_shipping-line_PT_IKT.pdf')}}" id="dwn" class="btn btn-primary" download="">Download</a>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="row">
                <h3 class="text-center">Kuesioner yang sudah diisi dapat dikirim kembali ke IPC Car Terminal dengan alamat JL Sindang Laut No. 101, Cilincing Jakarta Utara, 14110</h3>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
@endsection

    <!---->
@section('bottom')
<script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
<script type="text/javascript">
  $("#ar-2016").click(function (e) { 
    if ($(e.target).closest("#dwn").length == 0){
      $("#ar-2016-link").trigger('click');
    }

});
</script>
@endsection