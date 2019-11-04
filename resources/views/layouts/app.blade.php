<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Amigol') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/6a2aa0cafc.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

@if(Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register')

<body class="register-page">
    <div id="app">

        @yield('auth')
    </div>
</body>

@else

<body class="hold-transition sidebar-mini">
    <div id="app" class="wrapper">

        @include('layouts.includes.header')

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">{{ config('app.name', 'Amigol') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-header">Club User</li>
                        <li class="nav-item">
                            <router-link  to="/dashboard" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Dashboard
                                </p>
                            </router-link >
                        </li>
                        <li class="nav-item">
                            <router-link  to="/teams" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Teams
                                </p>
                            </router-link >
                        </li>
                        <li class="nav-item">
                            <router-link  to="/invoice" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Invoice
                                </p>
                            </router-link >
                        </li>
                        <li class="nav-item">
                            <router-link  to="/sponsoring" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Sponsoring
                                </p>
                            </router-link >
                        </li>

                        <li class="nav-item">
                            <router-link  to="/membership" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Membership
                                </p>
                            </router-link >
                        </li>
                        <li class="nav-item">
                            <router-link  to="/contracts" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Contracts
                                </p>
                            </router-link >
                        </li>
                        <li class="nav-item">
                            <router-link  to="/statistics" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Statistics
                                </p>
                            </router-link >
                        </li>
                        <li class="nav-item">
                            <router-link  to="/communications" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Communications
                                </p>
                            </router-link >
                        </li>
                        <li class="nav-item">
                            <router-link  to="/users" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    User Management
                                </p>
                            </router-link >
                        </li>


                        <li class="nav-header">Team User</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Teams
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Coaches
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Trainings
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Matchdays
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Players
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon"></i>
                                <p>
                                    Tasks
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">

                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">

                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            @yield('content')
                            <router-view></router-view>
                            <!-- set progressbar -->
                            <vue-progress-bar></vue-progress-bar>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.includes.footer')

    </div>
    <!-- ./wrapper -->
</body>

@endif



</html>
