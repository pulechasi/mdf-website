<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Summernote -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <style>
        :root {
            --sidebar-width: 250px;
            --sidebar-collapsed-width: 70px;
            --header-height: 60px;
            --transition-speed: 0.3s;
        }

        body {
            font-family: 'Nunito', sans-serif;
            overflow-x: hidden;
            background-color: #f8f9fa;
        }

        #app {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: var(--sidebar-width);
            background: #343a40;
            color: #fff;
            transition: all var(--transition-speed);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        .sidebar-header {
            padding: 20px 15px;
            border-bottom: 1px solid #4b545c;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .sidebar-header .logo {
            display: flex;
            align-items: center;
        }

        .sidebar-header .logo img {
            height: 40px;
            margin-right: 10px;
        }

        .sidebar-header .logo-text {
            font-weight: bold;
            font-size: 18px;
            white-space: nowrap;
            overflow: hidden;
        }

        .sidebar.collapsed .logo-text {
            display: none;
        }

        .toggle-btn {
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 18px;
            padding: 5px;
            border-radius: 4px;
            transition: background 0.2s;
        }

        .toggle-btn:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 15px 0 0 0;
        }

        .sidebar-menu li {
            position: relative;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            color: #ced4da;
            text-decoration: none;
            transition: all 0.2s;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: #495057;
            color: #fff;
            border-left-color: #007bff;
        }

        .sidebar-menu i {
            margin-right: 10px;
            font-size: 18px;
            width: 20px;
            text-align: center;
        }

        .sidebar.collapsed .sidebar-menu span {
            display: none;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: margin-left var(--transition-speed);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .main-content.expanded {
            margin-left: var(--sidebar-collapsed-width);
        }

        .top-header {
            height: var(--header-height);
            background: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .page-title h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
            color: #343a40;
        }

        .header-actions {
            display: flex;
            align-items: center;
        }

        .user-dropdown .dropdown-toggle {
            display: flex;
            align-items: center;
            color: #495057;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            transition: background 0.2s;
        }

        .user-dropdown .dropdown-toggle:hover {
            background: #f8f9fa;
        }

        .user-dropdown .dropdown-toggle i {
            margin-right: 8px;
            font-size: 16px;
        }

        .user-dropdown .dropdown-menu {
            border: none;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            padding: 10px 0;
        }

        .user-dropdown .dropdown-item {
            padding: 8px 15px;
            display: flex;
            align-items: center;
        }

        .user-dropdown .dropdown-item i {
            margin-right: 8px;
            width: 16px;
            text-align: center;
        }

        .content-area {
            padding: 20px;
            flex: 1;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.mobile-open {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }

            .mobile-menu-btn {
                display: block;
            }
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            color: #495057;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .overlay.active {
            display: block;
        }

        /* Alert Styles */
        .alert {
            border: none;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .alert-dismissible .close {
            padding: 0.75rem 1.25rem;
        }
    </style>
</head>

<body>
    <div id="app">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <img src="{{ asset('app/img/mdf1.png') }}" alt="MDF">
                    <div class="logo-text">{{ config('app.name', 'Laravel') }}</div>
                </div>
                <button class="toggle-btn" title="Toggle Sidebar">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>

            <ul class="sidebar-menu">
                @if (Auth::check())
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                            <i class="fas fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('posts') }}" class="{{ request()->routeIs('posts') ? 'active' : '' }}">
                            <i class="fas fa-ticket-alt"></i>
                            <span>Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('operations') }}"
                            class="{{ request()->routeIs('operations') ? 'active' : '' }}">
                            <i class="fas fa-project-diagram"></i>
                            <span>Operations</span>
                        </a>
                    </li>
                    @if (Auth::user()->role)
                        <li>
                            <a href="{{ route('commands') }}"
                                class="{{ request()->routeIs('commands') ? 'active' : '' }}">
                                <i class="fas fa-user-shield"></i>
                                <span>Command</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users') }}" class="{{ request()->routeIs('users') ? 'active' : '' }}">
                                <i class="fas fa-users"></i>
                                <span>Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('commanders') }}"
                                class="{{ request()->routeIs('commanders') ? 'active' : '' }}">
                                <i class="fas fa-user-md"></i>
                                <span>Commanders</span>
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('adverts') }}" class="{{ request()->routeIs('adverts') ? 'active' : '' }}">
                            <i class="fas fa-bullhorn"></i>
                            <span>Adverts</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('slides.index') }}"
                            class="{{ request()->routeIs('slides.index') ? 'active' : '' }}">
                            <i class="fas fa-camera"></i>
                            <span>Slider</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Top Header -->
            <div class="top-header">
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="page-title">
                    <h1>@yield('page-title', 'Dashboard')</h1>
                </div>
                <div class="header-actions">
                    @auth
                        <div class="user-dropdown dropdown">
                            <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fas fa-user"></i> {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profiles') }}">
                                    <i class="fas fa-user-edit"></i> Edit Profile
                                </a>

                                <a class="dropdown-item" href="{{ route('index') }}" target="_blank">
                                    <i class="fas fa-external-link-alt"></i> Visit Website
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>

            <!-- Content Area -->
            <div class="content-area">
                @if (Session::get('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('error') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>

        <!-- Mobile Overlay -->
        <div class="overlay"></div>
    </div>

    <script>
        $(document).ready(function() {
            // Toggle sidebar
            $('.toggle-btn').click(function() {
                $('.sidebar').toggleClass('collapsed');
                $('.main-content').toggleClass('expanded');

                // Change icon
                if ($('.sidebar').hasClass('collapsed')) {
                    $(this).html('<i class="fas fa-chevron-right"></i>');
                } else {
                    $(this).html('<i class="fas fa-chevron-left"></i>');
                }
            });

            // Mobile menu toggle
            $('.mobile-menu-btn').click(function() {
                $('.sidebar').addClass('mobile-open');
                $('.overlay').addClass('active');
            });

            // Close sidebar when clicking overlay
            $('.overlay').click(function() {
                $('.sidebar').removeClass('mobile-open');
                $('.overlay').removeClass('active');
            });

            // Initialize dropdowns
            $('.dropdown-toggle').dropdown();

            // Summernote initialization
            $('#summernote').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: 100
            });
        });
    </script>
</body>

</html>
