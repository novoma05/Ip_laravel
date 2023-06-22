<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/demo_1/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}"/>
    @yield('styles')
    <style>
        :root {
            --primary-color: #ffffff;
            --secondary-color: #000000;
            --third-color: #00ff00;
        }

        .sidebar {
            background-color: var(--primary-color);
        }

        .navbar {
            background-color: var(--primary-color);
        }

        .nav-link {
            color: var(--secondary-color);
        }

        h4 {
            color: var(--secondary-color);
        }

        .navbar-content .nav-profile img {
            border: 2px solid var(--third-color);
        }

        .profile-image {
            background-color: purple;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .profile-image .initial {
            color: white;
            font-size: 24px;
        }
    </style>
</head>
<body>
<div class="main-wrapper">
    <nav class="sidebar" style="background-color: #ffffff;">
        <div class="sidebar-header">
            <a href="./index.html" class="sidebar-brand">
                <img src="{{asset('assets/images/logo.png')}}" alt="logo">
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <img src="{{asset('assets/images/home.svg')}}" alt="logo" style="width: 20px; height: 20px;">
                        <span class="link-title">Overview</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Komponenty</li>
                <li class="nav-item {{(Route::currentRouteName() == 'people.index')?'active':''}}">
                    <a class="nav-link" data-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                        <img src="{{asset('assets/images/user.svg')}}" alt="logo" style="width: 20px; height: 20px;">
                        <span class="link-title">Uživatelé</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse" id="advancedUI">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{route('people.index')}}" class="nav-link">Seznam</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('people.create')}}" class="nav-link">Vytvoř</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="page-wrapper">

        <nav class="navbar">
            <a href="#" class="sidebar-toggler">
                <i data-feather="menu"></i>
            </a>
            <div class="navbar-content">
                <form class="search-form">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown nav-profile">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="profile-image">
                                <span class="initial">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
                                    <div class="profile-image">
                                        <span class="initial">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                    </div>
                                </div>
                                <div class="info text-center">
                                    <p class="name font-weight-bold mb-0">{{Auth::user()->name}}</p>
                                    <p class="email text-muted mb-3">{{Auth::user()->email}}</p>
                                </div>
                            </div>
                            <div class="dropdown-body">
                                <ul class="profile-nav p-0 pt-3">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            <i data-feather="log-out"></i>
                                            <span>Odhlásit se</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="page-content">

            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                <div>
                    <h4 class="mb-3 mb-md-0">@yield('heading')</h4>
                </div>
            </div>

            <div class="row flex-grow">
                <div class="col-12">
                    @include('layouts.message')
                </div>
                <div class="col-12 col-xl-12 stretch-card">
                    @yield('content')
                </div>
            </div>


        </div>

    </div>
</div>

<script src="{{asset('assets/vendors/core/core.js')}}"></script>
<script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/js/template.js')}}"></script>
<script src="{{asset('assets/js/dashboard.js')}}"></script>
@yield('scripts')
</body>
</html>
