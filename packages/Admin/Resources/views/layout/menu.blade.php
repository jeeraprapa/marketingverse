
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin::dashboard')}}">
        Marketingverse
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{request()->routeIs('admin::dashboard*') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('admin::dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{request()->routeIs('admin::brand*') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('admin::brand')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Brand</span></a>
    </li>


</ul>
<!-- End of Sidebar -->

