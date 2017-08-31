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
        <li {{{ (Request::is('admin') ? 'class=active' : '') }}}><a href="{{ url('admin') }}"><i class="fa fa-home"></i> <span>Dasbor</span></a></li>
        <li class="treeview {{{ ((Request::is('admin/news/create') || Request::is('admin/news')) ? 'active' : '') }}}">
          <a href="#"><i class="fa fa-newspaper-o"></i> <span>Berita</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('admin/news/create') ? 'class=active' : '') }}}><a href="{{ url('admin/news/create') }}"><i class="fa fa-plus"></i> Buat Berita Baru</a></li>
            <li {{{ (Request::is('admin/news') ? 'class=active' : '') }}}><a href="{{ url('admin/news') }}"><i class="fa fa-list"></i> List Berita</a></li>
          </ul>
        </li>
        <li class="treeview {{{ ((Request::is('admin/album/create') || Request::is('admin/album')) ? 'active' : '') }}}">
          <a href="#"><i class="fa fa-photo"></i> <span>Album</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('admin/album/create') ? 'class=active' : '') }}}><a href="{{ url('admin/album/create') }}"><i class="fa fa-plus"></i> Buat Album Baru</a></li>
            <li {{{ (Request::is('admin/album') ? 'class=active' : '') }}}><a href="{{ url('admin/album') }}"><i class="fa fa-list"></i> List Album</a></li>
          </ul>
        </li>
        <li class="treeview {{{ ((Request::is('admin/berthing-plan/create') || Request::is('admin/berthing-plan')) ? 'active' : '') }}}">
          <a href="#"><i class="fa fa-ship"></i> <span>Berthing Plan</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('admin/berthing-plan/create') ? 'class=active' : '') }}}><a href="{{ url('admin/berthing-plan/create') }}"><i class="fa fa-plus"></i> Buat Berthing Plan Baru</a></li>
            <li {{{ (Request::is('admin/berthing-plan') ? 'class=active' : '') }}}><a href="{{ url('admin/berthing-plan') }}"><i class="fa fa-list"></i> List Berthing Plan</a></li>
          </ul>
        </li>
        <li class="treeview {{{ ((Request::is('admin/event/create') || Request::is('admin/event')) ? 'active' : '') }}}">
          <a href="#"><i class="fa fa-calendar"></i> <span>Agenda</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{{ (Request::is('admin/event/create') ? 'class=active' : '') }}}><a href="{{ url('admin/event/create') }}"><i class="fa fa-plus"></i> Buat Agenda Baru</a></li>
            <li {{{ (Request::is('admin/event') ? 'class=active' : '') }}}><a href="{{ url('admin/event') }}"><i class="fa fa-list"></i> List Agenda</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>