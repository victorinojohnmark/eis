<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <i class="fas fa-leaf brand-image elevation-3 mt-1"></i>
        <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel ') }}</span>
    </a>
    <!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            
            {{-- <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon fas fa-th"></i><p>Simple Link<span class="right badge badge-danger">New</span></p></a></li> --}}
            
            <li class="nav-item"><a href="/dashboard" class="nav-link"><i class="fas fa-chalkboard nav-icon"></i><p>Dashboard</p></a></li>

            <li class="nav-item menu-close">
                <a href="#" class="nav-link"><i class="nav-icon fas fa-tachometer-alt"></i><p>Starter Pages</p> <i class="right fas fa-angle-left"></i></a>
                <ul class="nav nav-treeview">
                    <li class="nav-item"><a href="#" class="nav-link active"><i class="far fa-circle nav-icon"></i><p>Active Page</p></a></li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Inactive Page</p></a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

