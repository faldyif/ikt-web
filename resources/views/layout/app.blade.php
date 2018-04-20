<!DOCTYPE html>
<html lang="en" class="main">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <meta name="description" content="@yield('description')">
  <meta name="author" content="Prekl Interactive">
  <meta name="keywords" content="indonesia car terminal, indonesia kendaraan terminal, car terminal, tanjung priok, tanjung priuk, jakarta, cilincing, import, export, delivery, receiving, stevedoring, cargodoring, services">

  <!-- Shortcut icon -->
  <link rel="shortcut icon" type="x-icon" href="{{ url('img/ikt-icon.png') }}">

  <link rel="stylesheet" type="text/css" href="{{ url('css/custom-newhome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/lightcase.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/slick.css') }}">
  <!-- <link rel="stylesheet" type="text/css" href="{{ url('css/jquery.fullpage.min.css') }}"> -->
  <link rel="stylesheet" type="text/css" href="{{ url('css/ikt-style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('homepage/css/header-only.css')}}">
  <link rel="stylesheet" href="{{ url('homepage/css/responsive.css')}}">
  <style type="text/css">
    .dropdown:hover .dropdown-menu {
        display: block;
    }
    .dropdown .dropdown-menu li a {
        color: #898989;
        padding: 6px 20px;
        font-weight: 300;
    }
  </style>
  

  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('head')
</head>
<body>
<div class="loader"></div>
<!--NAV-->
<!-- Header -->
<header class="header light">
  <div class="sticky">
    <div class="container">
      <div class="logo" >
        <!-- <a class="shine" href="#"><img style="max-width:50px;" src="{{url('homepage/images/ikt_putih.png')}}" alt=""></a>  -->
      </div>
                <!-- logo dari template yang lama -->
      <div class="navbar-header">
        <a class="navbar-brand shine" href="{{ route('welcome') }}">
          <img class="" src="{{ url('img/ikt_putih.png') }}">
        </a>
      </div>
                <!-- /logo dari template yang lama -->
      <!-- Nav -->
      <nav class="navbar ownmenu">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
        </div>
        <!-- NAV -->
        <div class="collapse navbar-collapse" id="nav-open-btn">
          <ul class="nav">
            <li class=""><a href="{{ url('/') }}" class="" data-toggle="">{{ strtoupper(trans('menu.home')) }}</a>
            </li>
            <li class="dropdown"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(trans('menu.about-us')) }}</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('company.about') }}">{{ trans('menu.profile') }}</a></li>
                <li><a href="{{ route('company.ceo-message') }}">{{ trans('menu.ceo-message') }}</a></li>
                <li><a href="{{ route('company.history') }}">{{ trans('menu.company-history') }}</a></li>
                <li><a href="{{ route('company.gcg') }}">{{ trans('menu.gcg-application') }}</a></li>
                <li><a href="{{ route('company.culture') }}">{{ trans('menu.company-culture') }}</a></li>
                <li><a href="{{ route('company.corporate-roadmap') }}">{{ trans('menu.corporate-roadmap') }}</a></li>
                <li><a href="{{ route('csr')}}">{{ trans('menu.csr') }}</a></li>
                <li><a href="{{ route('company.achievements') }}">{{ trans('menu.achievements') }}</a></li>
                <li><a href="{{ route('company.subsidiary') }}">{{ trans('menu.subsidiary') }}</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="services-1.html" class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(trans('menu.services')) }}</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('service.stevedoring') }}">{{ trans('menu.stevedoring') }}</a></li>
                <li><a href="{{ route('service.cargodoring') }}">{{ trans('menu.cargodoring') }}</a></li>
                <li><a href="{{ route('service.receiving') }}">{{ trans('menu.receiving-delivering') }}</a></li>
                <li><a href="{{ route('service.vas') }}">Value Added Services</a>
                <li><a href="{{ route('service.sop') }}">{{ trans('menu.sop') }}</a>
              </ul>
            </li>
            <li class="dropdown"> <a href="index_mp-3a.html" class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(trans('menu.facilities')) }}</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('facilities.fas') }}">{{ trans('menu.main-facilities') }}</a></li>
                <li><a href="{{ route('facilities.fas-1') }}">{{ trans('menu.support-facilities') }}</a></li>
                <li><a href="{{ route('facilities.fas-2') }}">{{ trans('menu.equipment-facilities') }}</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(trans('menu.information-center')) }}</a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('news') }}">{{ trans('menu.news') }}</a></li>
                <li><a href="{{ route('gallery') }}">{{ trans('menu.gallery') }}</a></li>
                <li><a href="{{ route('press-release') }}">{{ trans('menu.press-release') }}</a></li>
                <li><a href="{{ route('annual') }}">{{ trans('menu.annual-report') }}</a></li>
                <li><a href="{{ route('statistic') }}">{{ trans('menu.statistic-data') }}</a></li>
                <li><a href="{{ route('company.clients') }}">{{ trans('menu.our-customer') }}</a></li>
                <li><a href="http://www.eproc-ikt.com" target="_blank">{{ trans('menu.procurement') }}</a></li>
                <li><a href="{{ route('company.magazine') }}">{{ trans('menu.limouzine-magazine') }}</a></li>
                <li><a href="{{ route('information.appraisal') }}">{{ trans('menu.appraisal') }}</a></li>
              </ul>
            </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">language</a>
              <ul class="dropdown-menu">
                <li {{ (app()->getLocale() == 'en' ? 'class=active' : '') }}>
                  <a href="{{ route('lang.switch', 'en') }}">
                    <div class="flex-row-center">
                      <img src="{{ url('img/english.png') }}" class="mg-r-10" width="20" alt="">
                      English
                    </div>
                  </a>
                </li>
                <li {{ (app()->getLocale() == 'id' ? 'class=active' : '') }}>
                  <a href="{{ route('lang.switch', 'id') }}">
                    <div class="flex-row-center">
                      <img src="{{ url('img/indonesian.png') }}" class="mg-r-10" width="20" alt="">
                      Bahasa Indonesia
                    </div>
                  </a>
                </li>
                <li {{ (app()->getLocale() == 'jp' ? 'class=active' : '') }}>
                  <a href="{{ route('lang.switch', 'jp') }}">
                    <div class="flex-row-center">
                      <img src="{{ url('img/japan.png') }}" class="mg-r-10" width="20" alt="">
                      日本語
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class=""><a id="showToggle"><i class="fa fa-search"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div id="thisToggle" class="search-field pd-bt-10 col-md-10 col-md-offset-1">
      <form method="GET" action="{{ route('search') }}">
        <div class="input-group">
          <input name="q" type="text" class="form-control col-xs-3" id="" placeholder="{{ trans('menu.search') }}">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
  </div>
</header>
<!-- End Header -->
<!--/NAV-->
  @yield('content')
  @yield('footer')

  <!-- Modal -->

  <div id="modal-whistleblowing" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div id="modal-whistleblowing-display" class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Kirim Aduan Pelanggaran</h4>
        </div>
        <div class="modal-body">
          <p>Kirimkan aduan pelanggaran melalui form di bawah ini:</p>
          {!! Form::open(array('route' => 'whistle.send', 'enctype' => 'multipart/form-data', 'id' => 'form_send_whistleblowing')) !!}
          {{ Form::text('name', null, array('id' => 'name_wb', 'placeholder' => 'Nama', 'required' => 'required', 'class' => 'form-control')) }}
          <br>
          {{ Form::email('email', null, array('id' => 'email_wb', 'placeholder' => 'Email', 'required' => 'required', 'class' => 'form-control')) }}
          <br>
          {{ Form::text('no_telp', null, array('id' => 'no_telp_wb', 'placeholder' => 'Nomor telepon (opsional)', 'class' => 'form-control')) }}
          <br>
          {{ Form::textarea('uraian_pelanggaran', null, array('id' => 'uraian_pelanggaran_wb', 'placeholder' => 'Uraian pelanggaran', 'required' => 'required', 'class' => 'form-control', 'style' => '-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;width: 100%;')) }}
          <br>
          {{ Form::text('tempat_kejadian', null, array('id' => 'tempat_kejadian_wb', 'placeholder' => 'Tempat kejadian', 'class' => 'form-control')) }}
          <br>
          {{ Form::text('waktu_kejadian', null, array('id' => 'waktu_kejadian_wb', 'placeholder' => 'Waktu kejadian', 'class' => 'form-control')) }}
          <br>
          {{ Form::text('pihak_terlibat', null, array('id' => 'pihak_terlibat_wb', 'placeholder' => 'Pihak-pihak yang terlibat', 'class' => 'form-control')) }}
          <br>
          <p>Lampiran bukti-bukti:</p>
          {{ Form::file('lampiran_bukti[]', array('id' => 'lampiran_bukti', 'class' => 'form-control', 'multiple' => 'multiple')) }}
          <br>
          {!! Recaptcha::render() !!}
          <hr>
          <a class="btn-normal" data-dismiss="modal" style="
            padding: 4.5px;
            border: 1px solid black;
            color: #2C82C9;">Tutup</a>
          <button id="postbutton" class="btn-normal" style="
            background: white;
            border: 1px solid black;
            color: #2C82C9;"><i class="fa fa-send"></i> Kirim</button>
          {!! Form::close() !!}
        </div>
      </div>

      <!-- Modal content loading-->
      <div id="modal-whistleblowing-loading" class="modal-content">
        <div class="modal-body">
          <img src="{{ url('img/loading-interactive.gif') }}" style="max-width: 100%">
        </div>
      </div>

      <!-- Modal response -->
      <div id="modal-whistleblowing-response" class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Kirim Aduan Pelanggaran</h4>
        </div>
        <div class="modal-body">
          <p id="whistleblowing-response-text">Berhasil mengirimkan aduan pelanggaran!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>

    </div>
  </div>

  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/wow.js') }}"></script>
  <script src="{{ url('js/lightcase.js') }}"></script>
  <script src="{{ url('js/slick.min.js') }}"></script>
  <script src="{{ url('js/jquery.fullpage.min.js') }}"></script>
  <script src="{{ url('js/masonry.js') }}"></script>
  <script src="{{ url('js/imagesloaded.js') }}"></script>
  <script src="{{ url('js/custom.js') }}"></script>
  <!-- <script src="{{ url('homepage/js/vendors/own-menu.js')}}"></script> -->
  <script src="{{ url('homepage/js/vendors/jquery.sticky.js')}}"></script>
  <script src="{{ url('js/bootstrap-notify.min.js') }}"></script>
  <script type="text/javascript">
      // Modal functions
      $(document).ready(function(){
        /*		STICKY NAVIGATION
        /*-----------------------------------------------------------------------------------*/
        $(".sticky").sticky({topSpacing:0});

          $('#modal-whistleblowing-response').hide();
          $('#modal-whistleblowing-loading').hide();

          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $('form#form_send_whistleblowing').submit(function(e){
              e.preventDefault();

              var gresponse = grecaptcha.getResponse();
              var uraian_pelanggaran = $("#uraian_pelanggaran_wb").val();
              var name = $("#name_wb").val();
              var email = $("#email_wb").val();
              var no_telp = $("#no_telp_wb").val();
              var tempat_kejadian = $("#tempat_kejadian_wb").val();
              var waktu_kejadian = $("#waktu_kejadian_wb").val();
              var pihak_terlibat = $("#pihak_terlibat_wb").val();
              var lampiran_bukti = $("#lampiran_bukti_wb").val();

              var form_data = new FormData(this);

              // Validation
              if(gresponse === null || gresponse === "" ||
                  uraian_pelanggaran === null || uraian_pelanggaran === "" ||
                  name === null || name === "" ||
                  email === null || email === "" ||
                  tempat_kejadian === null || tempat_kejadian === "" ||
                  waktu_kejadian === null || waktu_kejadian === "" ||
                  pihak_terlibat === null || pihak_terlibat === "") {
                  if(gresponse === null || gresponse === "") {
                      $.notify({
                          message: 'Anda harus melakukan verifikasi captcha'
                      },{
                          z_index: 2000,
                          type: 'danger'
                      });
                  }
                  if(uraian_pelanggaran === null || uraian_pelanggaran === "") {
                      $.notify({
                          message: 'Uraian pelanggaran harus terisi'
                      },{
                          z_index: 2000,
                          type: 'danger'
                      });
                  }
                  if(name === null || name === "") {
                      $.notify({
                          message: 'Nama harus terisi'
                      },{
                          z_index: 2000,
                          type: 'danger'
                      });
                  }
                  if(email === null || email === "") {
                      $.notify({
                          message: 'Email harus terisi'
                      },{
                          z_index: 2000,
                          type: 'danger'
                      });
                  }
                  if(tempat_kejadian === null || tempat_kejadian === "") {
                      $.notify({
                          message: 'Tempat kejadian harus terisi'
                      },{
                          z_index: 2000,
                          type: 'danger'
                      });
                  }
                  if(waktu_kejadian === null || waktu_kejadian === "") {
                      $.notify({
                          message: 'Waktu kejadian harus terisi'
                      },{
                          z_index: 2000,
                          type: 'danger'
                      });
                  }
                  if(pihak_terlibat === null || pihak_terlibat === "") {
                      $.notify({
                          message: 'Pihak yang terlibat harus terisi'
                      },{
                          z_index: 2000,
                          type: 'danger'
                      });
                  }
              } else {
                  $('#modal-whistleblowing-display').hide();
                  $('#modal-whistleblowing-response').hide();
                  $('#modal-whistleblowing-loading').show();
                  $.ajax({
                    /* the route pointing to the post function */
                      url: '{{ route('whistle.send') }}',
                      type: 'POST',
                    /* send the csrf-token and the input to the controller */
                      data: form_data,
                      contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                      processData: false, // NEEDED, DON'T OMIT THIS
                    /* remind that 'data' is the response of the AjaxController */
                      success: function (data) {
                          if(data.error !== true) {
                              $("#whistleblowing-response-text").text('Berhasil mengirimkan aduan pelanggaran!');

                              $("#uraian_pelanggaran_wb").val('');
                              $("#name_wb").val('');
                              $("#no_telp_wb").val('');
                              $("#tempat_kejadian_wb").val('');
                              $("#waktu_kejadian_wb").val('');
                              $("#pihak_terlibat_wb").val('');
                              $("#lampiran_bukti_wb").val('');
                          } else {
                              $("#whistleblowing-response-text").text('Terjadi kesalahan! Silahkan coba lagi. Periksa kembali isian email serta captcha anda');
                          }
                          grecaptcha.reset();

                          $('#modal-whistleblowing-display').hide();
                          $('#modal-whistleblowing-response').show();
                          $('#modal-whistleblowing-loading').hide();
                      },
                      error: function (request, status, error) {
                          $('#modal-whistleblowing-display').hide();
                          $('#modal-whistleblowing-response').show();
                          $('#modal-whistleblowing-loading').hide();

                          $('#whistleblowing-response-text').text(request.responseText);
                          grecaptcha.reset();
                      }
                  });
              }
          });

          $('#modal-whistleblowing').on('hidden.bs.modal', function () {
              $('#modal-whistleblowing-display').show();
              $('#modal-whistleblowing-response').hide();
              $('#modal-whistleblowing-loading').hide();
          })
      });
  </script>
  @yield('bottom')

</body>
</html>
