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
  <link rel="stylesheet" type="text/css" href="{{ url('css/ikt-style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/jquery.fullpage.min.css') }}">
</head>
<body>
<div class="loader"></div>
<div id="search-field">
  <span id="closeSearch"><i class="fa fa-times"></i></span>
  <form action="">
    <input type="text" placeholder="type something here and press enter" class="searchfield" />
  </form>
</div>
<div id="language-field">
  <span id="closeLanguage"><i class="fa fa-times"></i></span>
  <div class="container-fluid containerCenter">
    <h1 class="roboLight wh mg-b-20">Select a language  :</h1>
    <form action="">
      <label><input type="radio" name="gender" value="" checked="1"> Bahasa Indonesia</label> <br>
      <label><input type="radio" name="gender" value=""> English </label> <br>
      <label><input type="radio" name="gender" value=""> Jepang </label> <br>
      <button class="submit btn mg-t-20">Submit</button>
    </form>
  </div>
</div>
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
          <img class="" src="{{ url('img/ikt-logo.png') }}">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="nav navbar-nav navbar-nav-dropdown navbar-right">
          <li class="active"><a href="{{ url('index.html#hero') }}">BERANDA</a></li>
          <li class="has-children"><a>TENTANG</a>
            <ul class="dropdown-menu">
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Sejarah Perusahaan</a></li>
              <li><a href="{{ url('agenda.html') }}">Acara Perusahaan</a></li>
              <li class="has-children dropdown-submenu"><a href="#">Berthing Plan</a>
                <ul class="dropdown-menu level-2">
                  <li><a href="#">International</a></li>
                  <li><a href="#">Domestic</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="has-children"><a href="#">LAYANAN</a>
            <ul class="dropdown-menu">
              <li><a href="#">Gambaran Fasilitas</a></li>
              <li><a href="#">Stevedoring &amp Cardodoring</a></li>
              <li><a href="#">Receiving &amp Delivering</a></li>
              <li><a href="#">Storages</a></li>
            </ul>
          </li>
          <li><a href="{{ url('news-list.html') }}">BERITA</a></li>
          <li><a href="{{ url('gallery-list.html') }}">GALLERY</a></li>
          <li><a href="#">PROCUREMENT</a></li>
          <li class="has-children has-children-right"><a href="#">BATUAN</a>
            <ul class="dropdown-menu">
              <li><a href="#">Customer Service</a></li>
              <li><a href="#">Help Desk</a></li>
              <li><a href="#">CCTV</a></li>
            </ul>
          </li>
          <li><a href="#" id="languageButton"><i class="fa fa-language fa-lg"></i></a></li>
          <li class=""><a href="#" id="searchButton"><i class="fa fa-search"></i></a></li>
        </ul>
      </div>
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
  <script src="{{ url('js/particle.js') }}"></script>
  <script type"javascript">
  $(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['Hero', 'About Us', 'Vision and Mission', 'News', 'Agenda', 'Gallery', 'Testimonial', 'Contact Us'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['Hero', 'About Us', 'Vision and Mission', 'News', 'Agenda', 'Gallery', 'Testimonial', 'Contact Us'],
        scrollBar: true,
        afterRender: function(){
            new WOW().init();
        }
			});
    });
  </script>
</body>
</html>
