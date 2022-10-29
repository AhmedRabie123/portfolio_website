<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>

        <ul class="sidebar-menu">
            <li class="{{ Request::is('admin/home') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-title="Dashboard"><i class="fas fa-hand-point-right"></i>
                    <span>Dashboard</span></a></li>

            <li class="nav-item dropdown {{ Request::is('admin/home-banner') || Request::is('admin/home-about') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Home
                        Page</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::is('admin/home-banner') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_home_banner') }}"><i
                                class="fas fa-angle-right"></i>Banner Section</a></li>
                    <li class="{{ Request::is('admin/home-about') ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin_home_about') }}"><i class="fas fa-angle-right"></i>About Section</a>
                    </li>
                </ul>
            </li>

            <li class=""><a class="nav-link" href="setting.html" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-title="Setting"><i class="fas fa-hand-point-right"></i>
                    <span>Setting</span></a></li>

            <li class=""><a class="nav-link" href="form.html" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Form"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

            <li class=""><a class="nav-link" href="table.html" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Table"><i class="fas fa-hand-point-right"></i> <span>Table</span></a></li>

            <li class=""><a class="nav-link" href="invoice.html" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-title="Invoice"><i class="fas fa-hand-point-right"></i>
                    <span>Invoice</span></a></li>

        </ul>
    </aside>
</div>
