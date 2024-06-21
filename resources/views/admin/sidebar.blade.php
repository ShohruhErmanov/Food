<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="{{ route('dashboard') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>

        <li class="dropdown ">
            <a href="{{ route('admin.about.index') }}" class="nav-link"><i data-feather="monitor"></i><span>About</span></a>
          </li>

          <li class="dropdown ">
            <a href="{{ route('admin.service.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Service</span></a>
          </li>

          <li class="dropdown ">
            <a href="{{ route('admin.team.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Our team</span></a>
          </li>

          <li class="dropdown ">
            <a href="{{ route('admin.testimonial.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Testimonial</span></a>
          </li>

          <li class="dropdown ">
            <a href="{{ route('admin.videos.index') }}" class="nav-link"><i data-feather="monitor"></i><span>Restoran Video</span></a>
          </li>

      </ul>
    </aside>
  </div>
