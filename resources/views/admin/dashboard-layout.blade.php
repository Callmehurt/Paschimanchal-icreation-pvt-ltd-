

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Paschimanchal Admin</title>
    <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/base/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.js" integrity="sha512-0QMJSMYaer2wnpi+qbJOy4rOAlE6CbYImSlrgQuf2MBBMqTvK/k6ZJV126/EbdKzMAXaB6PHzdYxOX6Qey7WWw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js" integrity="sha512-8l10HpXwk93V4i9Sm38Y1F3H4KJlarwdLndY9S5v+hSAODWMx3QcAVECA23NTMKPtDOi53VFfhIuSsBjjfNGnA==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="{{url('/dashboard')}}"><img src="{{asset('images/logo.png')}}" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="{{url('/dashboard')}}"><img src="{{asset('images/logo.png')}}" alt="logo"/></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

            <ul class="navbar-nav navbar-nav-right">

                <li class="nav-item nav-profile dropdown">
                    @auth
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <i class="ti-user text-primary" style="margin-right: 5px;"></i>
                            <span class="font-weight-bold">{{ Auth::user()->name }}</span>
                        </a>
                        @endauth
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="ti-power-off text-primary"></i>
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="ti-view-list"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{url('/dashboard')}}">
                        <i class="ti-shield menu-icon font-weight-bold"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('manage.details')}}">
                        <i class="ti-id-badge menu-icon font-weight-bold"></i>
                        <span class="menu-title">Company Details</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('blogs')}}">
                        <i class="ti-rss menu-icon font-weight-bold"></i>
                        <span class="menu-title">Blogs</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('clients')}}">
                        <i class="ti-flag-alt menu-icon font-weight-bold"></i>
                        <span class="menu-title">Clients</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('manage.team')}}">
                        <i class="ti-user menu-icon font-weight-bold"></i>
                        <span class="menu-title">Team</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('manage.work-place')}}">
                        <i class="ti-world menu-icon font-weight-bold"></i>
                        <span class="menu-title">Work Place</span>
                    </a>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" data-toggle="collapse" href="#jobs" aria-expanded="false" aria-controls="ui-basic">
                        <i class="ti-briefcase menu-icon font-weight-medium"></i>
                        <span class="menu-title">Jobs</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="jobs">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link font-weight-bold" href="{{route('jobs')}}">Add Job</a></li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" href="{{route('manage.jobs')}}">Manage Jobs</a></li>
                        </ul>
                    </div>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{route('projects')}}">--}}
{{--                        <i class="ti-bookmark-alt menu-icon"></i>--}}
{{--                        <span class="menu-title">Projects</span>--}}
{{--                    </a>--}}
{{--                </li>--}}


                <li class="nav-item">
                    <a class="nav-link font-weight-bold" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="ti-bookmark-alt menu-icon font-weight-medium"></i>
                        <span class="menu-title">Projects</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link font-weight-bold" href="{{route('projects')}}">Add Projects</a></li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" href="{{route('manage-project')}}">Manage Projects</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" data-toggle="collapse" href="#services" aria-expanded="false" aria-controls="ui-basic">
                        <i class="ti-settings menu-icon font-weight-medium"></i>
                        <span class="menu-title">Services</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="services">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link font-weight-bold" href="{{route('services')}}">Add Service</a></li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" href="{{route('manage.services')}}">Manage Services</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" data-toggle="collapse" href="#news" aria-expanded="false" aria-controls="ui-basic">
                        <i class="ti-agenda menu-icon font-weight-bold"></i>
                        <span class="menu-title">News & Events</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="news">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link font-weight-bold" href="{{route('load.event.page')}}">Add News & Events</a></li>
                            <li class="nav-item"> <a class="nav-link font-weight-bold" href="{{route('news.events')}}">Manage News & Events</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="font-weight-bold mb-0">Admin Dashboard</h4>
                            </div>
                            <div>
                                @include('success')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">


                @yield('content')


                </div>
            <!-- content-wrapper ends -->

{{--            <footer class="footer">--}}
{{--                <div class="d-sm-flex justify-content-center justify-content-sm-between">--}}
{{--                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020<a href="https://www.bootstrapdash.com/" target="_blank">Pashimanchal</a>. All rights reserved.</span>--}}
{{--                </div>--}}
{{--            </footer>--}}
            <!-- partial -->

        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>

<script src="{{asset('js/off-canvas.js')}}"></script>
<script src="{{asset('js/hoverable-collapse.js')}}"></script>

<!-- Custom js for this page-->
<script src="{{asset('js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>




