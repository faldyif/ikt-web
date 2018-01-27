@extends('layout.app-with-footer')
<style type="text/css">
  .annual{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    cursor: pointer;
  }
  .annual:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
  }
  .annual-img{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    width: auto; 
    height: 200px !important;
    margin: 0 auto;
  }
</style>

@section('title','Annual Report | IPC Car Terminal')

@section('content')
<!--HERO-->
    <section id="heroTitle">
      <div class="heroTitle" style="background-image: url('{{ url('img/2.jpg') }}');">
        <div class="overlay"></div>
        <section class="container-fluid pd-30">
          <h2 class="roboBold wh alignCenter" data-wow-delay="0.4s">Annual Report</h2>
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
            <h3 class="mg-b-30 roboBold">Annual Report</h3>
              <div class="row">
                <div id="ar-2016" class="col-md-12 annual pd-bt-20 mg-bt-10 flex-row-center">
                  <div class="col-md-3">
                    <!-- foto -->
                    <img src="http://online.fliphtml5.com/tlahn/sxqf/files/shot.jpg" class="annual-img img-responsive">
                  </div>
                  <div class="col-md-9">
                    <!-- konten -->
                    <div class="col-md-7">
                    <p>Annual Report PT Indonesia Kendaraan Terminal 2016</p>
                    <p>Halaman: 73 Halaman</p>
                    <p>Tahun: 2016</p>
                    </div>
                    <div class="col-md-5">
                      <p>Deskripsi: </p>
                      <a href="{{ url('img/pdf/annual_report_2016.pdf')}}" class="btn btn-primary" download="">Download</a>
                    </div>
                  </div>
                </div>
                <img src="http://online.fliphtml5.com/tlahn/sxqf/files/shot.jpg" id="ar-2016-link" class="annual-img img-responsive" data-rel="fh5-light-box-demo" data-href="http://online.fliphtml5.com/tlahn/sxqf/" data-width="700" data-height="400" data-title="Annual Report IKT 2016" style="display: none">
              </div>
              <div class="row">
                <div class="col-md-12 annual pd-bt-20 mg-bt-10 flex-row-center">
                  <div class="col-md-3">
                    <!-- foto -->
                    <img src="{{ url('img/ar-2017.png') }}" class="annual-img img-responsive">
                  </div>
                  <div class="col-md-9">
                    <!-- konten -->
                    <div class="col-md-7">
                    <p>Annual Report PT Indonesia Kendaraan Terminal 2017</p>
                    <p>Halaman: 80 Halaman</p>
                    <p>Tahun: 2017</p>
                    </div>
                    <div class="col-md-5">
                    <p>Deskripsi: </p>
                    <a href="#" class="btn btn-primary disabled">Download</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>

    <!---->
@section('bottom')
<script src="//static.fliphtml5.com/web/js/plugin/LightBox/js/fliphtml5-light-box-api-min.js"></script>
<script type="text/javascript">
  $("#ar-2016").click(function () { 
    $("#ar-2016-link").trigger('click');

});
</script>
@endsection