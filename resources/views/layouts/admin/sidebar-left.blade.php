<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<div class="sticky">
    <aside class="app-sidebar sidebar-scroll">
        <div class="main-sidebar-header active">
            <a class="desktop-logo logo-light active" href="{{ route('user.home') }}"><img src="{{ asset('dashboard/img/brand/logo.png') }}" class="main-logo" alt="logo"></a>
            <a class="desktop-logo logo-dark active" href="{{ route('user.home') }}"><img src="{{ asset('dashboard/img/brand/logo-white.png') }}" class="main-logo" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-light active" href="{{ route('user.home') }}"><img src="{{ asset('dashboard/img/brand/favicon.png') }}" alt="logo"></a>
            <a class="logo-icon mobile-logo icon-dark active" href="{{ route('user.home') }}"><img src="{{ asset('dashboard/img/brand/favicon-white.png') }}" alt="logo"></a>
        </div>
        <div class="main-sidemenu">
            <div class="main-sidebar-loggedin">
                <div class="app-sidebar__user">
                    <div class="dropdown user-pro-body text-center">
                        <div class="user-pic">
                            <img src="{{ (!empty( Auth::guard('admin')->user()->image)) ? url('upload/admin_images/'.Auth::guard('admin')->user()->image):url('upload/no_image.jpg') }}" alt="user-img" class="rounded-circle mCS_img_loaded">
                        </div>
                        <div class="user-info">
                            <h6 class=" mb-0 text-dark">{{ Auth::guard('admin')->user()->name }}</h6>
                            <span class="text-muted app-sidebar__user-name text-sm">{{ Auth::guard('admin')->user()->username }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-navs">
                <ul class="nav  nav-pills-circle">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Settings" aria-describedby="tooltip365540">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-settings"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Chat" aria-describedby="tooltip143427">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-mail"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Followers">
                        <a class="nav-link text-center m-2">
                            <i class="fe fe-user"></i>
                        </a>
                    </li>
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Logout">
                        <a class="nav-link text-center m-2" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fe fe-power"></i>
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>
            <ul class="side-menu ">
                <li class="slide">
                    <a class="side-menu__item {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.admin.home') }}"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">Dashboard</span></a>
                </li>

                <li class="slide {{ Request::is('admin/abouts*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">About Us</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">About Us</a></li>
                        <li><a class="slide-item{{ Request::is('admin/abouts/create') ? 'active' : '' }}" href="{{ route('admin.about.create')}}">About Us Add</a></li>
                        <li><a class="slide-item{{ Request::is('admin/abouts/index') ? 'active' : '' }}" href="{{ route('admin.about.index')}}">About Us List</a></li>
                    </ul>
                </li>

                <li class="slide {{ Request::is('admin/sections*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Sections</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Sections</a></li>
                        <li><a class="slide-item {{ Request::is('admin/sections/create') ? 'active' : '' }}" href="{{ route('admin.section.create')}}">Section Add</a></li>
                        <li><a class="slide-item {{ Request::is('admin/sections/index') ? 'active' : '' }}" href="{{ route('admin.section.index')}}">Section List</a></li>
                    </ul>
                </li>

                <li class="slide {{ Request::is('admin/categories*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Category</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Category</a></li>
                        <li><a class="slide-item {{ Request::is('admin/categories/create') ? 'active' : '' }}" href="{{ route('admin.category.create')}}">Category Add</a></li>
                        <li><a class="slide-item {{ Request::is('admin/categories/index') ? 'active' : '' }}" href="{{ route('admin.category.index')}}">Category List</a></li>
                    </ul>
                </li>

                <li class="slide {{ Request::is('admin/menus*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Menu Builder</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Menu Builder</a></li>
                        <li><a class="slide-item {{ Request::is('admin/menuBuilder') ? 'active' : '' }}" href="{{ route('admin.menuBuilder')}}">Mange Menu Builder</a></li>
                    </ul>
                </li>


                <li class="slide {{ Request::is('admin/courses*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Course</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Course</a></li>
                        <li><a class="slide-item{{ Request::is('admin/course/create') ? 'active' : '' }}" href="{{ route('admin.course.create')}}">Course Add</a></li>
                        <li><a class="slide-item{{ Request::is('admin/course/index') ? 'active' : '' }}" href="{{ route('admin.course.index')}}">Course List</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Model Test</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Model Test</a></li>
                        <li><a class="slide-item" href="#">Model Test Add</a></li>
                        <li><a class="slide-item" href="#">Model Test List</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Learning School</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Learning School</a></li>
                        <li><a class="slide-item" href="#">Learning School Add</a></li>
                        <li><a class="slide-item" href="#">Learning School List</a></li>
                    </ul>
                </li>

                <li class="slide {{ Request::is('admin/instructors*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Instructors</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Instructors</a></li>
                        <li><a class="slide-item {{ Request::is('admin/instructors/create') ? 'active' : '' }}" href="{{ route('admin.instructor.create')}}">Instructors Add</a></li>
                        <li><a class="slide-item {{ Request::is('admin/instructors/create') ? 'active' : '' }}" href="{{ route('admin.instructor.index')}}">Instructors List</a></li>
                    </ul>
                </li>

                <li class="slide {{ Request::is('admin/pages*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Pages</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Pages</a></li>
                        <li><a class="slide-item {{ Request::is('admin/pages/create') ? 'active' : '' }}" href="{{ route('admin.page.create')}}">Pages Add</a></li>
                        <li><a class="slide-item {{ Request::is('admin/pages/index') ? 'active' : '' }}" href="{{ route('admin.page.index')}}">Pages List</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Blogs</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Blogs</a></li>
                        <li><a class="slide-item" href="#">Blog Add</a></li>
                        <li><a class="slide-item" href="#">Blog List</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Testimonials</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Testimonials</a></li>
                        <li><a class="slide-item" href="#">Testimonials Add</a></li>
                        <li><a class="slide-item" href="#">Testimonials List</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Teams</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Teams</a></li>
                        <li><a class="slide-item" href="#">Team Add</a></li>
                        <li><a class="slide-item" href="#">Team List</a></li>
                    </ul>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Partners</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Partners</a></li>
                        <li><a class="slide-item" href="#">Partner Add</a></li>
                        <li><a class="slide-item" href="#">Partner List</a></li>
                    </ul>
                </li>

                <li class="slide {{ Request::is('admin/settings*') ? 'is-expanded' : '' }}">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon fe fe-box"></i><span class="side-menu__label">Advance Settings</span><i class="angle fe fe-chevron-down"></i></a>
                    <ul class="slide-menu">
                        <li class="side-menu__label1"><a href="javascript:void(0);">Advance Settings</a></li>
                        <li><a class="slide-item {{ Request::is('admin/settings/index') ? 'active' : '' }}" href="{{ route('admin.settings.index')}}">Manage Setting</a></li>
                        <li><a class="slide-item" href="#">Manage Seo</a></li>
                        <li><a class="slide-item" href="#">Manage Color</a></li>
                        <li><a class="slide-item" href="#">Payment Gateway</a></li>
                    </ul>
                </li>

            </ul>

            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </aside>
</div>