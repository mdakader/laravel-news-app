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

            <li><a class="nav-link" href="{{route('admin.language.index')}}"><i class="far fa-square"></i> <span>Languages</span></a>
            </li>
            <li><a class="nav-link" href="{{route('admin.category.index')}}"><i class="far fa-square"></i> <span>Category</span></a>
            </li>
            <li><a class="nav-link" href="{{route('admin.home-section-setting.index')}}"><i class="far fa-square"></i>
                    <span>Home Section Setting</span></a></li>
            <li><a class="nav-link" href="{{route('admin.social-count.index')}}"><i class="far fa-square"></i> <span>Social Count</span></a>
            </li>

            <li><a class="nav-link"
                   href="{{ route('admin.contact-message.index') }}"><i class="fas fa-id-card-alt"></i>
                    <span>{{ __('Contact Messages') }} </span>
                    @if ($unReadMessages > 0)
                        <i class="badge bg-danger" style="color:
            #fff">{{ $unReadMessages }}</i>
                    @endif
                </a></li>
            <li><a class="nav-link" href="{{route('admin.ad.index')}}"><i class="far fa-square"></i>
                    <span>Advertisement</span></a></li>
            <li><a class="nav-link" href="{{route('admin.subscribers.index')}}"><i class="far fa-square"></i> <span>Subscribers</span></a>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>News</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('admin.news.index')}}">All News</a></li>
                    <li><a class="nav-link" href="">Editor</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Pages</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('admin.about.index')}}">About page</a></li>
                    <li><a class="nav-link" href="{{route('admin.contact.index')}}">Contact page</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Footer</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('admin.social-link.index')}}">Social Links</a></li>
                    <li><a class="nav-link" href="{{route('admin.footer-info.index')}}">Footer Info</a></li>
                    <li><a class="nav-link"
                           href="{{route('admin.footer-grid-one.index')}}">{{__('Footer Grid One')}}</a></li>
                    <li><a class="nav-link"
                           href="{{route('admin.footer-grid-two.index')}}">{{__('Footer Grid Two')}}</a></li>
                    <li><a class="nav-link"
                           href="{{route('admin.footer-grid-three.index')}}">{{__('Footer Grid Three')}}</a></li>
                </ul>
            </li>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                </a>
            </div>
        </ul>
    </aside>
</div>
