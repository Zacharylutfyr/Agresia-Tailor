  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Collection Table -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url ('table-collection') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Collection Table</span></a>
    </li>

<!-- Gallery Table -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url ('table-gallery') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Gallery Table</span></a>
    </li>

     <!-- Nav Item - Charts -->
     <li class="nav-item">
        <a class="nav-link" href="{{ url ('charts') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Home -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Collection -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('collection') }}">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>Collection</span></a>
    </li>

    <!-- Gallery -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('gallery') }}">
            <i class="fas fa-fw fa-photo-video"></i>
            <span>Gallery</span></a>
    </li>

    <!-- Contact -->
    <li class="nav-item">
        <a class="nav-link" href="{{ url('contact') }}">
            <i class="fas fa-fw fa-phone"></i>
            <span>Contact</span></a>
    </li>

    <!-- Settings -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="buttons.html">Register</a>
                <a class="collapse-item" href="cards.html">Login Another Admin</a>
                <a class="collapse-item" href="buttons.html">Forgot Password</a>
                <a class="collapse-item" href="cards.html">Sign Out</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{ url ('admin/img/undraw_rocket.svg') }}" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>

</ul>
<!-- End of Sidebar -->