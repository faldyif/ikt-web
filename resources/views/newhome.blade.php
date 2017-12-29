<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <!-- Document Title -->
  <title>IPC Car Terminal</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
  <link rel="stylesheet" type="text/css" href="{{ url('homepage/rs-plugin/css/settings.css')}}" media="screen" />

  <!-- StyleSheets -->
  <link rel="stylesheet" href="{{ url('css/custom-newhome.css')}}">
  <link rel="stylesheet" href="{{ url('homepage/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{ url('homepage/css/bootstrap/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ url('homepage/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{ url('homepage/css/main.css')}}">
  <link rel="stylesheet" href="{{ url('homepage/css/style.css')}}">
  <link rel="stylesheet" href="{{ url('homepage/css/responsive.css')}}">

  <!-- Fonts Online -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Playfair+Display:400,700,900&subset=cyrillic,latin-ext" rel="stylesheet">

  <!-- COLORS -->
  <link rel="stylesheet" id="color" href="{{ url('homepage/css/colors/blue.css')}}">

  <!-- JavaScripts -->
  <script src="{{ url('homepage/js/vendors/modernizr.js')}}"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

<!-- Page Wrapper -->
<div id="wrap">

  <!-- Header -->
  <header class="header light">
    <div class="sticky">
      <div class="container">
        <div class="logo" > <a class="shine" href="#"><img style="max-width:50px;" src="{{url('homepage/images/ikt_putih.png')}}" alt=""></a> </div>

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
                  <li><a href="{{ route('service.stevedoring') }}">{{ trans('menu.stevedoring-cargohandling') }}</a></li>
                  <li><a href="{{ route('service.receiving') }}">{{ trans('menu.receiving-delivering') }}</a></li>
                  <li><a href="{{ route('service.vas') }}">Value Added Services</a>
                </ul>
              </li>
              <li class="dropdown"> <a href="index_mp-3a.html" class="dropdown-toggle" data-toggle="dropdown">{{ strtoupper(trans('menu.facilities')) }}</a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('facilities.fas') }}">{{ trans('menu.main-facilities') }}</a></li>
                  <li><a href="{{ route('facilities.fas-1') }}">{{ trans('menu.support-facilities') }}</a></li>
                <!-- <li><a href="{{ route('facilities.fas-2') }}">{{ trans('menu.equipment-facilities') }}</a></li> -->
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
                  <li><a href="{{ route('company.procurement') }}">{{ trans('menu.procurement') }}</a></li>
                  <li><a href="{{ route('company.magazine') }}">{{ trans('menu.limouzine-magazine') }}</a></li>
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
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!--======= HOME AGENCY =========-->
  <div class="home-agency">
    <div id="particles-js">

      <!--======= HOME MAIN SLIDER =========-->
      <div class="home-slider">


        <!-- SLIDE Start -->
        <div class="tp-banner-container">

          <div class="tp-banner">
            <ul>

              <!-- SLIDE  -->
              <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                <!-- MAIN IMAGE -->
                <img src="{{ url('homepage/images/bg/transparant-img.png')}}"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption sft tp-resizeme "
                     data-x="center" data-hoffset="0"
                     data-y="center" data-voffset="-120"
                     data-speed="800"
                     data-start="1000"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     data-scrolloffset="0"
                     style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><img class="img-responsive" style="height:80px;" src="{{url('homepage/images/sublogo1.png')}}"></div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption sfb font-extra-bold tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="center" data-voffset="-50"
                     data-speed="800"
                     data-start="1000"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     data-scrolloffset="0"
                     style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"><img class="img-responsive" style="height:90px;" src="{{url('homepage/images/sublogo2.png')}}"></div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption sfb font-extra-bold tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="center" data-voffset="60"
                     data-speed="800"
                     data-start="1000"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     data-scrolloffset="0"
                     style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><img class="img-responsive" style="height:130px;" src="{{url('homepage/images/sublogo3.png')}}"></div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption sfb font-extra-bold tp-resizeme"
                     data-x="center" data-hoffset="10"
                     data-y="center" data-voffset="160"
                     data-speed="800"
                     data-start="1000"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.07"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     data-scrolloffset="0"
                     style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><img class="img-responsive" style="height:100px;" src="{{url('homepage/images/sublogo4.png')}}"></div>
              </li>
              <!-- SLIDE  -->
              <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >

                <!-- MAIN IMAGE -->
                <img src="{{url('homepage/images/bg/transparant-img.png')}}"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                <!-- LAYER NR. 1 -->
                <div class="tp-caption sfl tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="center" data-voffset="-70"
                     data-speed="800"
                     data-start="1000"
                     data-easing="Power3.easeInOut"
                     data-splitin="chars"
                     data-splitout="none"
                     data-elementdelay="0.06"
                     data-endelementdelay="0.4"
                     data-endspeed="300"
                     style="z-index: 5; font-size:40px; color:#fff; font-weight:bold; text-transform:uppercase; max-width: auto; max-height: auto; white-space: nowrap;">Indonesia </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption sfr font-extra-bold tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="center" data-voffset="20"
                     data-speed="800"
                     data-start="1000"
                     data-easing="Power3.easeInOut"
                     data-splitin="chars"
                     data-splitout="none"
                     data-elementdelay="0.07"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 6; font-size:120px; color:#fff; text-transform:uppercase; font-weight:bold; white-space: nowrap;">Kendaraan</div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption sfb tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="center" data-voffset="110"
                     data-speed="800"
                     data-start="1000"
                     data-easing="Power3.easeInOut"
                     data-splitin="none"
                     data-splitout="none"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     style="z-index: 7; font-size:50px; font-weight:bold; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">Terminal</div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption lfb tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="center" data-voffset="180"
                     data-speed="800"
                     data-start="1000"
                     data-easing="Power3.easeInOut"
                     data-elementdelay="0.1"
                     data-endelementdelay="0.1"
                     data-endspeed="300"
                     data-scrolloffset="0"
                     style="z-index: 8;"><a href="#content" class="btn-normal">SELENGKAPNYA</a> </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content -->
  <div id="content">

    <!-- HELLO -->
    <section class="hello">

      <!-- Diagonal Top -->
      <div class="cir-tri-bg"></div>
      <div class="container">

        <!-- Heading Block -->
        <div class="heading-block">
          <h6 class="animate fadeInRight" data-wow-delay="0.4s">siapa kami ?</h6>
          <span class="huge-tittle">Tentang</span> </div>
        <!-- HELLO IMG -->
        <div class="col-sm-5">
          <img class="hello-img imgtrans animate fadeInLeft img-responsive" data-wow-delay="0.4s" src="{{url('homepage/images/tentang.png')}}" alt="" >
        </div>
        <!-- CONTENT INFO -->
        <div class="col-sm-7">
          <h4 style="font-weight:bold; color:black;">PT Indonesia Kendaraan Terminal</h4>
          <div class="test-info">
            <p>Tujuan hidup manusia, salah satunya adalah memberikan manfaat bagi sesama, begitu pula sebuah perusaahan, dari awal didirikan agar bisa tumbuh dan bermanfaat bagi kehidupan lingkungan di sekitarnya, bangsa dan negara</p>
            <p>
              PT Indonesia Kendaraan Terminal salah satu anak perusahaan PT Pelabuhan Indonesia II (Persero) memiliki komitmen untuk dapat berbagi melalui pengelolaan terminal kendaraan kelas dunia yang unggul dalam operasional dan pelayanan
            </p>
            <a href="{{ route('company.about') }}" class="btn-flat">lihat profil</a> </div>
        </div>
      </div>

      <!-- Bottom BG Style -->
      <div class="cir-bottom-bg"></div>
    </section>

    <!-- Portfolio -->
    <section class="our-work padding-top-150 padding-bottom-150" data-stellar-background-ratio="0.4">
      <div class="container">
        <!-- Heading Block -->
        <div class="heading-block">
          <h6 class="animate fadeInRight" data-wow-delay="0.4s">galeri foto pilihan</h6>
          <span class="huge-tittle">Albums</span> </div>

        <!-- Liast Work -->
        <div class="list-work">

          <!-- Portfolio Article -->
          <article>
            <ul class="row">

              <!-- Text Detail -->
              <li class="col-md-5">
                <div class="text-info text-right">
                  <h3 class="tittle">Enhancing Corporate Financial Management</h3>
                  <p>Expanding our reach to a greater future, we aim high and always provide best-in-class port and other services to escalate the company's reputation</p>
                  <div class="text-center"> <a href="#." class="btn-flat">Lihat Album</a> </div>
                </div>
              </li>

              <!-- Img -->
              <li class="col-md-7"> <img class="img-right  img-responsive imgtrans animate fadeInRight" data-wow-delay="0.4s" src="{{url('img/4album.jpg')}}" alt="" > </li>
            </ul>
          </article>

          <!-- Portfolio Article -->
          <article>
            <ul class="row">

              <!-- Img -->
              <li class="col-md-7"> <img class="animate img-responsive imgtrans fadeInLeft" data-wow-delay="0.4s" src="{{url('img/3album.jpg')}}" alt="" > </li>

              <!-- Text Detail -->
              <li class="col-md-5">
                <div class="text-info text-left">
                  <h3 class="tittle">Implementing Human Capital Development</h3>
                  <p>Building highly capable human resources, we create superiority by developing high productivity organization based on professionalism and expertise</p>
                  <div class="text-center"> <a href="#." class="btn-flat">Lihat Album</a> </div>
                </div>
              </li>
            </ul>
          </article>

          <!-- Portfolio Article -->
          <article>
            <ul class="row">

              <!-- Text Detail -->
              <li class="col-md-5">
                <div class="text-info text-right">
                  <h3 class="tittle">Implementing Modern Operation Systems</h3>
                  <p>Continuous Optimizing of terminal system solution, we adopt cutting edge technology to deliver well performing operation system</p>
                  <div class="text-center"> <a href="#." class="btn-flat">Lihat Album</a> </div>
                </div>
              </li>

              <!-- Img -->
              <li class="col-md-7"> <img class="img-right animate fadeInRight imgtrans img-responsive" data-wow-delay="0.4s" src="{{url('img/2album.jpg')}}" alt="" > </li>
            </ul>
          </article>

          <!-- Portfolio Article -->
          <article>
            <ul class="row">

              <!-- Img -->
              <li class="col-md-7"> <img class="animate fadeInLeft imgtrans img-responsive" data-wow-delay="0.4s" src="{{url('img/1album.jpg')}}" alt="" > </li>

              <!-- Text Detail -->
              <li class="col-md-5">
                <div class="text-info text-left">
                  <h3 class="tittle">Enhancing Corporate Business</h3>
                  <p>Developing business through customer satisfication and retention, we passionately seek to understand customer demands to maintain customer retention at the highest level</p>
                  <div class="text-center"> <a href="#." class="btn-flat">Lihat Album</a> </div>
                </div>
              </li>
            </ul>
          </article>

          <!-- Load More Work -->
          <div class="text-center"> <a href="{{ route('gallery') }}" class="btn-large">Selengkapnya</a> </div>
        </div>
      </div>
    </section>

    <!-- MORE FEATURED -->
    <section class="work-process">

      <!-- TOP bg Style -->
      <div class="cir-tri-bg" data-stellar-background-ratio="0.4"></div>
      <div class="container">

        <!-- Heading Block -->
        <div class="heading-block white">
          <h6 class="animate fadeInRight" data-wow-delay="0.4s">vision and mission</h6>
          <span class="huge-tittle">VISI MISI</span> </div>

        <!-- Process Steps -->
        <div class="process-steps">
          <!-- Steps 1 -->
          <div class="step-1">
            <div class="col-md-4 center-auto animate fadeInUp" data-wow-delay="0.6s"> <span class="tittle-back"></span>
              <h2 style="color:orange;">VISI</h2>
              <p class="whitetext">Menjadi Terminal Kendaraan Kelas Dunia yang Unggul dalam Operasional dan Pelayanan</p>
              <i class="icon-note"></i> </div>
          </div>

          <!-- Steps 1 -->
          <div class="step-1">
            <div class="col-md-4 center-auto animate fadeInUp" data-wow-delay="0.6s"> <span class="tittle-back">1</span>
              <h2 style="color:orange;">MISI</h2>
              <h4>Untuk Masyarakat Negara</h4>
              <p class="whitetext">Menjamin kelancaran dari keamanan arus barang untuk mewujudkan efisiensi biaya logistik dalam rangka memacu pertumbuhan ekonomi yang berdampak pada peningkatan kesejahteraan masyarakat</p>
              <i class="icon-note"></i> </div>
          </div>
          <div class="row">
            <!-- Steps 2 -->
            <div class="col-md-4 pull-right step-2 animate fadeInLeft" data-wow-delay="0.6s"> <span class="tittle-back">3</span>
              <div class="media-left media-middle"> <i class="icon-magnifier"></i> </div>
              <div class="media-body">
                <h4>Untuk Pelanggan dan Mitra</h4>
                <p class="whitetext">Menyediakan, membangun, dan mengoperasikan pelayanan terminal dan logistik secara terintegrasi, berkualitas dan handal untuk memenuhi kepuasan pelanggan dan mitra.</p>
              </div>
            </div>

            <!-- Steps 4 -->
            <div class="col-md-4 pull-left text-right step-4 animate fadeInRight" data-wow-delay="0.6s">
              <div class="media-body"> <span class="tittle-back">2</span>
                <h4>Untuk Pemegang Saham</h4>
                <p class="whitetext">Memaksimalkan nilai perusahaan bagi pemegang saham dan meningkatkan kesehatan perusahaan secara profesional dengan memenuhi aspek-aspek tata kelola perusahaan yang baik.</p>
              </div>
              <div class="media-right media-middle"> <i class="icon-rocket"></i> </div>
            </div>

            <!-- Center Image -->
            <div class="col-md-4 step-img img-responsive imgtrans text-center animate fadeIn" data-wow-delay="0.3s"> <img src="{{url('img/visimisi.png')}}" class="img-responsive" alt=""> </div>
          </div>

          <!-- Steps 3 -->
          <div class="step-3 animate fadeInDown" data-wow-delay="0.6s"> <span class="tittle-back">4</span> <i class="icon-vector"></i>
            <h4>Untuk Karyawan</h4>
            <div class="col-md-4 center-auto">
              <p class="whitetext">Menciptakan lingkungan kerja yang nyaman bagi karyawan, mewujudkan insan perusahaan yang fokus pada pelanggan, berintegrasi, bangga kepada perusahaan dan budayanya serta memberikan kesejahteraan dan kepuasan kepada karyawan.</p>
            </div>
          </div>

        </div>
      </div>
  </div>

  <!-- Bottom BG Style -->
  <div class="cir-bottom-bg"></div>
  </section>

  <!-- BLOG -->
  <section class="blog padding-top-150 padding-bottom-100" data-stellar-background-ratio="0.5">
    <div class="container">

      <!-- Heading Block -->
      <div class="heading-block">
        <h6 class="animate fadeInRight" data-wow-delay="0.4s">informasi terbaru</h6>
        <span class="huge-tittle">BERITA</span> </div>

      <!-- Blog -->
      <div class="blog-post">
        @if(sizeof($latestNews) > 0)
          <div class="row">

          @if(sizeof($latestNews) >= 1)
            <!-- Big Post -->
              <div class="col-md-6">
                <article class="post-normal third-post">
                  <!-- Imag -->
                  <img class="img-responsive animate fadeIn" data-wow-delay="0.4s" src="{{ url('storage') . '/' . $latestNews[0]->filename }}" alt="" >
                  <!-- Post -->
                  <a href="{{ route('news.detail',  $latestNews[0]->slug) }}" class="post-tittle">{{ $latestNews[0]->title }}</a>
                  <p>{!! substr(strip_tags($latestNews[0]->content), 0, 100) !!}</p>
                  <span class="comm">{{ \Carbon\Carbon::parse($latestNews[0]->created_at)->toFormattedDateString() }} / {{ $latestNews[0]->view_count }} Views</span> <a href="{{ route('news.detail',  $latestNews[0]->slug) }}" class="btn-flat margin-top-15">READ MORE</a>
                </article>
              </div>
          @endif

          @if(sizeof($latestNews) >= 2)
            <!-- Post -->
              <div class="col-md-3">
              @if(sizeof($latestNews) >= 2)
                <!-- Post -->
                  <article class="post-normal">
                    <!-- Imag -->
                    <img class="img-responsive animate fadeIn" data-wow-delay="0.4s" src="{{ url('storage') . '/' . $latestNews[1]->filename }}" alt="" >
                    <!-- Post -->
                    <a href="{{ route('news.detail',  $latestNews[1]->slug) }}" class="post-tittle">{{ $latestNews[1]->title }}</a>
                    <p>{!! substr(strip_tags($latestNews[1]->content), 0, 100) !!}</p>
                    <span class="comm">{{ \Carbon\Carbon::parse($latestNews[1]->created_at)->toFormattedDateString() }} / {{ $latestNews[1]->view_count }} Views</span> <a href="{{ route('news.detail',  $latestNews[1]->slug) }}" class="btn-flat margin-top-15">READ MORE</a> </article>
              @endif

              @if(sizeof($latestNews) >= 3)
                <!-- Post -->
                  <article class="post-normal margin-top-30">
                    <!-- Imag -->
                    <img class="img-responsive animate fadeIn" data-wow-delay="0.4s" src="{{ url('storage') . '/' . $latestNews[2]->filename }}" alt="" >
                    <!-- Post -->
                    <a href="{{ route('news.detail',  $latestNews[2]->slug) }}" class="post-tittle">{{ $latestNews[2]->title }}</a>
                    <p>{!! substr(strip_tags($latestNews[1]->content), 0, 100) !!}</p>
                    <span class="comm">{{ \Carbon\Carbon::parse($latestNews[2]->created_at)->toFormattedDateString() }} / {{ $latestNews[2]->view_count }} Views</span> <a href="{{ route('news.detail',  $latestNews[2]->slug) }}" class="btn-flat margin-top-15">READ MORE</a> </article>
                @endif
              </div>
          @endif

          @if(sizeof($latestNews) >= 4)
            <!-- Post -->
              <div class="col-md-3">
                <!-- Post -->
                <article class="post-normal third-post">
                  <!-- Imag -->
                  <img class="img-responsive animate fadeIn" data-wow-delay="0.4s" src="{{ url('storage') . '/' . $latestNews[3]->filename }}" alt="" >
                  <!-- Post -->
                  <a href="{{ route('news.detail',  $latestNews[3]->slug) }}" class="post-tittle">{{ $latestNews[3]->title }}</a>
                  <p>{!! substr(strip_tags($latestNews[3]->content), 0, 100) !!}</p>
                  <span class="comm">{{ \Carbon\Carbon::parse($latestNews[3]->created_at)->toFormattedDateString() }} / {{ $latestNews[3]->view_count }} Views</span> <a href="{{ route('news.detail',  $latestNews[3]->slug) }}" class="btn-flat margin-top-15">READ MORE</a> </article>
              </div>
            @endif


          </div>

        @endif

        @if(sizeof($latestNews) > 4)
        <!-- Load More Work -->
          <div class="text-center margin-top-100"> <a href="{{ route('news') }}" class="btn-large">Selengkapnya</a> </div>
        @endif
      </div>
    </div>
  </section>

  <!-- Profile -->
  <section class="profile-main" data-stellar-background-ratio="0.5">

    <!-- TOP bg Style -->
    <div class="cir-tri-bg"></div>
    <div class="container">

      <!-- Heading Block -->
      <div class="heading-block">
        <h6 class="animate fadeInRight" data-wow-delay="0.4s">pencapaian dan penghargaan</h6>
        <span class="huge-tittle">Achievements</span> </div>

      <!-- Profile Tabs -->
      <div class="profile-inn">
        <div class="row">
          <div class="col-md-5 text-right test-sec animate fadeInLeft" data-wow-delay="0.4s">
            <h3>ACHIEVEMENT AWARDS</h3>
            <p>pencapaian dan penghargaan yang diterima oleh indonesia kendaraan terminal </p>
          </div>
          <div class="col-md-6">
            <div class="tabs-sec  animate fadeIn" data-wow-delay="0.4s">

              <!-- Tab panes -->
              <div class="tab-content">

                <!-- Awwwards -->
                <div role="tabpanel" class="tab-pane fade in active" id="awards">
                  <ul>
                    <li>
                      <h5>The Best Sales & Marketing in Sector : Subsidiary of BUMN Company</h5>
                      <p>Indonesia Sales Marketing Award 2017/ISMA 2017, Majalah Economic Review, Binus Business School, Indonesia-Asia Institute, Frontliner Services, Ideku Group</p>
                    </li>
                    <li>
                      <h5>The 1st Best 5 of Sales & Marketing Director in Sector : Subsidiary of Company</h5>
                      <p>Indonesia Sales Marketing Award 2017/ISMA 2017, Majalah Economic Review, Binus Business School, Indonesia-Asia Institute, Frontliner Services, Ideku Group</p>
                    </li>

                  </ul>
                  <i class="icon-trophy"></i> </div>

                <!-- Awwwards 2 -->
                <div role="tabpanel" class="tab-pane fade" id="awards1">
                  <ul>
                    <li>
                      <h5>Speaker of Indonesia Sales Marketing Award 2017</h5>
                      <p>ISMA 2017</p>
                    </li>
                    <li>
                      <h5>Speaker "Menyukseskan Tol Maritim, Roro Service Jakarta - Surabaya"</h5>
                      <p></p>
                    </li>
                    <li>
                      <h5>The Best Performance Subsidiary of IPC</h5>
                      <p>PT Pelabuhan Indonesia II (Persero)</p>
                    </li>
                  </ul>
                  <i class="icon-trophy"></i> </div>

                <!-- Awwwards 2 -->
                <div role="tabpanel" class="tab-pane fade" id="awards2">
                  <ul>
                    <li>
                      <h5>The Best CEO Marketing Leadership BUMN Award 2016</h5>
                      <p>BUMN Track Magazine, Arrbey Consulting & Rumah Perubahan</p>
                    </li>
                    <li>
                      <h5>The Best Subsidiary Company of BUMN in Marketing Award 2016</h5>
                      <p>BUMN Track Magazine, Arrbey Consulting & Rumah Perubahan</p>
                    </li>
                  </ul>
                  <i class="icon-trophy"></i> </div>

                <!-- Awwwards 2 -->
                <div role="tabpanel" class="tab-pane fade" id="awards3">
                  <ul>
                    <li>
                      <h5>Prima Utama "Operation Excelent"</h5>
                      <p>SMinistry of Transportation - Republic Of Indonesia</p>
                    </li>
                  </ul>
                  <i class="icon-trophy"></i> </div>
              </div>
            </div>

            <!-- Nav tabs -->
            <ul class="nav nav-pills" role="tablist">
              <li role="presentation" class="active"><a href="#awards" aria-controls="awards" role="tab" data-toggle="tab">2017 </a></li>
              <li role="presentation"><a href="#awards1" aria-controls="awards1" role="tab" data-toggle="tab">2017</a></li>
              <li role="presentation"><a href="#awards2" aria-controls="awards2" role="tab" data-toggle="tab">2016</a></li>
              <li role="presentation"><a href="#" aria-controls="awards3" role="tab" data-toggle="tab">MORE</a></li>
            </ul>
          </div>
        </div>

        <!-- BTN -->
        <div class="btn-part"> <a href="{{ route('company.achievements') }}" class="btn-large btn-large-1 ">Selengkapnya</a> </div>
      </div>
    </div>

    <!-- Clients -->
    <div class="cir-bottom-bg"></div>
  </section>

  <!-- Clients -->
  <section class="testimonial padding-top-150 padding-bottom-150" data-stellar-background-ratio="0.5">
    <div class="container">

      <!-- Heading Block -->
      <div class="heading-block">
        <h6 class=" animate fadeInRight" data-wow-delay="0.4s">clients</h6>
        <span class="huge-tittle">Testimoni</span> </div>

      <!-- Slider -->
      <div class="slider-sec">
        <div id="testi-slide">


        @foreach($testimonials as $key)
          <!-- Slide -->
            <div class="item">
              <div class="media-body">
                <div class="tesi-text">
                  <div class="icon"> <i class="icon-bubbles"></i> </div>
                  <p>{{ $key->testimonial }} </p>
                </div>
              </div>
              <div class="media-right">
                <div class="avatar-sec"> <img class="img-responsive" style="width:120px;" src="{{ url($key->filename) }}" alt="" >
                  <h4>{{ $key->nama }}</h4>
                  <p>{{ $key->instansi }}</p>
                </div>
              </div>
            </div>
          @endforeach

        </div>
      </div>
    </div>
  </section>
</div>
<!-- End Content -->

<!-- Footer -->
<footer class="footer">

  <!-- TOP bg Style -->
  <div class="cir-tri-bg"></div>
  <div class="container">

    <!-- Heading Block -->
    <div class="heading-block white">
      <h6>get in touch </h6>
      <span class="huge-tittle">contact</span> </div>
    <div class="rights col-md-9 center-auto">
      <a href="#" class="btn-normal" data-toggle="modal" data-target="#modal-whistleblowing">Aduan Pelanggaran</a>
    </div>
    <br>
    <!-- Rights -->
    <div class="rights col-md-9 center-auto"> <a href="#." class="mail-to">email :</a>
      <h3>info@indonesiacarterminal.co.id</h3>
      <div class="rights col-md-9 center-auto"> <a href="#." class="mail-to">customer care</a>
        <h4 class="whitetext">+62 811 933 9930 / +62 21 4393 2251</h4>
        <div class="rights col-md-9 center-auto"> <a href="#." class="mail-to">fax</a>
          <h4 class="whitetext">+62 21 4393 2250</h4>

          <div class="social-icons">
            <a href="https://www.facebook.com/IPCIKT"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/pt_ikt"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/ipccarterminal/"><i class="fa fa-instagram"></i></a>
          </div>
          <p>JL Sindang Laut No. 101, Cilincing Jakarta Utara, 14110 </p>
          <p class="margin-top-30"><small> Copyright © 2017 indonesiacarterminal.co.id </small></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->

<!-- GO TO TOP  -->
<a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
<!-- GO TO TOP End -->
</div>

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
        <a class="btn-normal" data-dismiss="modal">Tutup</a>
        <a id="postbutton" class="btn-normal"><i class="fa fa-send"></i> Kirim</a>
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


<!-- JavaScripts -->
<script src="{{ url('homepage/js/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{ url('homepage/js/vendors/wow.min.js')}}"></script>
<script src="{{ url('homepage/js/vendors/bootstrap.min.js')}}"></script>
<script src="{{ url('homepage/js/vendors/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{ url('homepage/js/vendors/own-menu.js')}}"></script>
<script src="{{ url('homepage/js/vendors/jquery.sticky.js')}}"></script>
<script src="{{ url('homepage/js/vendors/owl.carousel.min.js')}}"></script>
<script src="{{ url('homepage/js/vendors/color-switcher.js')}}"></script>

<!--<script src="./js/app.js"></script>
<script src="./js/particles.js"></script>-->

<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="{{ url('homepage/rs-plugin/js/jquery.tp.t.min.js')}}"></script>
<script type="text/javascript" src="{{ url('homepage/rs-plugin/js/jquery.tp.min.js')}}"></script>
<script src="{{ url('homepage/js/main.js')}}"></script>
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

</body>
</html>