<div class="navbar-bg"></div>
<!-- Navbar Start -->
@include('admin.layouts.navbar')
<!-- Navbar End -->
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class=active><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-header">Starter</li>

            <li><a class="nav-link" href="{{route('admin.language.index')}}"><i class="far fa-square"></i> <span>Languages</span></a></li>
            <li><a class="nav-link" href="{{route('admin.category.index')}}"><i class="far fa-square"></i> <span>Category</span></a></li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>News</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('admin.news.index')}}">All News</a></li>
                    <li><a class="nav-link" href="layout-default.html">Editor</a></li>
                    <li><a class="nav-link" href="layout-default.html">Validation</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
