@extends('layout.app-with-footer')

@section('title','Standar Pelayanan | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Standar Pelayanan</h2>
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
            <h3 class="mg-b-30 roboBold">Standar Pelayanan</h3>
              <div class="row">
                <div id="ar-2016" class="col-md-12 annual pd-bt-20 mg-bt-10 flex-row-center">
                  <div class="col-md-3">
                    <!-- foto -->
                    <img src="http://online.fliphtml5.com/tlahn/sxqf/files/shot.jpg" class="annual-img img-responsive">
                  </div>
                  <div class="col-md-9">
                    <!-- konten -->
                    <div class="col-md-7">
                    <p>Standar Pelayanan PT Indonesia Kendaraan Terminal 2018</p>
                    <p>Halaman: 38 Halaman</p>
                    <p>Tahun: 2018</p>
                    </div>
                    <div class="col-md-5">
                      <p>Deskripsi: </p>
                      <a href="{{ url('img/pdf/standard_service.pdf')}}" id="dwn" class="btn btn-primary" download="">Download</a>
                    </div>
                  </div>
                </div>
                <img src="http://online.fliphtml5.com/tlahn/sxqf/files/shot.jpg" id="ar-2016-link" class="annual-img img-responsive" data-rel="fh5-light-box-demo" data-href="http://online.fliphtml5.com/tlahn/sxqf/" data-width="700" data-height="400" data-title="Annual Report IKT 2016" style="display: none">
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