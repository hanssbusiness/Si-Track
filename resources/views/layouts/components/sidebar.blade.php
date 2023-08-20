<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Starter Code</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">LSC</a>
    </div>
    <ul class="sidebar-menu">
        @section('sidebar')
            <li class="menu-header">Dashboard</li>
            <li class=""><a href="{{route('dashboard')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a></li>

            <li class="menu-header">Master Data</li>
            <li class=""><a href="{{route('clases.index')}}" class="nav-link"><i class="fas fa-fire"></i><span>Class</span></a></li>
            <li class=""><a href="{{route('students')}}" class="nav-link"><i class="fas fa-fire"></i><span>Students</span></a></li>
        @show
      </ul>

      <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
        <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
          <i class="fas fa-rocket"></i> Documentation
        </a>
      </div>
  </aside>
