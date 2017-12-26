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

  <link rel="stylesheet" type="text/css" href="{{ url('css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/lightcase.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/slick.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/jquery.fullpage.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/ikt-style.css') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @yield('head')
</head>
<body>
<div class="loader"></div>
<!--NAV-->
  <nav id="navbar" class="navbar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed floatRight" data-toggle="collapse" data-target="#Navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('welcome') }}">
          <img class="" src="{{ url('img/ikt_putih.png') }}">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="nav navbar-nav navbar-nav-dropdown navbar-right">
          <li class=""><a href="{{ url('/') }}">{{ strtoupper(trans('menu.home')) }}</a></li>
          <li class="has-children"><a>{{ strtoupper(trans('menu.about-us')) }}</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="{{ route('company.about') }}">{{ trans('menu.profile') }}</a></li>
              <li><a href="{{ route('company.ceo-message') }}">{{ trans('menu.ceo-message') }}</a></li>
              <li><a href="{{ route('company.history') }}">{{ trans('menu.company-history') }}</a></li>
              <li><a href="{{ route('company.gcg') }}">{{ trans('menu.gcg-application') }}</a></li>
                
              
              <li><a href="{{ route('company.culture') }}">{{ trans('menu.company-culture') }}</a></li>
              <li><a href="{{ route('company.corporate-roadmap') }}">{{ trans('menu.corporate-roadmap') }}</a></li>
              <li><a href="{{ route('csr') }}">{{ trans('menu.csr') }}</a></li>
              <!-- <li class="has-children dropdown-submenu"><a href="#">{{ trans('menu.csr') }}</a>
                <ul class="dropdown-menu dropdown-menu-opacity level-2">
                  <li><a href="{{ route('csr.education') }}">{{ trans('menu.education-religion') }}</a></li>
                  <li><a href="{{ route('csr.sport') }}">{{ trans('menu.sport-art-culture') }}</a></li>
                  <li><a href="{{ route('csr.youth') }}">{{ trans('menu.youth-entrepreneurship') }}</a></li>
                  <li><a href="{{ route('csr.health') }}">{{ trans('menu.health-social-environment') }}</a></li>
                </ul>
              </li> -->
              <li><a href="{{ route('company.achievements') }}">{{ trans('menu.achievements') }}</a></li>
              <li><a href="{{ route('company.subsidiary') }}">{{ trans('menu.subsidiary') }}</a></li>
            </ul>
          </li>
          <li class="has-children"><a href="#">{{ strtoupper(trans('menu.services')) }}</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="{{ route('service.stevedoring') }}">{{ trans('menu.stevedoring-cargohandling') }}</a></li>
              <li><a href="{{ route('service.receiving') }}">{{ trans('menu.receiving-delivering') }}</a></li>
              <li><a href="{{ route('service.pdi') }}">Storages</a></li>
              <li><a href="{{ route('service.vas') }}">Value Added Services</a>
              <!-- <li class="has-children dropdown-submenu"><a href="#">Value Added Services</a>
                <ul class="dropdown-menu dropdown-menu-opacity level-2">
                  <li><a href="#">Minor Repair</a></li>
                  <li><a href="#">Washing</a></li>
                  <li><a href="#">Accessories Installation</a></li>
                  <li><a href="#">Port Stock</a></li>
                  <li><a href="#">Roro Transfer Services</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <li class="has-children"><a href="#">{{ strtoupper(trans('menu.facilities')) }}</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="{{ route('facilities.fas') }}">{{ trans('menu.main-facilities') }}</a></li>
              <li><a href="{{ route('facilities.fas-1') }}">{{ trans('menu.support-facilities') }}</a></li>
              <li><a href="{{ route('facilities.fas-2') }}">{{ trans('menu.equipment-facilities') }}</a></li>
            </ul>
          </li>
          <li class="has-children has-children-right"><a href="#">{{ strtoupper(trans('menu.information-center')) }}</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="{{ route('news') }}">{{ trans('menu.news') }}</a></li>
              <li><a href="{{ route('gallery') }}">{{ trans('menu.gallery') }}</a></li>
              <li><a href="{{ route('press-release') }}">{{ trans('menu.press-release') }}</a></li>
              <li><a href="{{ route('annual') }}">{{ trans('menu.annual-report') }}</a></li>
              <li><a href="{{ route('statistic') }}">{{ trans('menu.statistic-data') }}</a></li>
              <li><a href="{{ route('company.clients') }}">{{ trans('menu.our-customer') }}</a></li>
              <li><a href="http://www.eproc-ikt.com">{{ trans('menu.procurement') }}</a></li>
              <li><a href="{{ route('company.magazine') }}">{{ trans('menu.limouzine-magazine') }}</a></li>
              
            </ul>
          </li>
          <li class="has-children-onClick has-children-right"><a><i class="fa fa-language fa-lg"></i></a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li {{ (app()->getLocale() == 'en' ? 'class=active' : '') }}>
                <a href="{{ route('lang.switch', 'en') }}">
                <div class="flex-row-center">
                  <img src="{{ url('img/english.png') }}" class="mg-r-10" width="20" alt="">
                  <span>English</span>
                </div>
                </a>
              </li>
              <li {{ (app()->getLocale() == 'id' ? 'class=active' : '') }}>
                <a href="{{ route('lang.switch', 'id') }}">
                <div class="flex-row-center">
                  <img src="{{ url('img/indonesian.png') }}" class="mg-r-10" width="20" alt="">
                  <span>Bahasa Indonesia</span>
                </div>
                </a>
              </li>
              <li {{ (app()->getLocale() == 'jp' ? 'class=active' : '') }}>
                <a href="{{ route('lang.switch', 'jp') }}">
                <div class="flex-row-center">
                  <img src="{{ url('img/japan.png') }}" class="mg-r-10" width="20" alt="">
                  <span>日本語</span>
                </div>
                </a>
              </li>
            </ul>
          </li>
          <li class=""><a id="showToggle"><i class="fa fa-search"></i></a></li>
        </ul>
      </div>
    </div>
    <div id="thisToggle" class="search-field pd-bt-10">
      <form method="GET" action="{{ route('search') }}">
        <div class="input-group">
          <input name="q" type="text" class="form-control col-xs-3" id="" placeholder="{{ trans('menu.search') }}">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
  </nav>
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
          {{ Form::textarea('content', null, array('id' => 'content_wb', 'required' => 'required', 'class' => 'form-control', 'style' => '-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;width: 100%;')) }}
          <hr>
          {!! Recaptcha::render() !!}
          {!! Form::close() !!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button id="postbutton" class="btn btn-info"><i class="fa fa-send"></i> Kirim</button>
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
  <script src="{{ url('js/bootstrap-notify.min.js') }}"></script>
  <script type="text/javascript">
      // Modal functions
      $(document).ready(function(){
          $('#modal-whistleblowing-response').hide();
          $('#modal-whistleblowing-loading').hide();

          var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
          $("#postbutton").click(function(){

              var gresponse = grecaptcha.getResponse();
              var content = $("#content_wb").val();

              if(gresponse === null || gresponse === "" || content === null || content === "") {
                  if(gresponse === null || gresponse === "") {
                      $.notify({
                          message: 'Anda harus melakukan verifikasi captcha'
                      },{
                          z_index: 2000,
                          type: 'danger'
                      });
                  }
                  if(content === null || content === "") {
                      $.notify({
                          message: 'Konten harus terisi'
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
                      data: {_token: CSRF_TOKEN, content: content, 'g-recaptcha-response': gresponse},
                      dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                      success: function (data) {
                          $(".writeinfo").append(data.msg);

                          $('#modal-whistleblowing-display').hide();
                          $('#modal-whistleblowing-response').show();
                          $('#modal-whistleblowing-loading').hide();

                          grecaptcha.reset();
                          $("#content_wb").val('');
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
  <script type="text/javascript">
    setInterval(function () {
      $('#my_button_div').addClass('shine');
      setTimeout(function () {
          $('#my_button_div').removeClass('shine');
      }, 2000);
  }, 6000);
  </script>
  @yield('bottom')

</body>
</html>
