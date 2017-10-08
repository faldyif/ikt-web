  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li {{{ (Request::is('*/admin') ? 'class=active' : '') }}}><a href="{{ url('admin') }}"><i class="fa fa-home"></i> <span>Dasbor</span></a></li>
        <li class="treeview {{{ ((Request::is('*/admin/news/create') || Request::is('*/admin/news') || Request::is('*/admin/news-comment')) ? 'active' : '') }}}">
          <a href="#"><i class="fa fa-newspaper-o"></i> <span>Berita</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('*/admin/news/create') ? 'class=active' : '') }}}><a href="{{ route('news.create') }}"><i class="fa fa-plus"></i> Buat Berita Baru</a></li>
            <li {{{ (Request::is('*/admin/news') ? 'class=active' : '') }}}><a href="{{ route('news.index') }}"><i class="fa fa-list"></i> List Berita</a></li>
            <li {{{ (Request::is('*/admin/news-comment') ? 'class=active' : '') }}}><a href="{{ route('news-comment.index') }}"><i class="fa fa-comment"></i> List Komentar Berita</a></li>
          </ul>
        </li>
        <li class="treeview {{{ ((Request::is('*/admin/album/create') || Request::is('*/admin/album') || Request::is('*/admin/album-comment')) ? 'active' : '') }}}">
          <a href="#"><i class="fa fa-photo"></i> <span>Album</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('*/admin/album/create') ? 'class=active' : '') }}}><a href="{{ route('album.create') }}"><i class="fa fa-plus"></i> Buat Album Baru</a></li>
            <li {{{ (Request::is('*/admin/album') ? 'class=active' : '') }}}><a href="{{ route('album.index') }}"><i class="fa fa-list"></i> List Album</a></li>
            <li {{{ (Request::is('*/admin/album-comment') ? 'class=active' : '') }}}><a href="{{ route('album-comment.index') }}"><i class="fa fa-comment"></i> List Komentar Album</a></li>
          </ul>
        </li>
        {{--<li class="treeview {{{ ((Request::is('*/admin/berthing/create') || Request::is('*/admin/berthing')) ? 'active' : '') }}}">--}}
          {{--<a href="#"><i class="fa fa-ship"></i> <span>Berthing Plan</span>--}}
            {{--<span class="pull-right-container">--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</span>--}}
          {{--</a>--}}
          {{--<ul class="treeview-menu">--}}
            {{--<li {{{ (Request::is('*/admin/berthing/create') ? 'class=active' : '') }}}><a href="{{ route('berthing.create') }}"><i class="fa fa-plus"></i> Buat Berthing Plan Baru</a></li>--}}
            {{--<li {{{ (Request::is('*/admin/berthing') ? 'class=active' : '') }}}><a href="{{ route('berthing.index') }}"><i class="fa fa-list"></i> List Berthing Plan</a></li>--}}
          {{--</ul>--}}
        {{--</li>--}}
        <li class="treeview {{{ ((Request::is('*/admin/press-release/create') || Request::is('*/admin/press-release')) ? 'active' : '') }}}">
          <a href="#"><i class="fa fa-bullhorn"></i> <span>Press Release</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('*/admin/press-release/create') ? 'class=active' : '') }}}><a href="{{ route('press-release.create') }}"><i class="fa fa-plus"></i> Buat Press Release Baru</a></li>
            <li {{{ (Request::is('*/admin/press-release') ? 'class=active' : '') }}}><a href="{{ route('press-release.index') }}"><i class="fa fa-list"></i> List Press Release</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>