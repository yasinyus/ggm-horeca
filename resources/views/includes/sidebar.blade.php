<style>
    .dropdown-menu li .active{
        background:#48292B !important;
    }
</style>
<div class="main-sidebar sidebar-style-1" style="background: #250202">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <img src="{{ App\Models\Setting::find(1)->brand }}" width="150px" style="padding: 20px">
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header"></li>
            <li class="{{ setActive('admin/dashboard') }} mt-5"><a class="nav-link" style="color:#fff"
                href="{{ route('admin.dashboard.index') }}"><i class="fas fa-home"></i>
                <span>Dashboard</span></a></li>

           @if(auth()->user()->roles == "ADMIN")
           
            <li class="{{ setActive('admin/area') }}"><a class="nav-link" style="color:#fff;"
                    href="{{ route('admin.area.index') }}"><i class="fas fa-map"></i>
                    <span>Area</span></a></li>
            @endif

            <li class="{{ setActive('admin/outlet') }}"><a class="nav-link" style="color:#fff"
                    href="{{ route('admin.outlet.index') }}"><i class="fas fa-list"></i>
                    <span>Outlet</span></a></li>
            @if(auth()->user()->roles == "ADMIN")
            <li class="{{ setActive('admin/merch') }}"><a class="nav-link" style="color:#fff"
                    href="{{ route('admin.merch.index') }}"><i class="fas fa-star"></i>
                    <span>Merchandise</span></a></li>
            <li class="{{ setActive('admin/audience') }}"><a class="nav-link" style="color:#fff"
                    href="{{ route('admin.audience.index') }}"><i class="fas fa-users"></i>
                    <span>User</span></a></li>
            <li class="{{ setActive('admin/user') }}"><a class="nav-link" style="color:#fff"
                 href="{{ route('admin.user.index') }}"><i class="fas fa-user"></i>
                <span>User Outlet</span></a></li>
            <!--<li class="{{ setActive('admin/setting') }}"><a class="nav-link" style="color:#fff"-->
            <!--    href="{{ route('admin.setting.index') }}"><i class="fas fa-cog"></i>-->
            <!--    <span>Setting</span></a></li>-->
        @endif

        </ul>
    </aside>
</div>