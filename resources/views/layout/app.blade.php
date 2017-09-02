<!DOCTYPE html>
<html lang="en" class="main">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <meta name="description" content="Trucking is transportation and Logistics website template">
  <meta name="author" content="pixel-industry">
  <meta name="keywords" content="transportation, logistics, transportation template, logistics template, cargo, business">

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
        <a class="navbar-brand" href="index.html">
          <img class="" src="{{ url('img/ikt-logo.gif') }}">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="nav navbar-nav navbar-nav-dropdown navbar-right">
          <li class="active"><a href="#header">BERANDA</a></li>
          <li class="has-children"><a>TENTANG KAMI</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="{{ url('profile') }}">Profil</a></li>
              <li><a href="#">Visi Misi</a></li>
              <li><a href="{{ url('history') }}">Sejarah Perusahaan</a></li>
              <li><a href="#">Penerapan GCG</a>
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
              <li><a href="#">Budaya Perusahaan</a></li>
              <li class="has-children dropdown-submenu"><a href="#">Rangkul Warga (CSR)</a>
                <ul class="dropdown-menu dropdown-menu-opacity level-2">
                  <li><a href="#">Pendidikan & Keagamaan</a></li>
                  <li><a href="#">Olahraga, Seni & Budaya</a></li>
                  <li><a href="#">Pemuda & Wirausaha</a></li>
                  <li><a href="#">Kesehatan, Sosial & Lingkungan</a></li>
                </ul>
              </li>
              <li><a href="#">Pencapaian</a></li>
              <li><a href="#">Anak Perusahaan</a></li>
              <li><a href="{{ url('clients') }}">Pelanggan Kami</a></li>
            </ul>
          </li>
          <li class="has-children"><a href="#">LAYANAN</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="#">Stevedoring &amp Cardodoring</a></li>
              <li><a href="#">Receiving &amp Delivering</a></li>
              <li><a href="#">Pre Delivery Inspection</a></li>
              <li class="has-children dropdown-submenu"><a href="#">Value Added Services</a>
                <ul class="dropdown-menu dropdown-menu-opacity level-2">
                  <li><a href="#">Minor Repair</a></li>
                  <li><a href="#">Washing</a></li>
                  <li><a href="#">Accessories Installation</a></li>
                  <li><a href="#">Port Stock</a></li>
                  <li><a href="#">Roro Transfer Services</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><a href="#">FASILITAS</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li class="has-children dropdown-submenu"><a href="#">Utama</a>
                <ul class="dropdown-menu dropdown-menu-opacity level-2">
                  <li><a href="#">Minor Repair</a></li>
                  <li><a href="#">Washing</a></li>
                  <li><a href="#">Accessories Installation</a></li>
                  <li><a href="#">Port Stock</a></li>
                  <li><a href="#">Roro Transfer Services</a></li>
                </ul>
              </li>
              <li><a href="#">Penunjang</a></li>
              <li><a href="#">Peralatan</a></li>
            </ul>
          </li>
          <li class="has-children has-children-right"><a href="#">PUSAT INFORMASI</a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li><a href="{{ url('news') }}">News</a></li>
              <li><a href="#">Press Release</a></li>
              <li><a href="#">Annual Report</a></li>
              <li><a href="#">Statistic &amp Data</a></li>
              <li><a href="#">Our Customer</a></li>
              <li><a href="#">Procurement</a></li>
              <li><a href="#">Majalah Limouzine</a></li>
              <li><a href="{{ url('gallery') }}">Gallery</a></li>
            </ul>
          </li>
          <li class="has-children-onClick has-children-right"><a><i class="fa fa-language fa-lg"></i></a>
            <ul class="dropdown-menu dropdown-menu-opacity">
              <li>
                <a href="#">
                <div class="flex-row-center">
                  <img src="./img/english.png" class="mg-r-10" width="20" alt="">
                  <span>English</span>
                </div>
                </a>
              </li>
              <li class="active"><a href="#">
                <div class="flex-row-center">
                  <img src="./img/indonesian.png" class="mg-r-10" width="20" alt="">
                  <span>Bahasa Indonesia</span>
                </div>
                </a>
              </li>
              <li><a href="#">
                <div class="flex-row-center">
                  <img src="./img/japan.png" class="mg-r-10" width="20" alt="">
                  <span>Japanese</span>
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
      <form method="POST" action="">
        <div class="input-group">
          <input type="text" class="form-control col-xs-3" id="" placeholder="Pencarian...">
          <div class="input-group-btn">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </form>
    </div>
  </nav>
<!--/NAV-->
  @yield('content')
  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
  <script src="{{ url('js/wow.js') }}"></script>
  <script src="{{ url('js/lightcase.js') }}"></script>
  <script src="{{ url('js/slick.min.js') }}"></script>
  <script src="{{ url('js/jquery.fullpage.min.js') }}"></script>
  <script src="{{ url('js/masonry.js') }}"></script>
  <script src="{{ url('js/custom.fullpage.js') }}"></script>
  <script src="{{ url('js/custom.js') }}"></script>
  @yield('bottom')
</body>
</html>
