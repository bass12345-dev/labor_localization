<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header">
      <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
        <i class="ri-close-line fs-6 ri-menu-2-line"></i>
      </a>
      @include('main.includes.components.logo')
    </div>
    <div class="navbar-collapse collapse" id="navbarSupportedContent" style="background-color: #233242;">
      <ul class="navbar-nav me-auto">
        <!-- @include('main.includes.components.search') -->
      </ul>
      <ul class="navbar-nav">
        @include('main.includes.components.name')
      </ul>
    </div>
  </nav>
</header>