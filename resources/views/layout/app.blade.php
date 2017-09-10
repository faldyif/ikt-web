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
          <img class="" src="{{ url('img/ikt-logo.gif') }}">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="nav navbar-nav navbar-nav-dropdown navbar-right">
          <li class="active"><a href="{{ url('/') }}">{{ strtoupper(trans('menu.home')) }}</a></li>
          <li class="has-children"><a>{{ strtoupper(trans('menu.about-us')) }}</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="{{ route('company.about') }}">{{ trans('menu.profile') }}</a></li>
              <li><a href="{{ route('company.vision-mission') }}">{{ trans('menu.vision-mission') }}</a></li>
              <li><a href="{{ route('company.history') }}">{{ trans('menu.company-history') }}</a></li>
              <li><a href="#">{{ trans('menu.gcg-application') }}</a>
                <!--<ul class="dropdown-menu level-2">-->
                <!--<li><a href="#">Tata Kelola Perusahaan Berkelanjutan</a></li>-->
                <!--<li><a href="#">Pemegang Saham &amp RUPS</a></li>-->
                <!--<li><a href="#">BOD</a></li>-->
                <!--<li><a href="#">BOC</a></li>-->
                <!--<li><a href="#">Keterbukaan Informasi</a></li>-->
                <!--<li><a href="#">Board Manual</a></li>-->
                <!--<li><a href="#">Code of Conduct</a></li>-->
                <!--<li><a href="#">Whistle Blower</a></li>-->
                <!--<li><a href="#">Pengelolaan Gratifikasi</a></li>-->
                <!--<li><a href="#">LHKPN</a></li>-->
                <!--</ul>-->
              </li>
              <li><a href="{{ route('company.culture') }}">{{ trans('menu.company-culture') }}</a></li>
              <li class="has-children dropdown-submenu"><a href="#">{{ trans('menu.csr') }}</a>
                <ul class="dropdown-menu dropdown-menu-opacity level-2">
                  <li><a href="#">{{ trans('menu.education-religion') }}</a></li>
                  <li><a href="#">{{ trans('menu.sport-art-culture') }}</a></li>
                  <li><a href="#">{{ trans('menu.youth-entrepreneurship') }}</a></li>
                  <li><a href="#">{{ trans('menu.health-social-environment') }}</a></li>
                </ul>
              </li>
              <li><a href="{{ route('company.achievements') }}">{{ trans('menu.achievements') }}</a></li>
              <li><a href="#">{{ trans('menu.subsidiary') }}</a></li>
            </ul>
          </li>
          <li class="has-children"><a href="#">{{ strtoupper(trans('menu.services')) }}</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="{{ route('service.stevedoring') }}">{{ trans('menu.stevedoring-cargodoring') }}</a></li>
              <li><a href="{{ route('service.receiving') }}">{{ trans('menu.receiving-delivering') }}</a></li>
              <li><a href="#">{{ trans('menu.pre-delivery-inspection') }}</a></li>
              <li><a href="{{ route('service.vas') }}">{{ trans('menu.value-added-services') }}</a></li>
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
              <li><a href="#">{{ trans('menu.main-facilities') }}</a>
              <li><a href="#">{{ trans('menu.support-facilities') }}</a></li>
              <li><a href="#">{{ trans('menu.equipment-facilities') }}</a></li>
            </ul>
          </li>
          <li class="has-children has-children-right"><a href="#">{{ strtoupper(trans('menu.information-center')) }}</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="{{ route('news') }}">{{ trans('menu.news') }}</a></li>
              <li><a href="{{ route('press-release') }}">{{ trans('menu.press-release') }}</a></li>
              <li><a href="#">{{ trans('menu.annual-report') }}</a></li>
              <li><a href="#">{{ trans('menu.statistic-data') }}</a></li>
              <li><a href="{{ route('company.clients') }}">{{ trans('menu.our-customer') }}</a></li>
              <li><a href="#">{{ trans('menu.procurement') }}</a></li>
              <li><a href="#">{{ trans('menu.limouzine-magazine') }}</a></li>
              <li><a href="{{ route('gallery') }}">{{ trans('menu.gallery') }}</a></li>
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
  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/wow.js') }}"></script>
  <script src="{{ url('js/lightcase.js') }}"></script>
  <script src="{{ url('js/slick.min.js') }}"></script>
  <script src="{{ url('js/jquery.fullpage.min.js') }}"></script>
  <script src="{{ url('js/masonry.js') }}"></script>
  <script src="{{ url('js/custom.js') }}"></script>
  @yield('bottom')
</body>
</html>
