@extends('layout.app-with-footer')
<style type="text/css">
  .annual{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .annual:hover{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
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
                <div class="col-md-12 annual pd-bt-20 mg-bt-10 flex-row-center">
                  <div class="col-md-3">
                    <!-- foto -->
                    <img src="{{ url('img/thumb.jpg') }}" class="img-responsive" style="width: 150px; height: auto;">
                  </div>
                  <div class="col-md-9">
                    <!-- konten -->
                    <div class="col-md-7">
                    <p>Annual Report PT Indonesia Kendaraan Terminal 2016</p>
                    <p>Halaman: 70 Halaman</p>
                    <p>Tahun: 2016</p>
                    </div>
                    <div class="col-md-5">
                      <p>Deskripsi: </p>
                      <a href="#" class="btn btn-primary">Download</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 annual pd-bt-20 mg-bt-10 flex-row-center">
                  <div class="col-md-3">
                    <!-- foto -->
                    <img src="{{ url('img/thumb.jpg') }}" class="img-responsive" style="width: 150px; height: auto;">
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
                    <a href="#" class="btn btn-primary">Download</a>
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
@endsection