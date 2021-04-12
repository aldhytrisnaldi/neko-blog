<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="">{{ config('app.name') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">
            {{ strtoupper(substr(config('app.name'), 0, 2)) }}
        </a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
        @can('promotion-list')
            <li class="{{ request()->is('promotion') ? 'active' : request()->is('promotion/create') ? 'active' : request()->is('promotion/*/edit') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/promotion') }}"><i class="fas fa-ad"></i> <span>Promotion</span></a></li>
        @endcan

        @can('category-list')
            <li class="{{ request()->is('category') ? 'active' : request()->is('category/create') ? 'active' : request()->is('category/*/edit') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/category') }}"><i class="fas fa-folder"></i> <span>Category</span></a></li>
        @endcan

        @hasanyrole('superadmin')
            <li class="{{
                request()->is('user') ? 'dropdown active' : request()->is('user/create') ? 'dropdown active' : request()->is('user/*/edit') ? 'dropdown active' :
                request()->is('role') ? 'dropdown active' : request()->is('role/create') ? 'dropdown active' : request()->is('role/*/edit') ? 'dropdown active' : 'dropdown'
            }}">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->is('role') ? 'active' : request()->is('role/create') ? 'active' : request()->is('role/*/edit') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/role') }}">Role</a></li>
                    <li class="{{ request()->is('user') ? 'active' : request()->is('user/create') ? 'active' : request()->is('user/*/edit') ? 'active' : '' }}"><a class="nav-link" href="{{ url('/user') }}">User</a></li>
                </ul>
            </li>
        @endhasanyrole
    </ul>
</aside>
