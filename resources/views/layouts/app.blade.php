<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Amigol</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/6a2aa0cafc.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.js"></script> 
    <!-- <script src="{{ asset('js/vue-charts.js') }}" defer></script> -->

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
                <span class="brand-text font-weight-light">Amigol</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- <li class="nav-header">Club User</li> -->
                        <li class="nav-item">
                            <router-link to="/dashboard" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Dashboard</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/teams" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Teams</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/members" class="nav-link">
                                <i class="far fa-circle nav-icon green"></i>
                                <p>Team Members</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/category" class="nav-link">
                                <i class="far fa-circle nav-icon green"></i>
                                <p>Category</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/invoice" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green "></i>
                                <p>Invoice</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/membership" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Membership</p>
                            </router-link>
                        </li>
                        <!-- <li class="nav-item">
                            <router-link  to="/coaches" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Coaches</p>
                            </router-link >
                        </li> -->
                        <li class="nav-item">
                            <router-link to="/refrees" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Refrees</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/matchdays" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Matchdays</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link  to="/trainings" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Trainings</p>
                            </router-link >
                        </li>
                        <li class="nav-item">
                            <router-link to="/fieldwardrobe" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Field & Wardrobe</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/users" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Users</p>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/roles" class="nav-link">
                                <i class="nav-icon far fa-circle nav-icon green"></i>
                                <p>Roles</p>
                            </router-link>
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
